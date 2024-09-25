@extends('layout')

@section('content')
    <form action="{{route('addCategory')}}" method="post">
        @if(session('message'))
            <p class="alert alert-success">{{session('message')}}</p>
        @endif
        @csrf
        <div>
            <label>name of category</label>
            <input name="name" class="form-control">

        </div>

        <input type="submit" class="btn btn-primary" value="create">



    </form>
@endsection
