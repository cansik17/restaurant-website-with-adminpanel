@extends('back.layouts.master')


@section('content')


<div>
  
      <form method="POST" action="{{route('dashboard.gallery.store')}}" enctype="multipart/form-data">
    @csrf
    
  
  
      <div class="form-group">
        <label>Image</label><br  />
        {{-- <img src="{{asset($gallery->image)}}" class=" img-thumbnail rounded" width="300" /> --}}
        <input type="file" name="image"  class="form-control">
        </div>
      <button type="submit" class="btn btn-secondary">Create</button>
     </form>
 

</div>

<div>
    <a href="{{route('dashboard.gallery.index')}}" class="btn btn-primary float-right ml-5">Back</a>
</div>
@endsection
