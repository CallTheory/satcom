@extends('_layouts.master')

@section('title', 'Safely transfer credentials')

@section('content')

    <div class="container w-full">

        <div class="container items-center w-full my-6 mx-0 text-center px-3">

            <div class="block my-12 max-w-xl mx-auto  text-center rounded shadow-lg bg-green-200 text-green-600 font-sans font-semibold px-6 pt-4 pb-8">
                <h3 class="uppercase font-extrabold mb-2 text-green-700"><span class="text-green-400">&check;</span> The retrieval link has been sent</h3>
                Please make sure you communicate the <strong>4-word passphrase</strong> so the recipient can decrypt your content!
                <p class="inline-block mt-2 text-sm text-green-500">
                    Your content will automatically expire in <strong>{{ round($ttl/60) }} minutes</strong>
                </p>
            </div>

        </div>

        <div class="container items-center w-full mx-auto bg-indigo-900 py-4 border-t-2 border-b-2 border-indigo-900 shadow text-center">

            <p class="text-center text-gray-500 px-3">
                Passphrase to decrypt content:
            </p>

            <h5 class="text-3xl my-4 font-bold uppercase text-gray-700 max-w-4xl mx-auto px-3">
                <span class="block md:inline-block text-indigo-100">{{ $passphrase[0] }}</span> <span class="hidden md:inline-block">&middot;</span>
                <span class="block md:inline-block text-indigo-300">{{ $passphrase[1] }}</span> <span class="hidden md:inline-block">&middot;</span>
                <span class="block md:inline-block text-indigo-500">{{ $passphrase[2] }}</span> <span class="hidden md:inline-block">&middot;</span>
                <span class="block md:inline-block text-indigo-700">{{ $passphrase[3] }}</span>
            </h5>

            <p class="text-center text-indigo-500 px-3">
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
