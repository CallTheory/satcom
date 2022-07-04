@extends('_layouts.master')

@section('title', 'Decrypted Content')

@section('content')

    <div class="container w-full mx-auto">
        <div class="mx-auto items-center max-w-xl mb-12 px-3  py-8 my-8">
            <p class="text-2xl text-center text-white font-semibold block my-4">
                <strong>Decryption successful!</strong><br>Please review your data below.
            </p>

            <div class="block border-2 border-green-400 break-words rounded shadow-lg my-6 px-4 py-10 bg-green-100 font-mono text-green-800">
                {!!   nl2br( e( $decrypted ) ) !!}
            </div>

            <h5 class="font-bold uppercase max-w-xl mx-auto text-center">
                <span class="text-indigo-50">Expires in <strong class="text-indigo-700">{{ round( $ttl/60) }}</strong> minutes</span>
            </h5>
        </div>




    </div>


@endsection
