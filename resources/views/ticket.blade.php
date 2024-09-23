@extends('layout')

@section('title','home')

@section('content')

    <a class="btn btn-primary" href="{{route('showTikect')}}">show all ticket</a>
    <form action="{{route('createTikect')}}" method="POST">
        @if(session('success'))
            <p class="alert alert-success">{{session('success')}}</p>
        @endif
        @csrf
        <div class="mb-2">
            <label>title</label>
            <input class="form-control" name="title">
            @error('title')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-2">
            <label>info</label>
            <input class="form-control" name="info" >
            @error('info')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-2">
            <label>type</label>
            <input class="form-control" name="type" >
            @error('type')
            <p class="alert alert-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="mb-2">
            <input class="btn btn-primary" type="submit" value="create">
        </div>
    </form>




@endsection
