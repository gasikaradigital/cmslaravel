@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Add Blog</a></li>
		</ol>
	</div>
	<!-- Row -->
	<div class="row">
		<div class="col-xl-12">
			<div class="mb-3">
				<ul class="d-flex align-items-center flex-wrap">
					<li><a href="{{ url('add-email') }}" class="btn btn-primary">Blog List</a></li>
					<li><a href="{{ url('blog-category') }}" class="btn btn-primary mx-1">Blog Category</a></li>
					<li><a href="{{ url('blog-category') }}" class="btn btn-primary me-1 mt-sm-0 mt-1">Add Blog Category</a></li>
					<li><a href="javascript:void(0);" class="btn btn-primary open mt-1 mt-md-0">Screen Option</a></li>
				</ul>
			</div>
			<div class="main-check" style="display:none;">
				<div class="row">
					<h6 class="mb-3">Show on screen</h6>
					<div class="col-xl-2 col-lg-3 col-sm-4">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-1">
						  <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-1">
								Page Attributes	
						  </label>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-sm-4">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-2">
						  <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-2">
								Featured Image	
										
						  </label>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-sm-4">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-3">
						  <label class="form-check-label mb-0" for="flexCheckDefault-3">
								 Excerpt 
						  </label>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-sm-4">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-4">
						  <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-4">
								Custom Fields 
						  </label>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-sm-4">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-5">
						  <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-5">
							Discussion 
						  </label>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-sm-4">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-6">
						  <label class="form-check-label mb-0 text-nowrap" for="flexCheckDefault-6">
							Slug 
						  </label>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-sm-4">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-7">
						  <label class="form-check-label mb-0" for="flexCheckDefault-7">
							Author 
						  </label>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-sm-4">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-8">
						  <label class="form-check-label mb-0" for="flexCheckDefault-8">
							Page Type 
						  </label>
						</div>
					</div>
					<div class="col-xl-2 col-lg-3 col-sm-4">
						<div class="form-check">
						  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-9">
						  <label class="form-check-label mb-0" for="flexCheckDefault-9">
							Seo 
						  </label>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="mb-3 col-sm-6">
					<label  class="form-label">Title</label>
					<input type="text" class="form-control" placeholder="Title">
				</div>
				<div class="col-xl-8">
					<div class="card h-auto">
						<div class="card-body p-2">
							<div id="ckeditor"></div>
						</div>
					</div>
						
					
					<div class="filter cm-content-box box-primary">
						<div class="content-title SlideToolHeader">
							<div class="cpa">		Excerpt
							</div>
							<div class="tools">
								<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
							</div>
						</div>
						<div class="cm-content-body  publish-content form excerpt">
							<div class="card-body">
								<div class="mb-3">
								  <label class="form-label">Excerpt</label>
								  <textarea class="form-control" rows="3"></textarea>	     	
								  <div class="form-text">Excerpts are optional hand-crafted summaries of your content that can be used in your theme. </div>
								</div>
							</div>
						</div>
					</div>
					<div class="filter cm-content-box box-primary">
						<div class="content-title SlideToolHeader">
							<div class="cpa">
								Custom Fields
							</div>
							<div class="tools">
								<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
							</div>
						</div>
						<div class="cm-content-body  form excerpt">
							<div class="card-body"> 
								<h6>Add New Custom Field:</h6>
								<div class="row">
									<div class="col-xl-6 col-sm-6">
									  <div class="mb-3">
										<label  class="form-label">Title</label>
										<input type="text" class="form-control" placeholder="Title">
									  </div>
									</div>
									<div class="col-xl-6 col-sm-6">
									 <label  class="form-label">Value</label>
									  <textarea class="form-control" rows="3"></textarea>
									</div>
								</div>	
								<button type="button" class="btn btn-primary btn-sm mt-3 mt-sm-0">Add Custom Field</button>
								<small class="mt-3 d-block">Custom fields can be used to extra metadata to a post that you can use in your theme.</small>
							</div>
						</div>
					</div>
					<div class="filter cm-content-box box-primary">
						<div class="content-title SlideToolHeader">
							<div class="cpa">
								Discussion							
							</div>
							<div class="tools">
								<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
							</div>
						</div>
						<div class="cm-content-body  form excerpt">
							<div class="card-body">
								<div class="form-check">
								  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-15">
								  <label class="form-check-label" for="flexCheckDefault-15">
									 Allow comments.
								  </label>
								</div>
							</div>
						</div>
					</div>
					<div class="filter cm-content-box box-primary">
						<div class="content-title SlideToolHeader">
							<div class="cpa">	Slug												
							</div>
							<div class="tools">
								<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
							</div>
						</div>
						<div class="cm-content-body form excerpt">
							<div class="card-body">
								<label class="form-label">Slug</label>
								<input type="text" class="form-control">
							</div>
						</div>
					</div>
					<div class="filter cm-content-box box-primary">
						<div class="content-title SlideToolHeader">
							<div class="cpa">Author
																
							</div>
							<div class="tools">
								<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
							</div>
						</div>
						<div class="cm-content-body  form excerpt">
							<div class="card-body">
								<label class="form-label">User</label>
								<select class="js-example-disabled" style="width:100%;">
									<option value="AL">admin@gmail.com</option>
									<option value="WY">India</option>
									<option value="WY">Information</option>
									<option value="WY">New Menu</option>
									<option value="WY">Page Menu</option>
								</select>
								 
							</div>
						</div>
					</div>
					<div class="filter cm-content-box box-primary">
						<div class="content-title SlideToolHeader">
							<div class="cpa">                    Seo							
							</div>
							<div class="tools"><a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
							</div>
						</div>
						<div class="cm-content-body  form excerpt">
							<div class="card-body">
								<label class="form-label">Page Title</label>
								<input type="text" class="form-control mb-3" placeholder="Page title">
								<div class="row">
									<div class="col-xl-6 col-sm-6">
										<label class="form-label">Keywords</label>
										<input type="text" class="form-control mb-sm-0 mb-3 " placeholder="Enter meta Keywords">
									</div>
									<div class="col-xl-6 col-sm-6">
										<label class="form-label">Descriptions</label>
										<textarea  class="form-control" placeholder="Enter meta Keywords" rows="3"></textarea>
									</div>
								</div>
								 
							</div>
						</div>
					</div>
					
				</div>
				<div class="col-xl-4">
					<div class="right-sidebar-sticky">
						<div class="filter cm-content-box box-primary">
							<div class="content-title SlideToolHeader">
								<div class="cpa">
									Published    	
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body publish-content form excerpt">
								<div class="card-body py-3">
									<ul class="d-flex align-items-center mb-2">
										<li><a href="javascript:void(0);"><i class="fa-solid fa-key"></i></a></li>
										<li><a href="javascript:void(0);" class="ms-2">Status:</a></li>
										<li><strong><a href="javascript:void(0);" class="mx-2">Published</a></strong></li>
										<li><a href="javascript:void(0);" class="accordion accordion-primary"  id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne"   aria-expanded="true" role="button">Edit</a></li>
									</ul>
									<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion-one">
									  <div class="accordion-body-text p-3 border rounded">
										<div class="mb-2">
											<label class="form-label w-100">Content Type</label>
											<select class="publish-drop default-select mb-2 w-100">
												<option selected>Select Status</option>
												<option value="1">Published</option>
												<option value="2">Draft</option>
												<option value="3">Trash</option>
												<option value="4">Private</option>
												<option value="5">Pending</option>
											</select> 
										</div>
										<div>
											<button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											Ok
										  </button>
											<button class="btn btn-danger light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
											Cancel
										  </button>
											
										</div>
									  </div>
									</div>	
									<ul class="d-flex align-items-center mb-2">
										<li><a href="javascript:void(0);"><i class="fa-solid fa-eye"></i></a></li>
										<li><a href="javascript:void(0);" class="ms-2">Status:</a></li>
										<li><strong><a href="javascript:void(0);" class="mx-2">Public</a></strong></li>
										<li><a href="javascript:void(0);" class="accordion accordion-primary"  id="headingtwo" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-controls="collapsetwo"   aria-expanded="true" role="button">Edit</a></li>
									</ul>
									<div id="collapsetwo" class="collapse" aria-labelledby="headingtwo" data-bs-parent="#accordion-one">
									  <div class="accordion-body-text p-3 border rounded">
										<div class="basic-form">
											<form>
												<div class="mb-3 mb-0">
													<div class="radio">
														<label class="form-check-label"><input type="radio" name="optradio" class="form-check-input"> Public</label>
													</div>
													<div class="radio">
														<label class="form-check-label"><input type="radio" name="optradio" class="form-check-input"> Password Protected</label>
													</div>
													<div class="radio disabled">
														<label class="form-check-label"><input type="radio" name="optradio" class="form-check-input" > Private</label>
													</div>
												</div>
											</form>
										</div>
										<div>
										<button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
											Ok
										  </button>
											<button class="btn btn-danger light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapsetwo" aria-expanded="false" aria-controls="collapsetwo">
											Cancel
										  </button>
										</div>
									  </div>
									</div>
									<ul class="d-flex align-items-center mb-2 flex-wrap">
										<li><a href="javascript:void(0);"><i class="fa-solid fa-calendar-days"></i></a></li>
										<li><a href="javascript:void(0);" class="ms-2">Published</a></li>
										<li><strong><a href="javascript:void(0);" class="mx-2">on :24-09-2023 16:22:52 </a></strong></li>
										<li><a href="javascript:void(0);" class="accordion accordion-primary"  id="headingthree" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-controls="collapsethree"   aria-expanded="true" role="button">Edit</a></li>
										
									</ul>
									<div id="collapsethree" class="collapse" aria-labelledby="headingthree" data-bs-parent="#accordion-one">
									  <div class="accordion-body-text p-3 mb-3 border rounded">
										<div class="basic-form mb-3">
											<input type="date" name="datepicker" class=" form-control" >
										</div>
										<button class="btn btn-primary btn-sm me-2" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
											Ok
										  </button>
											<button class="btn btn-danger light btn-sm" type="button" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
											Cancel
										  </button>
									  </div>
									</div>
								</div>
									<hr>
								<div class="card-footer border-0 pt-0 text-end">
									<a href="javascript:void(0);" class="btn btn-primary btn-sm">Publish</a>
								</div>
							</div>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title SlideToolHeader">
								<div class="cpa">
										 Categories
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body publish-content form excerpt">
								<div class="card-body">
									<div class="border rounded p-3 mb-3">
										<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-10">
											  <label class="form-check-label" for="flexCheckDefault-10">
												Beauty
											  </label>
										</div>
										<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-11">
											  <label class="form-check-label" for="flexCheckDefault-11">
												Fashion
											  </label>
										</div>
										<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-12">
											  <label class="form-check-label" for="flexCheckDefault-12">
													Lifestyle
											  </label>
										</div>
										<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-13">
											  <label class="form-check-label" for="flexCheckDefault-13">
												Food
											  </label>
										</div>
										<div class="form-check">
											  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault-14">
											  <label class="form-check-label" for="flexCheckDefault-14">
												Beauty
											  </label>
										</div>
									</div>
									<a href="javascript:void(0);"><i class="fa-solid fa-plus"></i> Add New Categories</a>
									<div class="input-group mt-3">
										  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
										  <span class="input-group-text" id="basic-addon1"><a href="javascript:void(0);">Add New</a></span>
									</div>
								</div>
									
							</div>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title SlideToolHeader">
								<div class="cpa">
										Tag
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body  form excerpt">
								<div class="card-body">
									<input name='tagify' class="form-control h-auto" value='Beauty, Fashion'>
								</div>
									
							</div>
						</div>
						<div class="filter cm-content-box box-primary">
							<div class="content-title SlideToolHeader">
								<div class="cpa">
									Featured Image
								</div>
								<div class="tools">
									<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
								</div>
							</div>
							<div class="cm-content-body publish-content form excerpt">
								<div class="card-body">
									<div class="avatar-upload d-flex align-items-center">
										<div class=" position-relative ">
											<div class="avatar-preview">
												<div id="imagePreview" style="background-image: url(images/no-img-avatar.png);"> 			
												</div>
											</div>
											<div class="change-btn d-flex align-items-center flex-wrap">
												<input type='file' class="form-control d-none"  id="imageUpload" accept=".png, .jpg, .jpeg">
												<label for="imageUpload" class="btn btn-primary ms-0">Select Image</label>
											</div>
										</div>		
									</div>
								</div>
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
				function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function(e) {
					$('#imagePreview').css('background-image', 'url('+e.target.result +')');
					$('#imagePreview').hide();
					$('#imagePreview').fadeIn(650);
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#imageUpload").on('change',function() {
			
			readURL(this);
		});
			$('.remove-img').on('click', function() {
				var imageUrl = "images/no-img-avatar.png";
				$('.avatar-preview, #imagePreview').removeAttr('style');
				$('#imagePreview').css('background-image', 'url(' + imageUrl + ')');
			});
			<!-- tagify.js -->
		
				if(jQuery('input[name=tagify]').length > 0){
				
				// The DOM element you wish to replace with Tagify
					var input = document.querySelector('input[name=tagify]');

					// initialize Tagify on the above input node reference
					new Tagify(input);
					
			}
		</script>
@endpush