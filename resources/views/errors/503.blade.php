@extends('_layouts.master')

@php
    $code = 503;
    $desc = 'Server Unavailable';
@endphp

@section('title', $desc )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
