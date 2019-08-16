@extends('layout')
@section('content')

<table class="table">
  <a href="{{route('all.contact')}}">All Contact</a>
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      
    </tr>
  </thead>
  <tbody>

    <tr>
      <th scope="row">{{$sngl_con->id}}</th>
      <td>{{$sngl_con->name}}</td>
      <td>{{$sngl_con->email}}</td>
      <td>{{$sngl_con->phone}}</td>
  
    </tr>
 
  </tbody>
</table>
@endsection