@extends('_layouts.master')

@section('title', 'Safely transfer credentials')

@push('scripts')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush

@section('content')

    <div class="container w-full mx-auto">

        <form method="POST" class="mx-auto items-center max-w-3xl px-4 py-8 my-8">
            <p class="text-2xl text-center text-white font-semibold block my-4">
                Enter the information you'd like to encrypt.<br><small class="text-indigo-700">You'll enter the recipient's email in the next step.</small>
            </p>

            @honeypot

            {{ csrf_field() }}

            <textarea name="content" rows="10"
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
                    @error('g-recaptcha-response')
                        <div class="text-indigo-500 text-red-600">{{ $message  }}</div>
                    @enderror
                </div>
            </div>

        </form>

    </div>

@endsection
