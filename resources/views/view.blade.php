@extends('layouts.app')
@section('navbar1')
@parent
@endsection
@section('content')
<div class="container">
    <div class="jumbotron">
    <h2>My Files</h2>
    <a href="/page" class="btn btn-warning">Add Files </a>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Title</th>
      <th scope="col">File</th>
      <th scope="col">Delete/Edit</th>>
      <th scope="col">Download</th>
    </tr>
  </thead>
  <tbody>


    @foreach ($disp as $row)
    <tr>
      <td> {{$row['title']}} </td>
      <td> <img src="{{ asset('uploads/employee/' .$row->image) }}" width="100px;" height="100px;" alt="My Files"> </td>
    <td> <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>

    <a href="/editimage/{{$row->id}}" class="btn btn-primary">Edit</a>    </td>
    <td> <a href="uploads/employee/{{$row->image}}" class="btn btn-success">Download</a></td>
    </tr>
   @endforeach
  </tbody>
</table>
</div>
</div> 
@endsection