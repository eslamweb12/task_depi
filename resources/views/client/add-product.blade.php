@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>add product</h2>
        <form action="{{route('storeProduct')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="category" class="form-label">Select Category</label>
                <input class="form-control" type="text" name="product">

            </div>
            <div id="questions-container" class="mb-3"></div>
            <button type="submit" class="btn btn-primary">add product</button>
        </form>
    </div>
@endsection
