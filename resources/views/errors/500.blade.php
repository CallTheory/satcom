@extends('_layouts.master')

@php
    $code = 'Server Error';
    $desc = 'This one\'s on us';
@endphp

@section('title', $code )

@section('content')
    @include('_layouts.errors', [ 'code' => $code, 'desc' => $desc ] )
@endsection
