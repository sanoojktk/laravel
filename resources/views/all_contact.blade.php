@extends('layout')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Edit</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
 @foreach($all_contacts as $v_contact) 	
    <tr>
      <th scope="row">{{$v_contact->id}}</th>
      <td>{{$v_contact->name}}</td>
      <td>{{$v_contact->email}}</td>
      <td>{{$v_contact->phone}}</td>
      <td><a href="{{URL::to('edit-contact/'.$v_contact->id)}}" class="btn btn-info" role="button">Edit</a></td>
      <td><a href="{{URL::to('show-contact/'.$v_contact->id)}}" class="btn btn-info" role="button">View</a></td>
      <td><a href="{{URL::to('delete-contact/'.$v_contact->id)}}" class="btn btn-info" role="button">Delete</a></td>
    </tr>
  @endforeach  
  </tbody>
</table>
@endsection