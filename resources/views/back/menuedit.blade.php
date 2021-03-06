@extends('back.layouts.master')


@section('content')


<div>
  
      <form method="POST" action="{{route('dashboard.menu.update', $menus->id)}}" enctype="multipart/form-data">
        {{-- {{route('dashboard.menu.store')}} --}}
    @csrf
    @method('PUT')
    
    <div class="form-group">
        <label for="exampleFormControlSelect1">Kind</label>
        <select class="form-control" name="kind" value="{{$menus->kind}}" >
          <option>drinks</option>
          <option>lunch</option>
          <option>dinner</option>
         
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Price (US Dollar)</label>
        <input type="text" name="price" class="form-control" value="{{$menus->price}}"  >
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">First Title</label>
        <input type="text" name="firstTitle" class="form-control" value="{{$menus->firstTitle}}"  >
      </div>
      <div class="form-group">
        <label for="exampleFormControlInput1">Second Title</label>
        <input type="text" name="secondTitle" class="form-control" value="{{$menus->secondTitle}}"  >
      </div>
  
      <div class="form-group">
        <label>Image</label><br  />
        {{-- <img src="{{asset($gallery->image)}}" class=" img-thumbnail rounded" width="300" /> --}}
        <img src="{{asset($menus->image)}}" class=" img-thumbnail rounded" width="300" />
        <input type="file" name="image"  class="form-control" >
        </div>
      <button type="submit" class="btn btn-secondary">Update</button>
     </form>
 

</div>

<div>
    <a href="{{route('dashboard.menu.index')}}" class="btn btn-primary float-right ml-5">Back</a>
</div>
@endsection