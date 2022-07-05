@extends('_layouts.master')

@section('title', 'Safely transfer credentials')

@section('content')

        <form method="POST" class="mx-0">
            <div class="container w-full mx-auto py-8 my-8">
                <div class="flex-wrap mx-auto items-center w-full">
                    <p class="text-2xl text-center text-white font-semibold block my-4">
                        Enter the email of the person you are sending to.
                    </p>
                    {{ csrf_field() }}

                    <input type="hidden" name="uuid" value="{{$uuid}}">

                    <div class="flex mx-auto max-w-xl px-4">
                        <input type="email" name="email" placeholder="someone@important.com" class="placeholder-gray-500 text-center
                        shadow-lg my-2 p-4 w-full border font-normal
                        text-gray-600 border-gray-300 bg-gray-100 rounded font-mono mx-0
                        @error('email') border-red-400 bg-red-100    @enderror">
                    </div>

                    <div class="text-sm mx-auto w-full text-center text-indigo-100 mt-2 mb-6 px-4">
                        The email will come from <span class="text-indigo-200 font-semibold">no-reply@notifi.us</span>
                    </div>
                </div>
            </div>

            <div class="flex-wrap items-center w-full mx-auto bg-indigo-900 py-4 border-t-2 border-b-2 border-indigo-900 shadow text-center my-8 py-8">

                <p class="text-center font-semibold text-indigo-200 px-4">
                    When they open the link, they'll need these four words to decrypt your message:
                </p>

                <h5 class="text-3xl my-4 font-bold uppercase text-gray-700 max-w-4xl mx-auto px-4">
                    @if(count($passphrase) === 4)
                        @foreach($passphrase as $word)
                            <span class="block md:inline-block text-indigo-100 border rounded px-2 py-1 border-indigo-500">{{ $word}}</span>
                        @endforeach
                    @endif
                </h5>

                <p class="text-center text-indigo-300 px-4">
                    You should communicate these by <i class="font-semibold">phone</i>, <i class="font-semibold">SMS</i>, <i class="font-semibold">chat</i>, or <i class="font-semibold">your own email account</i>.
                </p>

                <div class="flex mx-auto max-w-xl mt-6 px-4">
                    <button type="submit" class="flex p-4 mx-auto my-4 bg-indigo-100
                    rounded shadow-lg font-bold text-indigo-600 uppercase
                    hover:text-indigo-100 hover:bg-indigo-500 focus:shadow-outline text-center px-auto">
                        {{ __('Send Retrieval Link') }}
                    </button>
                </div>

            </div>

        </form>

        <form class="flex mx-auto max-w-sm border-0 inline-block" method="POST" action="/delete/{{ $uuid }}">
            {{ csrf_field() }}
            <button class="mx-auto text-sm my-2 p-2 shadow-lg font-semibold uppercase rounded hover:bg-red-800 hover:text-white bg-red-600 text-red-100" type="submit">
                Delete Content
            </button>
        </form>

    </div>

@endsection
