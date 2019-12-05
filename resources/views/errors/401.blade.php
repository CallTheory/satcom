@extends('_layouts.master')

@php
    $code = 401;
    $desc = 'Unauthorized';
@endphp

@section('title', $desc )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
