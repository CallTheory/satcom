<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use Illuminate\Contracts\Encryption\DecryptException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ShowConfirm extends Controller
{
    public function __invoke(Request $request, $uuid ): View|NotFoundHttpException
    {
        $encrypted = Redis::get( "encrypted:{$uuid}" );
        $ttl = Redis::ttl( "encrypted:{$uuid}" );
        $session = Redis::get( "session:{$uuid}");
        $passphrase = Redis::get( "passphrase:{$uuid}" );

        try{
            $session = decrypt( $session );
            $passphrase = decrypt( $passphrase );
        }
        catch( DecryptException $e ){ abort(404); }

        if( $request->session()->getId() !== $session ) { abort(404); }
        if( is_null( $encrypted ) ){ abort(404); }

        return view( 'confirm' )->with('uuid', $uuid )
            ->with('encrypted', $encrypted )
            ->with('cipher', config( 'app.cipher' ) )
            ->with('ttl', $ttl )
            ->with('passphrase', $passphrase );
    }
}
