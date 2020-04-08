@extends('front.layouts.master')
@section('content')
    <!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Gallery</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Gallery -->
	<div class="gallery-box">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Gallery</h2>
						<p></p>
					</div>
				</div>
			</div>
			<div class="tz-gallery">
				<div class="row">
					@foreach ($galleries as $gallery)
					<div class="col-sm-12 col-md-4 col-lg-4">
						<a class="lightbox" href="{{$gallery->image}}">
							<img class="img-fluid" src="{{$gallery->image}}" alt="Gallery Images">
						</a>
					</div>
					@endforeach
					
					
				</div>
			</div>
		</div>
	</div>
	<!-- End Gallery -->
@endsection
