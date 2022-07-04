<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redis;
use Illuminate\Contracts\Encryption\DecryptException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class DeleteIt extends Controller
{
    public function __invoke(Request $request, string $uuid ): RedirectResponse|NotFoundHttpException
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
