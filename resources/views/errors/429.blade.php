@extends('_layouts.master')

@php
    $code = 'Too Many Requests';
    $desc = 'Wait 1 minute before retrying';
@endphp

@section('title', $code )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
