@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Customer</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Reviews</a></li>
		</ol>
	</div>
	<div class="form-head mb-4 d-flex flex-wrap align-items-center">
		<div class="me-auto">
			<h2 class="font-w600 mb-0">Reviews</h2>
			<p class="text-light">Lorem ipsum  dolor sit amet </p>
		</div>	
		<div class="input-group search-area2 d-xl-inline-flex mb-2 me-lg-4 me-md-2">
			<button class="input-group-text"><i class="flaticon-381-search-2 text-primary"></i></button>
			<input type="text" class="form-control" placeholder="Search here...">
		</div>
		<div class="dropdown custom-dropdown mb-2 period-btn">
			<div class="btn btn-sm  d-flex align-items-center" data-bs-toggle="dropdown" aria-expanded="false" role="button">
				<svg class="primary-icon" width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M22.167 5.83362H21.0003V3.50028C21.0003 3.19087 20.8774 2.89412 20.6586 2.67533C20.4398 2.45653 20.143 2.33362 19.8336 2.33362C19.5242 2.33362 19.2275 2.45653 19.0087 2.67533C18.7899 2.89412 18.667 3.19087 18.667 3.50028V5.83362H9.33362V3.50028C9.33362 3.19087 9.2107 2.89412 8.99191 2.67533C8.77312 2.45653 8.47637 2.33362 8.16695 2.33362C7.85753 2.33362 7.56079 2.45653 7.34199 2.67533C7.1232 2.89412 7.00028 3.19087 7.00028 3.50028V5.83362H5.83362C4.90536 5.83362 4.01512 6.20237 3.35874 6.85874C2.70237 7.51512 2.33362 8.40536 2.33362 9.33362V10.5003H25.667V9.33362C25.667 8.40536 25.2982 7.51512 24.6418 6.85874C23.9854 6.20237 23.0952 5.83362 22.167 5.83362Z" fill="#0E8A74"/>
					<path d="M2.33362 22.1669C2.33362 23.0952 2.70237 23.9854 3.35874 24.6418C4.01512 25.2982 4.90536 25.6669 5.83362 25.6669H22.167C23.0952 25.6669 23.9854 25.2982 24.6418 24.6418C25.2982 23.9854 25.667 23.0952 25.667 22.1669V12.8336H2.33362V22.1669Z" fill="#0E8A74"/>
				</svg>
				<div class="text-start ms-3 flex-1">
					<span class="d-block text-black">Change Periode</span>
					<small class="d-block text-muted">August 28th - October 28th, 2021</small>
				</div>
				<i class="fa fa-caret-down text-light scale5 ms-3"></i>
			</div>
			<div class="dropdown-menu dropdown-menu-end">
				<a class="dropdown-item" href="javascript:void(0);">October 29th - November 29th, 2021</a>
				<a class="dropdown-item" href="javascript:void(0);">July 27th - Auguts 27th, 2021</a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-12">
			<div class="card">
				<div class="card-body px-4 py-3 py-md-2">
					<div class="row align-items-center">
						<div class="col-sm-12 col-md-7">
							<ul class="nav nav-pills review-tab">
								<li class="nav-item">
									<a href="#navpills-1" class="nav-link active" data-bs-toggle="tab" data-bs-target="#navpills-1" aria-expanded="false">All Review</a>
								</li>
								<li class="nav-item">
									<a href="#navpills-2" class="nav-link" data-bs-toggle="tab" data-bs-target="#navpills-2" aria-expanded="false">Published</a>
								</li>
								<li class="nav-item">
									<a href="#navpills-3" class="nav-link" data-bs-toggle="tab" data-bs-target="#navpills-3" aria-expanded="true">Deleted</a>
								</li>
							</ul>
						</div>
						<div class="col-sm-12 col-md-5 text-md-end mt-md-0 mt-4">
							<a href="javascript:void(0);" class="btn btn-secondary me-1 px-4">Publish</a>
							<a href="javascript:void(0);" class="btn btn-danger px-4">Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-12">	
			<div class="tab-content">
				<div id="navpills-1" class="tab-pane fade show active" aria-labelledby="navpills-1">
					<div class="table-responsive rounded table-hover fs-14">
						<table class="table mb-4 dataTablesCard card-table p-0  review-table fs-14" id="example6">
							<thead>
								<tr>
									<th>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="checkAll">
										  <label class="form-check-label" for="checkAll">
										  </label>
										</div>
									</th>
									<th style="width:250px;">Customer</th>
									<th class="d-none d-lg-table-cell">Event NAME</th>
									<th>Stars Review</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault1">
										  <label class="form-check-label" for="flexCheckDefault1">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault3">
										  <label class="form-check-label" for="flexCheckDefault3">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">John Doe</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault4">
										  <label class="form-check-label" for="flexCheckDefault4">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Margaretha Thomp</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Thank you so much. I love the contact information for marketing purposes especially in case we do this event again in the future. This was my first event running ticketing for STAR, and Ventic was amazing to work with. So helpful, fast to answer any questions, and super easy!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault5">
										  <label class="form-check-label" for="flexCheckDefault5">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Louis Jovanny</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault6">
										  <label class="form-check-label" for="flexCheckDefault6">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">iTickets has been great from starting up our account to setting up the event. They are always there for questions and have the answers to those questions.	</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
										  <label class="form-check-label" for="flexCheckDefault7">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid rounded me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/6.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Glee Smiley</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful,</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>

								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault11">
										  <label class="form-check-label" for="flexCheckDefault11">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault31">
										  <label class="form-check-label" for="flexCheckDefault31">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">John Doe</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault41">
										  <label class="form-check-label" for="flexCheckDefault41">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Margaretha Thomp</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Thank you so much. I love the contact information for marketing purposes especially in case we do this event again in the future. This was my first event running ticketing for STAR, and Ventic was amazing to work with. So helpful, fast to answer any questions, and super easy!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault51">
										  <label class="form-check-label" for="flexCheckDefault51">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Louis Jovanny</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault61">
										  <label class="form-check-label" for="flexCheckDefault61">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">iTickets has been great from starting up our account to setting up the event. They are always there for questions and have the answers to those questions.	</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault71">
										  <label class="form-check-label" for="flexCheckDefault71">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid rounded me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/6.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Glee Smiley</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful,</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div id="navpills-2" class="tab-pane fade" aria-labelledby="navpills-2">
					<div class="table-responsive rounded table-hover fs-14">
						<table class="table mb-4 dataTablesCard card-table p-0  review-table fs-14" id="example7">
							<thead>
								<tr>
									<th>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="checkAll2">
										  <label class="form-check-label" for="checkAll2">
										  </label>
										</div>
									</th>
									<th style="width:250px;">Customer</th>
									<th class="d-none d-lg-table-cell">Event NAME</th>
									<th>Stars Review</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
										  <label class="form-check-label" for="flexCheckDefault12">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault32">
										  <label class="form-check-label" for="flexCheckDefault32">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">John Doe</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault42">
										  <label class="form-check-label" for="flexCheckDefault42">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Margaretha Thomp</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Thank you so much. I love the contact information for marketing purposes especially in case we do this event again in the future. This was my first event running ticketing for STAR, and Ventic was amazing to work with. So helpful, fast to answer any questions, and super easy!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault52">
										  <label class="form-check-label" for="flexCheckDefault52">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Louis Jovanny</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault62">
										  <label class="form-check-label" for="flexCheckDefault62">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">iTickets has been great from starting up our account to setting up the event. They are always there for questions and have the answers to those questions.	</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault72">
										  <label class="form-check-label" for="flexCheckDefault72">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid rounded me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/6.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Glee Smiley</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful,</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>


								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault113">
										  <label class="form-check-label" for="flexCheckDefault113">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault313">
										  <label class="form-check-label" for="flexCheckDefault313">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">John Doe</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault413">
										  <label class="form-check-label" for="flexCheckDefault413">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Margaretha Thomp</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Thank you so much. I love the contact information for marketing purposes especially in case we do this event again in the future. This was my first event running ticketing for STAR, and Ventic was amazing to work with. So helpful, fast to answer any questions, and super easy!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault513">
										  <label class="form-check-label" for="flexCheckDefault513">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Louis Jovanny</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault613">
										  <label class="form-check-label" for="flexCheckDefault613">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">iTickets has been great from starting up our account to setting up the event. They are always there for questions and have the answers to those questions.	</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault713">
										  <label class="form-check-label" for="flexCheckDefault713">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid rounded me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/6.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Glee Smiley</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful,</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<div id="navpills-3" class="tab-pane fade" aria-labelledby="navpills-3">
					<div class="table-responsive rounded table-hover fs-14">
						<table class="table mb-4 dataTablesCard card-table p-0  review-table fs-14" id="example8">
							<thead>
								<tr>
									<th>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="checkAll3">
										  <label class="form-check-label" for="checkAll3">
										  </label>
										</div>
									</th>
									<th style="width:250px;">Customer</th>
									<th class="d-none d-lg-table-cell">Event NAME</th>
									<th>Stars Review</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault14">
										  <label class="form-check-label" for="flexCheckDefault14">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault34">
										  <label class="form-check-label" for="flexCheckDefault34">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">John Doe</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault44">
										  <label class="form-check-label" for="flexCheckDefault44">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Margaretha Thomp</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Thank you so much. I love the contact information for marketing purposes especially in case we do this event again in the future. This was my first event running ticketing for STAR, and Ventic was amazing to work with. So helpful, fast to answer any questions, and super easy!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault54">
										  <label class="form-check-label" for="flexCheckDefault54">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Louis Jovanny</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault64">
										  <label class="form-check-label" for="flexCheckDefault64">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">iTickets has been great from starting up our account to setting up the event. They are always there for questions and have the answers to those questions.	</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault74">
										  <label class="form-check-label" for="flexCheckDefault74">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid rounded me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/6.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Glee Smiley</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful,</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>


								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault114">
										  <label class="form-check-label" for="flexCheckDefault114">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/1.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault314">
										  <label class="form-check-label" for="flexCheckDefault314">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/2.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">John Doe</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful, helpful service across the board. It is greatly appreciated!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault415">
										  <label class="form-check-label" for="flexCheckDefault415">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/3.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Margaretha Thomp</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Thank you so much. I love the contact information for marketing purposes especially in case we do this event again in the future. This was my first event running ticketing for STAR, and Ventic was amazing to work with. So helpful, fast to answer any questions, and super easy!</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault515">
										  <label class="form-check-label" for="flexCheckDefault515">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid  me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/4.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Louis Jovanny</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">I've used Ventic for almost ten years. From small general admission church shows to complete turn key ticketing services at Jakarta. I use them for marketing and ticketing on every show. No questions.</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault615">
										  <label class="form-check-label" for="flexCheckDefault615">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/5.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Cindy Hawkins</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">iTickets has been great from starting up our account to setting up the event. They are always there for questions and have the answers to those questions.	</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded  btn-sm ms-2 px-4">Delete</a>
										</div>
									</td>
								</tr>
								<tr>
									<td>
										<div class="form-check checkbox-secondary">
										  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault715">
										  <label class="form-check-label" for="flexCheckDefault715">
										  </label>
										</div>
									</td>
									<td>
										<div class="media align-items-center tbl-img">
											<img class="img-fluid rounded me-3 d-none d-xl-inline-block" width="70" src="{{ asset('images/avatar/6.jpg') }}" alt="DexignZone">
											<div class="media-body">
												<h4 class="font-w600 mb-1 ">Glee Smiley</h4>
												<span>Sunday, 24 July 2020 04:55 PM</span>
											</div>
										</div>
									</td>
									<td class="d-none d-lg-table-cell">The Story of Danau Toba (Musical Drama)</td>
									<td>
										<span class="star-review d-inline-block mb-2 fs-16">
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-orange"></i>
											<i class="fa fa-star fs-16 text-gray"></i>
										</span>
										<p class="mb-0 d-none d-xl-inline-block">Ventic is one of the best vendors we've ever worked with. Thanks for your wonderful,</p>
									</td>
									<td>
										<div class="d-flex">
											<a href="javascript:void(0);" class="btn btn-secondary btn-rounded text-white btn-sm px-4">Publish</a>
											<a href="javascript:void(0);" class="btn btn-outline-danger btn-rounded btn-sm ms-2 px-4">Delete</a>
										</div>
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
@endsection