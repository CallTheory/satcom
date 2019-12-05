@extends('_layouts.master')

@php
    $code = 500;
    $desc = 'Server Error';
@endphp

@section('title', $desc )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
