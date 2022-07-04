<?php

namespace App\Http\Controllers;

use App\Mail\RetrievalLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\Encryption\DecryptException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class SendIt extends Controller
{
    public function __invoke(Request $request, string $uuid): NotFoundHttpException|RedirectResponse
    {
        $session = Redis::get( "session:{$uuid}");

        try{
            $session = decrypt( $session );
        }
        catch( DecryptException $e ){ abort(404); }

        if( $request->session()->getId() !== $session ) { abort(404); }

        $this->validate( $request, [
            'email' => 'required|email',
        ]);

        $link = URL::temporarySignedRoute(
            "retrieve", now()->addMinutes(120 ), [ 'uuid' => $uuid ]
        );

        Mail::to( $request->input('email' ) )->send( new RetrievalLink( $link ) );

        return redirect()->to("/success/{$uuid}" );
    }
}
