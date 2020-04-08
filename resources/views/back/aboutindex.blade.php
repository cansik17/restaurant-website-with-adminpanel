@extends('back.layouts.master')


@section('content')

<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">İmage</th>
        <th scope="col">Title</th>
        <th scope="col">First Paragraph</th>
        <th scope="col">Second Paragraph</th>
        <th scope="col">Third Paragraph</th>
        <th scope="col">Fourth Paragraph</th>
        <th scope="col">Last Paragraph</th>
        <th scope="col">Manage</th>
       
      </tr>
    </thead>
    <tbody>
      
          @foreach ($abouts as $about)
          <tr>
              <th scope="row">{{$about->id}}</th>
                <td>{{$about->image}}</td>
                <td>{{$about->title}}</td>
                <td>{{$about->one}}</td>
                <td>{{$about->two}}</td>
                <td>{{$about->three}}</td>
                <td>{{$about->four}}</td>
                <td>{{$about->another}}</td>
                <td>
                {{-- <a href="{{route('')}}"><i class="fas fa-eye" title="show"></i></a> --}}
                    <a href="{{route('dashboard.about.edit', $about->id)}}"><i class="fas fa-edit" title="edit"></i></a>
                </td>
          </tr>
              
          @endforeach
        
     
      
    </tbody>
  </table>

@endsection