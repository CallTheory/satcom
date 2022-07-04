<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ShowRetrieve extends Controller
{
    public function __invoke(Request $request): View|NotFoundHttpException
    {
        if ( $request->hasValidSignature() )
        {
            return view('retrieve' )->with( 'uuid', $request->input('uuid') );
        }

        abort(404 );
    }
}
