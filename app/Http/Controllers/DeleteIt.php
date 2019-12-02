<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Contracts\Encryption\DecryptException;

class DeleteIt extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param string $uuid
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, $uuid )
    {
        $session = Redis::get( "session:{$uuid}");

        try{
            $session = decrypt( $session );
        }
        catch( DecryptException $e ){ abort(404); }

        if( $request->session()->getId() !== $session ) { abort(404); }

        Redis::del( "encrypted:{$uuid}",   "passphrase:{$uuid}", "session:{$uuid}" );

        return redirect()->to('/');
    }
}
