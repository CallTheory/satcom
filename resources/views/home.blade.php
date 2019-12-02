@extends('_layouts.master')

@section('title', 'Send credentials more safely than email')

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush

@section('content')

    <div class="container w-full">

        <form method="POST" class="mx-auto items-center max-w-xl px-3">
            <p class="text-sm text-center text-gray-600 font-semibold">
                Enter the information you'd like to encrypt. You'll enter the recipient in the next step.
            </p>

            {{ csrf_field() }}

            <textarea name="content" rows="5"
                      class="shadow mt-6 mb-0 p-4 w-full border font-normal text-gray-800
                      border-orange-300 bg-orange-100 rounded font-mono">{{ old('content') }}</textarea>

            <button type="submit" class="p-5 hover:bg-indigo-700
            hover:text-white  bg-indigo-500 text-indigo-100
            rounded my-4 shadow font-bold uppercase
             focus:shadow-outline text-center w-full">

               {{ __('Encrypt') }}

            </button>

            <div class="container text-center">
                <div class="mx-auto" style="width:304px;">
                    <div class="g-recaptcha" data-sitekey="{{ config('services.google.recaptcha.v2.site_key') }}"></div>
                </div>
            </div>


            @error('content')
                <small class="block my-4 text-sm italic text-red-400 font-semibold text-center mx-auto">
                    {{ $message }} <a class="font-bold text-gray-500 hover:text-gray-700" href="/">Reset</a>
                </small>
            @enderror

            <small class="invisible block mx-auto my-6 text-sm text-indigo-400 font-bold text-center">
                <a href="#" class="hover:text-indigo-600">How does it work?</a>
            </small>


        </form>

        <div class="z-0 -mt-64 items-center w-full mx-0 bg-gray-800 py-24 border-t-2 border-b-2 border-indigo-900 shadow text-center">
            <p class="invisible">Invisible!</p>
        </div>

    </div>

@endsection
