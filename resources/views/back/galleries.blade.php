@extends('back.layouts.master')


@section('content')
<a href="{{route('dashboard.gallery.create')}}" class="justify-content-center"><i class="fas fa-folder-plus" title="create"></i> Add New Photos</a>
<div id="orderSuccess" style="display:none;" class="alert alert-success">
  Sıralama başarıyla güncellendi.
</div>
<table class="table">
    <thead>
      <tr>
        
        <th scope="col">Id</th>
        <th scope="col">İmage</th>   
        <th scope="col">Thumbnail</th>     
        <th scope="col">Manage</th>
      </tr>
    </thead>
    <tbody >
      
          @foreach ($galleries as $gallery)
          <tr >
           
              <th scope="row">{{$gallery->id}}</th>
                
                <td>{{$gallery->image}}</td>
                <td><img src="{{asset($gallery->image)}}" width="100" height="100"></td>
                
              
                <td>
                
                  <form action="{{route('dashboard.gallery.destroy', $gallery->id)}}" method="post">
                    @csrf
                    @method('delete')
      
                      <button class="btn btn-danger" type="submit"><i class="far fa-trash-alt" title="delete"></i></button>
                    
                    </form>
                </td>
          </tr>
           
          @endforeach
        
     
      
    </tbody>
  </table>
 

@endsection

