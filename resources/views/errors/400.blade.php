@extends('layouts.fullwidth')
@section('content')
		<div class="col-md-5">
			<div class="form-input-content text-center error-page">
				<h1 class="error-text font-w700">400</h1>
				<h4><i class="fa fa-thumbs-down text-danger"></i> Bad Request</h4>
				<p>Your Request resulted in an error</p>
				<div>
					<a class="btn btn-primary" href="{{url('index')}}">Back to Home</a>
				</div>
			</div>
		</div>
@endsection	
 