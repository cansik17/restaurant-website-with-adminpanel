@extends('front.layouts.master')
@section('content')
    
    <!-- Start slides -->
	<div id="slides" class="cover-slides">
		<ul class="slides-container">
			@foreach ($sliders as $slider)
						<li class="text-center">
				<img src="{{$slider->image}}" alt="">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="m-b-20">{{$slider->firstTitle}}</strong></h1>
							<p class="m-b-40">{{$slider->secondTitle}}</p>
                            <p><a class="btn btn-lg btn-circle btn-outline-new-white" href={{ route('menu') }}>Menu</a></p>
							
						</div>
					</div>
				</div>
			</li>
			@endforeach
	
			
		</ul>
		<div class="slides-navigation">
			<a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
			<a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
		</div>
	</div>
    <!-- End slides -->
    <!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							{{$settings->phone}}
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							{{$settings->email}}
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							{{$settings->address}}
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact info -->
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
			
				@endforeach
				
			</div>
		</div>
	</div>
	<!-- End About -->
	
@endsection