@extends('back.layouts.master')


@section('content')


<div>
<form method="POST" action="{{route('dashboard.sliders.update',$sliders->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label >First Title</label>
    <input type="text" class="form-control" name="firstTitle" value="{{$sliders->firstTitle}}">
    </div>
    <div class="form-group">
        <label >Second Title</label>
      <input type="text" class="form-control" name="secondTitle" value="{{$sliders->secondTitle}}">
      </div>
  
      <div class="form-group">
        <label>Slider Image</label><br  />
        <img src="{{asset($sliders->image)}}" class=" img-thumbnail rounded" width="300" />
        <input type="file" name="image"  class="form-control">
        </div>
  <button type="submit" class="btn btn-secondary">Update</button>
</form>
</div>

<div>
    <a href="{{route('dashboard.sliders.index')}}" class="btn btn-primary float-right ml-5">Back</a>
</div>
@endsection