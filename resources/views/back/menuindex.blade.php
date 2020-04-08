@extends('back.layouts.master')


@section('content')
<a href="{{route('dashboard.menu.create')}}" class="justify-content-center"><i class="fas fa-folder-plus" title="create"></i> Add New </a>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Kind</th>   
        <th scope="col">Price</th>     
        <th scope="col">First Title</th>
        <th scope="col">Second Title</th>
        <th scope="col">image</th>
        <th scope="col">Manage</th>
      </tr>
    </thead>
    <tbody>
      
          @foreach ($menus as $menu)
          <tr>
              <th scope="row">{{$menu->id}}</th>
              <td>{{$menu->kind}}</td>
              <td>{{$menu->price}}</td>
              <td>{{$menu->firstTitle}}</td>
              <td>{{$menu->secondTitle}}</td>
              <td>{{$menu->image}}</td>
                <td>
                {{-- <a href="{{route('')}}"><i class="fas fa-eye" title="show"></i></a> --}}
                    
                   <a href="{{route('dashboard.menu.edit', $menu->id)}}"><button class="btn btn-primary" ><i class="fas fa-edit" title="edit"></i></button></a> 
                   
                    <form action="{{route('dashboard.menu.destroy', $menu->id)}}" method="post">
                        {{-- {{route('dashboard.gallery.destroy', $gallery->id)}} --}}
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