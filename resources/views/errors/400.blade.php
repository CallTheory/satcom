@extends('_layouts.master')

@php
    $code = 400;
    $desc = 'Bad Request';
@endphp

@section('title', $desc )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
