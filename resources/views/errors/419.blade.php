@extends('_layouts.master')

@php
    $code = 'Page Expired';
    $desc = 'Please refresh the page';
@endphp

@section('title', $code )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
