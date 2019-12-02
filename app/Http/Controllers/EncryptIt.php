<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class EncryptIt extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $this->validate( $request, [
            'content' => 'required|max:4096'
        ]);

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
