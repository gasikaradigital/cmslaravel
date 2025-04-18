@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">CMS</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Blog Category</a></li>
		</ol>
	</div>
	<!-- Row -->
	<div class="row">
		<div class="col-xl-12">
			<div class="row">
				<div class="col-xl-4">
					<div class="filter cm-content-box box-primary">
						<div class="content-title SlideToolHeader">
							<div class="cpa">
								Add Blog Category
							</div>
							<div class="tools">
								<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
							</div>
						</div>
						<div class="cm-content-body form excerpt">
							<div class="card-body">
								<div class="mb-3">
								  <label  class="form-label">Name</label>
								  <input type="text" class="form-control" placeholder="Name">
								</div>
								<div class="mb-3">
									  <label  class="form-label">Slug</label>
									  <input type="text" class="form-control" placeholder="Slug">
								</div>
								<div class="mb-3">
								  <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
								  <textarea class="form-control" id="exampleFormControlTextarea1" rows="8"></textarea>
								</div>
								<div>
									<button type="button" class="btn btn-primary">Save</button>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-8">
					<div class="filter cm-content-box box-primary">
						<div class="content-title SlideToolHeader">
							<div class="cpa">
								Blog List
							</div>
							<div class="tools">
								<a href="javascript:void(0);" class="expand handle"><i class="fal fa-angle-down"></i></a>
							</div>
						</div>
						<div class="cm-content-body publish-content form excerpt">
							<div class="card-body py-3">
								<div class="table-responsive">
									<table class="table table-striped verticle-middle table-responsive-sm">
										<thead>
											<tr>
												<th scope="col" class="text-black">S.No</th>
												<th scope="col" class="text-black">Name</th>
												<th scope="col" class="text-black text-end">Actions</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>Beauty</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>2</td>
												<td>Fashion</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>3</td>
												<td>Lifestyle</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>4</td>
												<td>Food</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>5</td>
												<td>Beauty</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>6</td>
												<td>Fashion</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>7</td>
												<td>Lifestyle</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>8</td>
												<td>Food</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>9</td>
												<td>Lifestyle</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>10</td>
												<td>Food</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>11</td>
												<td>Fashion</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
											<tr>
												<td>12</td>
												<td>Lifestyle</td>
												<td class="text-end">
													<a class="text-hover" href="javascript:void(0);">Edit</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">Up</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">down</a>
													<span>|</span>
													<a class="text-hover" href="javascript:void(0);">delete</a>
													
												</td>
											</tr>
										</tbody>
									</table>
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