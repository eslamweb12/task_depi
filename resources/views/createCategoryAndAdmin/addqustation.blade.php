@extends('layout')
@section('content')
    <div class="container">
        <h2 class="text-center">add question</h2>
        <form action="{{route('storeQuestion')}}" method="POST">
            @if(session('success'))
                <p class="alert alert-success">{{session('success')}}</p>
            @endif
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">category</label>
                <select name="category_id" id="category" class="form-select" >
                    <option value="">choose category</option>
                    @foreach($data as $da)
                        <option value="{{ $da->id }}">{{ $da->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="question" class="form-label">question</label>
                <input type="text" name="question" id="question" class="form-control" >
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">type</label>
                <select name="type" id="type" class="form-select" >
                    <option value="text">text</option>
                    <option value="date">date</option>
                    <option value="select">select</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">create question</button>
        </form>
    </div>


@endsection
