@extends('front.layouts.master')
@section('content')
    <!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Contact -->
	
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact Us</h2>
						<p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					
					@endif
					<form action="{{route('contact.mail')}} " method="POST">
						@csrf
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" value="{{old('name')}}" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" value="{{old('email')}}" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
						
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Your Message" name="message" rows="4" data-error="Write your message" required>{{old('message')}}</textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Send Message</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form>
					{{-- <form id="contactForm" action="{{route('contact.mail')}} " method="POST">
						@csrf
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" value="{{old('name')}}" class="form-control" id="name" name="name" placeholder="Your Name" required data-error="Please enter your name">
									<div class="help-block with-errors"></div>
								</div>                                 
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input type="text" value="{{old('email')}}" placeholder="Your Email" id="email" class="form-control" name="email" required data-error="Please enter your email">
									<div class="help-block with-errors"></div>
								</div> 
							</div>
						
							<div class="col-md-12">
								<div class="form-group"> 
									<textarea class="form-control" id="message" placeholder="Your Message" name="message" rows="4" data-error="Write your message" required>{{old('message')}}</textarea>
									<div class="help-block with-errors"></div>
								</div>
								<div class="submit-button text-center">
									<button class="btn btn-common" id="submit" type="submit">Send Message</button>
									<div id="msgSubmit" class="h3 text-center hidden"></div> 
									<div class="clearfix"></div> 
								</div>
							</div>
						</div>            
					</form> --}}
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->
	
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
@endsection
