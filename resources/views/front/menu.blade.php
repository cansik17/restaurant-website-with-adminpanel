@extends('front.layouts.master')

@section('content')
    <!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Special Menu</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->
	
	<!-- Start Menu -->
	<div class="menu-box">
		<div class="container">
	
			<div class="row">
				<div class="col-lg-12">
					<div class="special-menu text-center">
						<div class="button-group filter-button-group">
							<button class="active" data-filter="*">All</button>
							<button data-filter=".drinks">Drinks</button>
							<button data-filter=".lunch">Lunch</button>
							<button data-filter=".dinner">Dinner</button>
						</div>
					</div>
				</div>
			</div>
				
			<div class="row special-list">
				@foreach ($menus as $menu)
						<div class="col-lg-4 col-md-6 special-grid {{$menu->kind}}">
							<div class="gallery-single fix">
								<img src="{{$menu->image}}" class="img-fluid" alt="Image">
								<div class="why-text">
									<h4>{{$menu->firstTitle}}</h4>
									<p>{{$menu->secondTitle}}</p>
									<h5> ${{$menu->price}}</h5>
								</div>
							</div>
						</div>
				@endforeach
			
				
				
			</div>
		</div>
	</div>
	<!-- End Menu -->
@endsection
