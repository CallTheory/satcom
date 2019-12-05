@extends('_layouts.master')

@php
    $code = 404;
    $desc = 'Not Found';
@endphp

@section('title', $desc )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
