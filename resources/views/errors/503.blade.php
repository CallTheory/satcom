@extends('_layouts.master')

@php
    $code = 'Server Unavailable';
    $desc = 'Check back soon';
@endphp

@section('title', $code )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
