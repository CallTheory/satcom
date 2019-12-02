<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShowRetrieve extends Controller
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
        return view('retrieve' )->with( 'uuid', $request->input('uuid') );
    }
}
