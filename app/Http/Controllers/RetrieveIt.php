<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redis;
use Illuminate\Contracts\Encryption\DecryptException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class RetrieveIt extends Controller
{
    public function __invoke(Request $request): NotFoundHttpException|RedirectResponse|View
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
