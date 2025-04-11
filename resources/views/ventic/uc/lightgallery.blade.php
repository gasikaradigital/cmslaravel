
@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="row page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Advanced</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">lightGallery</a></li>
		</ol>
	</div>
	
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<h4 class="card-title">Light Gallery</h4>
				</div>
				<div class="card-body pb-1">
					<div id="lightgallery" class="row">
						<a href="{{ asset('images/big/img1.jpg') }}"  data-src="{{ asset('images/big/img1.jpg') }}" class=" lg-item col-lg-3 col-md-6 mb-4">
							<img src="{{ asset('images/big/img1.jpg') }}" alt="" class="w-100 rounded">
						</a>
						<a href="{{ asset('images/big/img2.jpg') }}" data-src="{{ asset('images/big/img2.jpg') }}" class="lg-item col-lg-3 col-md-6 mb-4">
							<img src="{{ asset('images/big/img2.jpg') }}" alt="" class="w-100 rounded">
						</a>
						<a href="{{ asset('images/big/img3.jpg') }}" data-src="{{ asset('images/big/img3.jpg') }}" class="lg-item col-lg-3 col-md-6 mb-4">
							<img src="{{ asset('images/big/img3.jpg') }}" alt="" class="w-100 rounded">
						</a>
						<a href="{{ asset('images/big/img4.jpg') }}"  data-src="{{ asset('images/big/img4.jpg') }}" class="lg-item col-lg-3 col-md-6 mb-4">
							<img src="{{ asset('images/big/img4.jpg') }}" alt="" class="w-100 rounded">
						</a>
						<a href="{{ asset('images/big/img5.jpg') }}" data-src="{{ asset('images/big/img5.jpg') }}" class="lg-item col-lg-3 col-md-6 mb-4">
							<img src="{{ asset('images/big/img5.jpg') }}" alt="" class="w-100 rounded">
						</a>
						<a href="{{ asset('images/big/img6.jpg') }}" data-src="{{ asset('images/big/img6.jpg') }}" class="lg-item col-lg-3 col-md-6 mb-4">
							<img src="{{ asset('images/big/img6.jpg') }}" alt="" class="w-100 rounded">
						</a>
						<a href="{{ asset('images/big/img7.jpg') }}" data-src="{{ asset('images/big/img7.jpg') }}" class="lg-item col-lg-3 col-md-6 mb-4">
							<img src="{{ asset('images/big/img7.jpg') }}" alt="" class="w-100 rounded">
						</a>
						<a href="{{ asset('images/big/img8.jpg') }}" data-src="{{ asset('images/big/img8.jpg') }}" class="lg-item col-lg-3 col-md-6 mb-4">
							<img src="{{ asset('images/big/img8.jpg') }}" alt="" class="w-100 rounded">
						</a>
					</div>
				</div>
			</div>
			<!-- /# card -->
		</div>
	</div>
</div>
@endsection