@extends('_layouts.master')

@section('title', 'Send credentials safely')

@section('content')

    <div class="container w-full mx-auto">

        <form method="POST" class="flex-wrap mx-auto items-center w-full px-3 max-w-4xl">
            <p class="text-sm text-center text-gray-600 font-semibold">
                Enter the <strong>four words</strong> supplied by the sender in the boxes below.
            </p>
            {{ csrf_field() }}

            <input type="hidden" name="uuid" value="{{$uuid}}">

            <div class="flex flex-wrap items-center mx-auto mt-6">
                <div class="flex w-full md:w-1/4 block md:inline-block mx-auto px-2">
                    <input type="text" value="{{ old('words.0') }}" name="words[]" placeholder="" class="placeholder-gray-500 text-center
                    shadow my-2 p-4 border-2 font-normal w-full
                    text-gray-600 border-gray-400 bg-gray-100 rounded font-mono
                    @error('words.0') border-red-400 bg-red-100 @enderror @error('invalidpass') border-red-400 bg-red-100  @enderror">
                </div>
                <div class="flex w-full md:w-1/4 block md:inline-block mx-auto px-2">
                    <input type="text" value="{{ old('words.1') }}" name="words[]" placeholder="" class="placeholder-gray-500 text-center
                    shadow my-2 p-4 border-2 font-normal w-full
                    text-gray-600 border-gray-400 bg-gray-100 rounded font-mono
                    @error('words.1') border-red-400 bg-red-100 @enderror @error('invalidpass') border-red-400 bg-red-100  @enderror">
                </div>
                <div class="flex w-full md:w-1/4 block md:inline-block mx-auto px-2">
                    <input type="text" value="{{ old('words.2') }}" name="words[]" placeholder="" class="placeholder-gray-500 text-center
                    shadow my-2 p-4 border-2 font-normal w-full
                    text-gray-600 border-gray-400 bg-gray-100 rounded font-mono
                    @error('words.2') border-red-400 bg-red-100 @enderror @error('invalidpass') border-red-400 bg-red-100  @enderror">
                </div>
                <div class="flex w-full md:w-1/4 block md:inline-block mx-auto px-2">
                    <input type="text" value="{{ old('words.3') }}" name="words[]" placeholder="" class="placeholder-gray-500 text-center
                    shadow my-2 p-4 border-2 font-normal w-full
                    text-gray-600 border-gray-400 bg-gray-100 rounded font-mono
                    @error('words.3') border-red-400 bg-red-100 @enderror @error('invalidpass') border-red-400 bg-red-100  @enderror">
                </div>
            </div>

            <div class="flex mx-auto max-w-xl mt-6">
                <button type="submit" class="flex p-4 mx-auto my-4
                    rounded shadow font-bold uppercase
                    hover:bg-indigo-700 hover:text-white  bg-indigo-500 text-indigo-100 focus:shadow-outline text-center">
                    {{ __('Decrypt Content' ) }}
                </button>
            </div>

        </form>

    </div>

@endsection
