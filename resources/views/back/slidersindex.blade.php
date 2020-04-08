@extends('back.layouts.master')


@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">First Title</th>
        <th scope="col">Second Title</th>
        <th scope="col">Slide Image</th>
        <th scope="col">Manage</th>
      </tr>
    </thead>
    <tbody>
      
          @foreach ($sliders as $slider)
          <tr>
              <th scope="row">{{$slider->order}}</th>
                <td>{{$slider->firstTitle}}</td>
                <td>{{$slider->secondTitle}}</td>
                <td>{{$slider->image}}</td>
                <td>
                {{-- <a href="{{route('')}}"><i class="fas fa-eye" title="show"></i></a> --}}
                    <a href="{{route('dashboard.sliders.edit', $slider->id)}}"><i class="fas fa-edit" title="edit"></i></a>
                </td>
          </tr>
              
          @endforeach
        
     
      
    </tbody>
  </table>

@endsection