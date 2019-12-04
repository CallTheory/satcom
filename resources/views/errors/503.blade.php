@extends('_layouts.master')

@php
    $code = 503;
    $desc = 'Server Unavailable';
@endphp

@section('title', $desc )

@section('content')
    @include('errors.layout', [ 'code' => $code, 'desc' => $desc ] )
@endsection
