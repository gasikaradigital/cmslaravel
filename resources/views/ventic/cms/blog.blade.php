@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Blog</a></li>
		</ol>
	</div>
	<!-- Row -->
	<div class="row">
		<div class="col-xl-12">
			<div class="filter cm-content-box box-primary">
				<div class="content-title SlideToolHeader">
					<div class="cpa">
					<i class="fa-solid fa-filter me-2"></i>Filter    	
					</div>
					<div class="tools">
						<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
					</div>
				</div>
				<div class="cm-content-body  form excerpt">
					<div class="card-body pb-3">
						<div class="row">
							<div class="col-xl-3 col-sm-6">
								<input type="text" class="form-control mb-3" id="exampleFormControlInput1" placeholder="Title">
							</div>
							<div class="col-xl-3 col-sm-6">
								<select class="default-select form-control mb-3 dashboard-select-2 w-100">
									<option selected>Select Status</option>
									<option value="1">Published</option>
									<option value="2">Draft</option>
									<option value="3">Trash</option>
									<option value="4">Private</option>
									<option value="5">Pending</option>
								</select> 
							</div>
							<div class="col-xl-3 col-sm-6">
								 <input class="form-control  mb-3" type="text" id="datepicker">
							</div>
							<div class="col-xl-3 col-sm-6">
								<button class="btn btn-primary" title="Click here to Search" type="button"><i class="fa-solid fa-filter me-1"></i>Filter</button>
								<button class="btn btn-danger light" title="Click here to remove filter" type="button">Remove Filter</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="mb-5">
				<ul class="d-flex align-items-center flex-wrap">
					<li><a href="{{ url('add-email') }}" class="btn btn-primary">Blog List</a></li>
					<li><a href="{{ url('blog-category') }}" class="btn btn-primary mx-1">Blog Category</a></li>
					<li><a href="{{ url('blog-category') }}" class="btn btn-primary me-1 mt-sm-0 mt-1">Add Blog Category</a></li>
				</ul>
			</div>
			<div class="filter cm-content-box box-primary">
				<div class="content-title SlideToolHeader">
					<div class="cpa">
						<i class="fa-solid fa-file-lines me-1"></i>Blogs List
					</div>
					<div class="tools">
						<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
					</div>
				</div>
				<div class="cm-content-body  form excerpt">
					<div class="card-body py-3">
						<div class="table-responsive">
							<table class="table table-striped  table-condensed flip-content">
								<thead>
									<tr>
										<th class="text-black">S.No</th>
										<th class="text-black">Title</th>
										<th class="text-black">Status</th>
										<th class="text-black">Modified</th>
										<th class="text-black text-end">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>Title of first blog post entry</td>
										<td>Published</td>
										<td>09 Jan, 2024</td>
										<td class="text-end">
											<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
												<i class="fa-solid fa-pen-to-square"></i>
											</a>
											<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
												<i class="fa-solid fa-trash"></i>
											</a>
										</td>
										 
									</tr>
									<tr>
										<td>2</td>
										<td>Why Go For A VFX Course?</td>
										<td>Published</td>
										<td>13 May, 20224</td>
										<td class="text-end">
											<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
												<i class="fa-solid fa-pen-to-square"></i>
											</a>
											<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
												<i class="fa-solid fa-trash"></i>
											</a>
										</td>
										
									</tr>
									<tr>
										<td>3</td>
										<td>Reasons To Choose Animation Courses</td>
										<td>Published</td>
										<td>13 Apr, 2024</td>
										<td class="text-end">
											<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
												<i class="fa-solid fa-pen-to-square"></i>
											</a>
											<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
												<i class="fa-solid fa-trash"></i>
											</a>
										</td>
										
									</tr>
									<tr>
										<td>4</td>
										<td>Blue Screen Vs. Green Screen For VFX</td>
										<td>Published</td>
										<td>13 June, 2024</td>
										<td class="text-end">
											<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
												<i class="fa-solid fa-pen-to-square"></i>
											</a>
											<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
												<i class="fa-solid fa-trash"></i>
											</a>
										</td>
										
									</tr>
									<tr>
										<td>5</td>
										<td>All About Animation</td>
										<td>Published</td>
										<td>13 Apr, 2024</td>
										<td class="text-end">
											<a href="javascript:void(0);" class="btn btn-warning btn-sm content-icon">
												<i class="fa-solid fa-pen-to-square"></i>
											</a>
											<a href="javascript:void(0);" class="btn btn-danger btn-sm content-icon">
												<i class="fa-solid fa-trash"></i>
											</a>
										</td>
										
									</tr>
									
								</tbody>
							</table>
							<div class="d-flex align-items-center width-defult justify-content-xl-between justify-content-center flex-wrap py-3">
								<small>Page 1 of 5, showing 2 records out of 8 total, starting on record 1, ending on 2</small>
								<nav aria-label="Page navigation example">
								  <ul class="pagination my-2 my-md-0">
									<li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="fa-solid fa-angle-left"></i></a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
									<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
									<li class="page-item"><a class="page-link " href="javascript:void(0);"><i class="fa-solid fa-angle-right"></i></a></li>
								  </ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')
	<script>
		$(function () {
			  $("#datepicker").datepicker({ 
					autoclose: true, 
					todayHighlight: true
			  }).datepicker('update', new Date());
		
		});

	</script>
@endpush