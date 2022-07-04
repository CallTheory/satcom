@extends('_layouts.master')

@section('title', 'Safely transfer credentials')

@section('content')

    <div class="flex-wrap w-full">

        <div class="flex-wrap items-center w-full my-6 mx-0 text-center px-3">

            <div class="block my-12 max-w-2xl mx-auto  text-center rounded shadow-lg bg-green-200 text-green-600 font-sans font-semibold px-6 pt-4 pb-8 text-xl">
                <h3 class="uppercase font-extrabold mb-2 text-green-700"><span class="text-green-400">&check;</span> The retrieval link has been sent</h3>
                <p class="my-4 text-2xl">
                    Please make sure you communicate the <strong>4-word passphrase</strong> so the recipient can decrypt your content!
                </p>
                <p class="inline-block mt-2 text-sm text-green-500">
                    Your content will automatically expire in <strong>{{ round($ttl/60) }} minutes</strong>
                </p>
            </div>

        </div>

        <div class="flex-wrap items-center w-full mx-auto bg-indigo-900 py-4 border-t-2 border-b-2 border-indigo-900 shadow text-center my-8 py-8">

            <p class="text-center text-indigo-300 px-3">
                Passphrase to decrypt content:
            </p>

            <h5 class="text-3xl my-4 font-bold uppercase text-gray-700 max-w-4xl mx-auto px-3">
                @if(count($passphrase) === 4)
                    @foreach($passphrase as $word)
                        <span class="block md:inline-block text-indigo-100 border rounded px-2 py-1 border-indigo-500">{{ $word}}</span>
                    @endforeach
                @endif
            </h5>

            <p class="text-center text-indigo-400 px-3">
                You should communicate these by <i class="font-semibold">phone</i>, <i class="font-semibold">SMS</i>, <i class="font-semibold">chat</i>, or <i class="font-semibold">your own email account</i>.
            </p>



            <div class="mx-auto max-w-xl mt-6 px-3">
                <form class=" m-2 border-0 inline-block" method="GET" action="/confirm/{{$uuid}}">
                    <button class="p-4 shadow-lg font-semibold uppercase rounded hover:bg-indigo-800
                                hover:text-white  bg-indigo-600 text-indigo-100" type="submit">
                        Resend Email
                    </button>
                </form>
                <form class=" py-0 m-2 border-0 inline-block" method="POST" action="/delete/{{ $uuid }}">
                    {{ csrf_field() }}
                    <button class="p-4 shadow-lg font-semibold uppercase rounded hover:bg-red-800 hover:text-white bg-red-600 text-red-100" type="submit">
                        Delete Content
                    </button>
                </form>
            </div>

        </div>


    </div>

@endsection
