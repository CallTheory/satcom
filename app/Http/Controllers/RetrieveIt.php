<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Encryption\DecryptException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class RetrieveIt extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        if ( ! $request->hasValidSignature() )
        {
            abort(404 );
        }

        $this->validate( $request, [
            'uuid' => 'required',
            'words.0' => 'required',
            'words.1' => 'required',
            'words.2' => 'required',
            'words.3' => 'required',
        ]);

        $uuid = $request->input('uuid' );
        $passphrase = Redis::get( "passphrase:{$uuid}" );

        try{
            $passphrase = decrypt( $passphrase );
        }
        catch( DecryptException $e ){ abort(404); }

        if( strtolower(implode('-', $request->input('words') ) ) !== implode( '-', $passphrase ))
        {
            return redirect()->back()->withErrors(['invalidpass' => 'The passphrase is incorrect.']);
        }

        $encrypted = Redis::get( "encrypted:{$uuid}" );
        $ttl = Redis::ttl( "encrypted:{$uuid}" );
        if( is_null( $encrypted ) ){ abort(404); }

        $decrypted = '';

        try{
            $decrypted = decrypt( $encrypted );
        }
        catch( DecryptException $e ){ abort(404); }

        return view( 'data' )->with('decrypted', $decrypted )->with('ttl', $ttl );

    }
}
