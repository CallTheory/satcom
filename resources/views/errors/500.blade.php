@extends('_layouts.master')

@php
    $code = 500;
    $desc = 'Server Error';
@endphp

@section('title', $desc )

@section('content')
    @include('errors.layout', [ 'code' => $code, 'desc' => $desc ] )
@endsection
