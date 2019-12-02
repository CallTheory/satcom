@extends('_layouts.master')

@section('title', 'Send credentials safely')

@section('content')

    <div class="container w-full">
        <div class="mx-auto items-center max-w-xl mb-12 px-3">
            <p class="text-sm text-center text-gray-600 font-semibold">
                Decryption successful! Please review your data below.
            </p>

            <div class="block border-2 border-green-400 rounded shadow my-6 px-4 py-10 bg-green-100 font-mono text-green-800"><pre>{{ $decrypted }}</pre></div>

            <h5 class="font-bold uppercase max-w-xl mx-auto text-center">
                <span class="text-gray-500">Expires in <strong class="text-gray-700">{{ round( $ttl/60) }}</strong> minutes</span>
            </h5>
        </div>




    </div>


@endsection
