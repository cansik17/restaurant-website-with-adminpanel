@extends('front.layouts.master')
@section('content')
    <!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>About Us</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				@foreach ($abouts as $about)
				<div class="col-lg-6 col-md-6">
					<img src="{{$about->image}}" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>{{$about->title}}</span></h1>
						
						<p>{{$about->one}} </p>
						<p>{{$about->two}}</p>
					
					</div>
				</div>
				<div class="col-md-12">
					<div class="inner-pt">
						<p>{{$about->three}} </p>
						<p>{{$about->four}} </p>
						<p>{{$about->another}}</p>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
	<!-- End About -->
@endsection