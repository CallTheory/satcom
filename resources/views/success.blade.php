@extends('_layouts.master')

@section('title', 'Send credentials safely')

@section('content')

    <div class="container w-full">

        <div class="container items-center w-full mx-0 bg-gray-900 py-16 border-t-2 border-b-2 border-indigo-900 shadow text-center">

            <p class="text-center text-3xl font-bold text-green-500 p-3">
                The retrieval link has been sent!
            </p>

            <h5 class="text-4xl mt-4 mb-12 font-bold uppercase text-gray-700 max-w-4xl mx-auto  p-3">
                <span class="block md:inline-block  text-indigo-200">{{ $passphrase[0] }}</span> <span class="hidden md:inline-block">&middot;</span>
                <span class="block md:inline-block  text-indigo-400">{{ $passphrase[1] }}</span> <span class="hidden md:inline-block">&middot;</span>
                <span class="block md:inline-block  text-indigo-600">{{ $passphrase[2] }}</span> <span class="hidden md:inline-block">&middot;</span>
                <span class="block md:inline-block  text-indigo-800">{{ $passphrase[3] }}</span>
            </h5>

            <form class="py-0 my-0 border-0 inline-block" method="GET" action="/confirm/{{$uuid}}">
                <button class="p-3 font-semibold border uppercase rounded hover:border-indigo-700 hover:bg-indigo-700 hover:text-indigo-100 border-indigo-500 bg-indigo-500 text-indigo-200" type="submit">
                    Resend Email
                </button>
            </form>
            <form class="py-0 my-0 border-0 inline-block" method="POST" action="/delete/{{ $uuid }}">
                {{ csrf_field() }}
                <button class="p-3 font-semibold border uppercase rounded hover:border-red-700 hover:bg-red-700 hover:text-red-100 border-red-500 bg-red-500 text-red-200" type="submit">
                    Expire Now
                </button>
            </form>
        </div>

        <div class="container items-center w-full mx-0 bg-gray-500 py-16 my-0 border-t-2 border-b-2 border-gray-400 shadow-inner  p-3">
            <h5 class="font-bold uppercase text-gray-200 max-w-xl mx-auto">{{ $cipher }} <span class="text-gray-400">&middot;</span> <span class="text-gray-600">Expires in <strong class="text-gray-700">{{ round( $ttl/60) }}</strong> minutes</span></h5>
            <div class="font-mono font-semibold mx-auto text-justify max-w-xl text-gray-400 break-all">{{ $encrypted }}</div>
        </div>

    </div>

@endsection
