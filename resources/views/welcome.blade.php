@extends('layout')

@section('title','home')

@section('content')
    @if(session('error'))
        <p class="alert alert-danger">{{ session('error') }}</p>
    @endif

    @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif


@endsection
