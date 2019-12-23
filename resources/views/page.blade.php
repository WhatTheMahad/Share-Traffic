@extends('layouts.app')
@section('navbar1')
@parent
@endsection
@section('content')
@section('content')



<!-- END header -->
<!-- <div class="top-shadow"></div> -->
    <div class="container">
    <div class="jumbotron">
            <form action="{{ route('page.file')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                {{csrf_field ()}}
                <input type="file" name="image">
                <input type="text" name="title" placeholder="Enter File Title">
                <input type="submit" name="" class="btn btn-primary">
                
            </form>
        </div>
    </div>
</body>
</html>
@endsection