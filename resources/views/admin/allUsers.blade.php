@extends('layout')

@section('title','home')

@section('content')

  <table class="table table-bordered table-hover table-striped">
      <thead>
      <tr>
          <th>name</th>
          <th>email</th>
          <th>phone</th>
      </tr>
      </thead>
      <tbody>
      @foreach($users as $user)
      <tr>
          <td>{{$user->name}}</td>
          <td>{{$user->email}}</td>
          <td>{{$user->phone}}</td>
      </tr>
      @endforeach
      </tbody>
  </table>



@endsection
