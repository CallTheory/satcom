@extends('_layouts.master')

@php
    $code = 'Bad Request';
    $desc = 'You did something wrong';
@endphp

@section('title', $code )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
