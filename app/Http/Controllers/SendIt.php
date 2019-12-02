<?php

namespace App\Http\Controllers;

use App\Mail\RetrievalLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use Illuminate\Contracts\Encryption\DecryptException;

class SendIt extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param string $uuid
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, string $uuid)
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
