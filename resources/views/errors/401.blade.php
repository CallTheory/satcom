@extends('_layouts.master')

@php
    $code = 'Unauthorized';
    $desc = 'You shouldn\'t be here';
@endphp

@section('title', $code )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
