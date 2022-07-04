<?php

namespace App\Http\Controllers;

use Exception;
use Faker\Factory;
use ReCaptcha\ReCaptcha;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\RedirectResponse;
use Spatie\Honeypot\ProtectAgainstSpam;

class EncryptIt extends Controller
{
    public function __construct()
    {
        if(app()->environment('production'))
        {
            $this->middleware(ProtectAgainstSpam::class );
            $this->middleware( 'throttle:1,1' ); //1 request per minute
        }
    }

    public function __invoke(Request $request): Response|RedirectResponse
    {
        $this->validate( $request, [
            'content' => 'required|max:4096',
            'g-recaptcha-response' => Rule::requiredIf(app()->environment('production'))
        ]);

        if(app()->environment('production'))
        {
            $recaptcha = new ReCaptcha( config('services.google.recaptcha.v2.secret_key') );

            $resp = $recaptcha->setExpectedHostname(config('services.google.recaptcha.v2.host') )
                ->verify( $request->input('g-recaptcha-response'), $request->server('REMOTE_ADDR'));

            if( ! $resp->isSuccess() )
            {
                return redirect()->back()->withErrors(['g-recaptcha-response' => 'The recaptcha verification failed.']);
            }
        }

        $session = $request->session()->getId();
        $uuid = (string)Str::uuid();
        $lifetime = config('database.redis.default_ttl');
        $data = encrypt( $request->input('content') );

        $passphrase = $this->generatePassphrase();

        Redis::setex( "encrypted:{$uuid}", $lifetime, $data );
        Redis::setex( "passphrase:{$uuid}", $lifetime, encrypt( $passphrase ) );
        Redis::setex( "session:{$uuid}", $lifetime, encrypt( $session ) );

        return redirect()->to("/confirm/{$uuid}" );
    }

    private function generatePassphrase(): Exception|array
    {
        $faker = Factory::create( 'en_US' );

        //random_int is "cryptographically-secure"
        //will throw exception if unable to use random_init
        //stopping the redis `setex` from happening (which is good if it can't set a passphrase)
        $words[ random_int( PHP_INT_MIN, PHP_INT_MAX ) ] = strtolower( $faker->firstName );
        $words[ random_int( PHP_INT_MIN, PHP_INT_MAX ) ] = strtolower( $faker->safeColorName );
        $words[ random_int( PHP_INT_MIN, PHP_INT_MAX ) ] = strtolower( $faker->dayOfWeek );
        $words[ random_int( PHP_INT_MIN, PHP_INT_MAX ) ] = strtolower( $faker->state );

        return $words;
    }
}
