@extends('_layouts.master')

@php
    $code = 401;
    $desc = 'Unauthorized';
@endphp

@section('title', $desc )

@section('content')
    @include('errors.layout', [ 'code' => $code, 'desc' => $desc ] )
@endsection
