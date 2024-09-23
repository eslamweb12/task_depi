@extends('layout')

@section('title','login')

@section('content')
    @if(session('error'))
        <p class="alert alert-danger">{{ session('error') }}</p>
    @endif

    @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
    @endif

    <form action="{{route('loginUser')}}" method="post">
        @csrf
        <div class="mb-2">
            <label>Phone</label>
            <input class="form-control" name="phone">
            @error('phone')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-2">
            <label>Password</label>
            <input class="form-control" name="password" type="password">
            @error('password')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-2">
            <input class="btn btn-primary" type="submit" value="Login">
        </div>
    </form>
@endsection
