@extends('_layouts.master')

@php
    $code = 'Not Found';
    $desc = 'This page does not exist';
@endphp

@section('title', $code )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
