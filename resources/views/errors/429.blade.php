@extends('_layouts.master')

@php
    $code = 429;
    $desc = 'Too Many Requests';
@endphp

@section('title', $desc )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
