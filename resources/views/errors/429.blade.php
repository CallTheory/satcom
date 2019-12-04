@extends('_layouts.master')

@php
    $code = 429;
    $desc = 'Too Many Requests';
@endphp

@section('title', $desc )

@section('content')
    @include('errors.layout', [ 'code' => $code, 'desc' => $desc ] )
@endsection
