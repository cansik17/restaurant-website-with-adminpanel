@extends('back.layouts.master')


@section('content')


<div>
<form method="POST" action="{{route('dashboard.about.update',$abouts->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label >Title</label>
    <input type="text" class="form-control" name="title" value="{{$abouts->title}}">
    </div>
  
      <div class="form-group">
        <label for="exampleFormControlTextarea1">First Paragraph</label>
        <textarea class="form-control" name="one"  rows="3">{{$abouts->one}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Second Paragraph</label>
        <textarea class="form-control" name="two" rows="3">{{$abouts->two}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Third Paragraph</label>
        <textarea class="form-control" name="three" rows="3">{{$abouts->three}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Fourth Paragraph</label>
        <textarea class="form-control" name="four" rows="3">{{$abouts->four}}</textarea>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Last Paragraph</label>
        <textarea class="form-control" name="another" rows="3">{{$abouts->another}}</textarea>
      </div>
  
      <div class="form-group">
        <label>About Page Image</label><br  />
        <img src="{{asset($abouts->image)}}" class=" img-thumbnail rounded" width="300" />
        <input type="file" name="image"  class="form-control">
        </div>
  <button type="submit" class="btn btn-secondary">Update</button>
</form>
</div>

<div>
    <a href="{{route('dashboard.about.index')}}" class="btn btn-primary float-right ml-5">Back</a>
</div>
@endsection