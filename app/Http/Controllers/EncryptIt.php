<?php

namespace App\Http\Controllers;

use Faker\Factory;
use ReCaptcha\ReCaptcha;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Spatie\Honeypot\ProtectAgainstSpam;

class EncryptIt extends Controller
{
    public function __construct()
    {
        $this->middleware(ProtectAgainstSpam::class );
        $this->middleware( 'throttle:1,1' ); //1 request per minute
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->validate( $request, [
            'content' => 'required|max:4096',
            'g-recaptcha-response' => 'required'
        ]);

        $recaptcha = new ReCaptcha( config('services.google.recaptcha.v2.secret_key') );

        $resp = $recaptcha->setExpectedHostname(config('services.google.recaptcha.v2.host') )
            ->verify( $request->input('g-recaptcha-response'), $request->server('REMOTE_ADDR'));

        if( ! $resp->isSuccess() )
        {
            //$errors = $resp->getErrorCodes();
            return redirect()->back()->withErrors(['g-recaptcha-response' => 'The recaptcha verification failed.']);
        }

        $session = $request->session()->getId();
        $uuid = (string)Str::uuid();
        $lifetime = config('database.redis.default_ttl');
        $data = encrypt( $request->input('content') );

        Redis::setex( "encrypted:{$uuid}", $lifetime, $data );
        Redis::setex( "passphrase:{$uuid}", $lifetime, encrypt( $this->generatePassphrase() ) );
        Redis::setex( "session:{$uuid}", $lifetime, encrypt( $session ) );

        return redirect()->to("/confirm/{$uuid}" );
    }

    private function generatePassphrase()
    {
        $faker = Factory::create( 'en_US' );

        $word[ random_int( PHP_INT_MIN, PHP_INT_MAX ) ] = strtolower( $faker->firstName );
        $word[ random_int( PHP_INT_MIN, PHP_INT_MAX ) ] = strtolower( $faker->safeColorName );
        $word[ random_int( PHP_INT_MIN, PHP_INT_MAX ) ] = strtolower( $faker->dayOfWeek );
        $word[ random_int( PHP_INT_MIN, PHP_INT_MAX ) ] = strtolower( $faker->state );

        shuffle( $word );

        return $word;
    }
}
