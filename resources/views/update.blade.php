@extends('layouts.app')
@section('navbar1')
@parent
@endsection
@section('content')
<div class="container">
    <div class="jumbotron">
    <h2>My Files</h2>
    <br>
    <h3>Update Your Files</h3>

    <form action="/editimage/{{$edit->id}}" method="POST" enctype="multipart/form-data"> 

                {{ csrf_field() }}
                {{ method_field('PUT') }}

            <input type="hidden" name="id" id="id" value="{{$edit ->id}}"> </input>
            <div class="form-group">
            <label>Title</label> 
            <input type="text" name="title" class="form-control" value="{{$edit ->title}}" placeholder="Enter Title">
            </div>   

            <label>File</label>
            <div class="custom-file">
            <input type="file" name="image" class="custom-file-input" value="{{$edit ->image}}">
            <label class ="custom-file-label">Choose File</label>
            </div>
        <br><br>
        <button type="submit" name="submit" class="btn btn-primary btn-lg">Update</button>
    </form>
    </div>

</div>
    @endsection