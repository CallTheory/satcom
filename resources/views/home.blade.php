@extends('_layouts.master')

@section('title', 'Safely transfer credentials')

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush

@section('content')

    <div class="container w-full">

        <form method="POST" class="mx-auto items-center max-w-xl px-3">
            <p class="text-sm text-center text-indigo-200 font-semibold block my-4">
                Enter the information you'd like to encrypt. You'll enter the recipient in the next step.
            </p>

            @honeypot

            {{ csrf_field() }}

            <textarea name="content" rows="5"
                      class="shadow-lg p-4 w-full border font-normal text-gray-800
                      border-gray-300 bg-gray-100 rounded font-mono
                      @error('content') border-red-400 bg-red-100 @enderror">{{ old('content') }}</textarea>

            <button type="submit" class="p-5 hover:bg-indigo-800
            hover:text-white  bg-indigo-600 text-indigo-100
            rounded my-4 shadow-lg font-bold uppercase
             focus:shadow-outline text-center w-full">

               {{ __('Encrypt') }}

            </button>

            <div class="container text-center">
                <div class="mx-0 w-full">
                    <div class="g-recaptcha mx-auto" style="width:304px;" data-sitekey="{{ config('services.google.recaptcha.v2.site_key') }}"></div>
                </div>
            </div>

        </form>

    </div>

@endsection
