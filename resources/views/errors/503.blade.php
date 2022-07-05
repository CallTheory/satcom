@extends('_layouts.master')

@php
    $code = 'Maintenance';
    $desc = 'Check back soon';
@endphp

@section('title', $code )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
