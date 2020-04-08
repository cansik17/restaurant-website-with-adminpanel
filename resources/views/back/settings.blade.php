@extends('back.layouts.master')


@section('content')


<div class="card shadow mb-4">
  <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Site Settings</h6>
  </div>
  <div class="card-body">
        <form method="post" action="{{route('dashboard.settings.update')}}" enctype="multipart/form-data">
          @csrf
          <div class="row">
           
            <div class="col-md-6">
              <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" required class="form-control" value="{{$settings->phone}}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" required class="form-control" value="{{$settings->email}}" />
              </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Location</label>
                    <textarea class="form-control" name="address" rows="3">{{$settings->address}}</textarea>
                  </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">About (inside footer)</label>
                    <textarea class="form-control" name="about" rows="3">{{$settings->about}}</textarea>
                  </div>
            </div>
        
          </div>
    





          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Facebook</label>
                <input type="text" class="form-control" name="facebook" value="{{$settings->facebook}}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Twitter</label>
                <input type="text" class="form-control" name="twitter" value="{{$settings->twitter}}" />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Google</label>
                <input type="text" class="form-control" name="google" value="{{$settings->google}}" />
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>LinkedIn</label>
                <input type="text" class="form-control" name="linkedin" value="{{$settings->linkedin}}" />
              </div>
            </div>
          </div>
          <div class="row">
         
            <div class="col-md-6">
              <div class="form-group">
                <label>Instagram</label>
                <input type="text" class="form-control" name="instagram" value="{{$settings->instagram}}" />
              </div>
            </div>
          </div>
         
          <div class="row">

            <div class="col-md-6">
                <div class="form-group">
                  <label>Monday</label>
                  <input type="text" name="mon" required class="form-control" value="{{$settings->mon}}" />
                </div>
                <div class="form-group">
                    <label>Tuesday</label>
                    <input type="text" name="tue" required class="form-control" value="{{$settings->tue}}" />
                  </div>
                  <div class="form-group">
                    <label>Wednesday</label>
                    <input type="text" name="wed" required class="form-control" value="{{$settings->wed}}" />
                  </div>
                  <div class="form-group">
                    <label>Thursday</label>
                    <input type="text" name="thu" required class="form-control" value="{{$settings->thu}}" />
                  </div>
                  <div class="form-group">
                    <label>Friday</label>
                    <input type="text" name="fri" required class="form-control" value="{{$settings->fri}}" />
                  </div>
                  <div class="form-group">
                    <label>Saturday</label>
                    <input type="text" name="sat" required class="form-control" value="{{$settings->sat}}" />
                  </div>
                  <div class="form-group">
                    <label>Sunday</label>
                    <input type="text" name="sun" required class="form-control" value="{{$settings->sun}}" />
                  </div>
                  
              </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-block btn-md btn-success">Update</button>
          </div>
        </form>
  </div>
</div>
@endsection