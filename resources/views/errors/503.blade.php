@extends('layouts.fullwidth')
@section('content')
                <div class="col-md-6">
                    <div class="form-input-content text-center error-page">
                        <h1 class="error-text font-w700">503</h1>
                        <h4><i class="fa fa-times-circle text-danger"></i> Service Unavailable</h4>
                        <p>Sorry, we are under maintenance!</p>
						<div>
                            <a class="btn btn-primary" href="{{url('index')}}">Back to Home</a>
                        </div>
                    </div>
                </div>
        @endsection        
          