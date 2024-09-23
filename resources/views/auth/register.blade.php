@extends('layout')

@section('title','register')

@section('content')


    <form action="{{route('registerUser')}}" method="post">
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
            <label>email</label>
            <input class="form-control" name="email" type="email">
            @error('email')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-2">
            <input class="btn btn-primary" type="submit" value="Login">
        </div>
    </form>
@endsection
