@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">Analytics</a></li>
		</ol>
	</div>
	<div class="form-head mb-4 d-flex flex-wrap align-items-center">
		<div class="me-auto">
			<h2 class="font-w600 mb-0">Analytics</h2>
			<p>Lorem ipsum  dolor sit amet </p>
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
		<div class="col-xl-6">
			<div class="row">
				<div class="col-xl-12">
					<div class="card bg-primary">	
						<div class="card-header border-0 pb-0 align-items-center justify-content-center">
							<div class="me-auto">
								<h4 class="chart-num-3 mb-0 text-white">Sales Comparison</h4>
								<span class="chart-num-3 font-w100 text-white">Than last day</span>
							</div>
							<span class="font-w600 me-2 text-white chart-num-2">94%</span>
							<svg width="27" height="13" viewBox="0 0 27 13" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M26.002 13L13.002 1.55023e-07L0.00195312 13" fill="white"/>
							</svg>
						</div>
						<div class="card-body pb-0 p-2">
							<div id="line-chart-2"></div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">	
					<div class="card">
						<div class="card-header border-0 pb-0 flex-wrap">
							<h4 class="fs-20 font-w500 card-title mb-0">Best Selling<span class="ms-4">2020</span></h4>
							<div class="card-action coin-tabs">
								<ul class="nav nav-tabs" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" data-bs-toggle="tab" href="#Monthly2">
											Monthly
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " data-bs-toggle="tab" href="#Weekly2">
											Weekly
										</a>
									</li>
									<li class="nav-item">
										<a class="nav-link " data-bs-toggle="tab" href="#Daily2">
											Daily
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="card-body pb-0 ps-sm-3 ps-2">
							<div class="tab-content">
								<div class="tab-pane fade active show" id="Monthly2">
									<div id="salesRavenue" class="salesRavenue-chart chart-primary"></div>
								</div>
								<div class="tab-pane fade" id="Weekly2">
									<div id="salesRavenueone"  class="salesRavenue-chart chart-primary"></div>
								</div>	
								<div class="tab-pane fade" id="Daily2">
									<div id="salesRavenuetwo"  class="salesRavenue-chart chart-primary"></div>
								</div>
							</div>	
						</div>
					</div>
				</div>
				<div class="col-xxl-12 col-md-6">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0 border-0">
								<h4 class="fs-20 font-w600 card-title mb-0">Pie Chart </h4>
								<select class="ms-auto float-end dashboard-n-select default-select">
									<option data-display="Monthly">This Week</option>
									<option value="1">Next Week</option>
								</select>
							</div>
							<div class="card-body pt-2">
								<div id="chartCircle" class="chartseries">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xxl-12 col-md-6">
					<div class="card">
						<div class="card-header pb-0 border-0">
							<h4 class="fs-20  card-title font-w600 mb-0">Customers </h4>
						</div>
						<div class="card-body">
							<div class="d-flex align-items-center justify-content-center">
								<div class="d-inline-block position-relative donut-chart-sale mb-3">
									<span class="donut1" data-peity='{ "fill": ["rgb(14, 138, 116)", "rgba(240, 240, 240)"],   "innerRadius": 40, "radius": 10}'>5/9</span>
									<small class="text-black">50%</small>
								</div>
								<div class="ms-4">
									<h5 class="fs-18 text-black mb-0 ">Adult</h5>
									<span class="text-primary fs-14">30 - 45 Years</span>
								</div>
							</div>
							<div class="d-flex align-items-center mt-4 justify-content-center">
								<div class="d-inline-block position-relative donut-chart-sale mb-3">
									<span class="donut1" data-peity='{ "fill": ["rgb(14, 138, 116)", "rgba(240, 240, 240)"],   "innerRadius": 40, "radius": 10}'>5/7</span>
									<small class="text-black">84%</small>
								</div>
								<div class="ms-4">
									<h5 class="fs-18 text-black mb-0 ">Young</h5>
									<span class="text-primary fs-14">17 - 24 Years</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6">
			<div class="row">
				<div class="col-xl-12">
					<div class="card">
						<div class="card-header border-0 pb-0 flex-wrap">
							<h4 class="fs-20 mb-0 card-title font-w500">Best Selling</h4>
							<select class="ms-auto float-end dashboard-n-select default-select">
								<option data-display="Monthly">Monthly</option>
								<option value="1">Weekly</option>
								<option value="2">Daily</option>
							</select>
						</div>
						<div class="card-body py-2">
							<div class="d-flex border justify-content-between align-items-center p-3 rounded">	
								<span class="fs-14  font-w500">Tuesday</span>
								<span class="fs-14  font-w500">215,523 pcs</span>
							</div>
							<div class="row align-items-center">
								<div class="col-sm-6 p-0">
									<div id="lineChart"></div>
								</div>	
								<div class="col-sm-6">
									<div id="pieChart" class="d-flex justify-content-center"></div>
									<div class="chart-point mt-4 text-center">
										<div class="fs-13 col px-1 text-primary text-start">
											<div class="mb-2">
												<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect y="6.10352e-05" width="22.0298" height="21" rx="8" fill="#FB3E7A"/>
												</svg>
											</div>	
											Movies Ticket
										</div>
										<div class="fs-13 col px-1 text-primary text-start">
											<div class="mb-2">
												<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect x="0.128906" y="6.10352e-05" width="22.0298" height="21" rx="8" fill="#0E8A74"/>
												</svg>
											</div>
											Music Ticket
										</div>
										<div class="fs-13 col px-1 text-primary text-start">
											<div class="mb-2">
												<svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect x="0.24707" y="6.10352e-05" width="22.0298" height="21" rx="8" fill="#C8C8C8"/>
												</svg>
											</div>
											Football Ticket
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
				<div class="col-xl-6 col-xxl-12 col-sm-6">
					<div class="card">
						<div class="card-header align-items-start pb-0 border-0">
							<span class="fs-20 font-w400 mb-0 ticket-size">Ticket Sold</span>
							<h4 class="fs-16 mb-0 ticket-size-1">456k Pcs</h4>
						</div>
						<div class="card-body">
							<div class="progress" style="height:9px;">
								<div class="progress-bar bg-secondary progress-animated" style="width: 80%; height:9px;" role="progressbar">
									<span class="sr-only">60% Complete</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-xxl-12 col-sm-6">
					<div class="card">
						<div class="card-header align-items-center pb-2 pt-2 border-0">
							<h4 class="fs-16 mb-0 ">451,509</h4>
							<select class="ms-auto float-end dashboard-n-select default-select">
								<option data-display="Monthly">This Week</option>
								<option value="1">Next Week</option>
							</select>
						</div>
						<div class="card-body p-0">
							<div class="card-body p-0">
								<div id="widgetChart1" class="dashboard-chart"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-xxl-12 col-sm-6">
					<div class="card">
						<div class="card-header align-items-center pb-0 border-0">
							<h4 class="fs-16 mb-0 ">$456,623</h4>
							<select class="ms-auto float-end dashboard-n-select default-select">
								<option data-display="Monthly">Monthly</option>
								<option value="1">Weekly</option>
								<option value="2">Daily</option>
							</select>
						</div>
						<div class="card-body p-0">
							<div class="card-body p-0">
								<div id="widgetChart2" class="dashboard-chart"></div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-6 col-xxl-12 col-sm-6">
					<div class="card">
						<div class="card-body pt-2">
							<div class="index-chart-point">
								<div class="check-point-area">
									<canvas id="doughnut_chart1"></canvas>
								</div>
								<div class="">
									<select class="ms-auto float-end dashboard-n-select default-select">
										<option data-display="Monthly">Monthly</option>
										<option value="1">Weekly</option>
										<option value="2">Daily</option>
									</select>
									<ul class="index-chart-point-list">
										<li><i class="fa fa-stop text-danger"></i>Tickets A</li>
										<li><i class="fa fa-stop text-info"></i> Tickets B</li>
										<li><i class="fa fa-stop text-success"></i> Tickets C</li>
										<li><i class="fa fa-stop text-warning"></i> Tickets D</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xl-12">
					<div class="card overflow-hidden">
						<div class="card-header border-0 pb-0">
							<h4 class="card-title mb-1 ">Trending Items</h4>
							<div class="dropdown ms-auto text-right">
								<div class="btn-link" data-bs-toggle="dropdown">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#fff" cx="12" cy="5" r="2"></circle><circle fill="#fff" cx="12" cy="12" r="2"></circle><circle fill="#fff" cx="12" cy="19" r="2"></circle></g></svg>
								</div>
								<div class="dropdown-menu dropdown-menu-right">
									<a class="dropdown-item" href="javascript:void(0);">View Detail</a>
									<a class="dropdown-item" href="javascript:void(0);">Edit</a>
									<a class="dropdown-item" href="javascript:void(0);">Delete</a>
								</div>
							</div>
						</div>
						<div class="card-body pt-0 p-0">
							<div class="media align-items-center border-bottom p-md-4 p-3">
								<span class="number  col-1 px-0 align-self-center d-none d-sm-inline-block ">#1</span>
								<div class="ticket-icon  ms-0 me-3 d-none d-sm-inline-block">
									<i class="fa fa-ticket" aria-hidden="true"></i>
								</div>
								<div class="media-body col-sm-6 col-6 col-xxl-5 px-0">
									<h5 class="mt-0 mb-0"><a class="number font-w500 " href="javascript:void(0);">Envato International Meetup 2020</a></h5>
								</div>
								<div class="media-footer ms-auto col-2 px-0 d-flex align-self-center align-items-center">
									<div class="text-center">
										<span class="text-secondary d-block chart-num-3 font-w600">454</span>
										<span class="fs-14">Sales</span>
									</div>
								</div>
								<div class="me-3">
									<span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
									<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="3.7193" height="27" rx="1.85965" transform="matrix(-1 0 0 1 26.8359 0)" fill="#FB3E7A"/>
										<rect width="3.7193" height="19.6364" rx="1.85965" transform="matrix(-1 0 0 1 19.3975 7.36365)" fill="#FB3E7A"/>
										<rect width="3.7193" height="8.59091" rx="1.85965" transform="matrix(-1 0 0 1 11.958 18.4091)" fill="#FB3E7A"/>
										<rect width="4.19613" height="16.6154" rx="2.09806" transform="matrix(-1 0 0 1 4.99707 10.3846)" fill="#FB3E7A"/>
									</svg>
								</div>
								<svg width="23" height="11" viewBox="0 0 23 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.866657 -9.6165e-07L11.8816 11L22.8965 0" fill="#FF3131"/>
								</svg>

							</div>
							<div class="media align-items-center border-bottom p-md-4 p-3">
								<span class="number col-1 px-0 align-self-center d-none d-sm-inline-block ">#2</span>
								<div class="ticket-icon ms-0 me-3 d-none d-sm-inline-block">
									<i class="fa fa-ticket" aria-hidden="true"></i>
								</div>
								<div class="media-body col-sm-6 col-6 col-xxl-5 px-0">
									<h5 class="mt-0 mb-0"><a class=" number font-w500 " href="javascript:void(0);">Jakarta Indie Music Festival 2020</a></h5>
								</div>
								<div class="media-footer ms-auto col-2 px-0 d-flex align-self-center align-items-center">
									<div class="text-center">
										<span class="text-secondary d-block chart-num-3 font-w600">341</span>
										<span class="fs-14">Sales</span>
									</div>
								</div>
								<div class="me-3">
									<span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
									<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="3.7193" height="27" rx="1.85965" transform="matrix(-1 0 0 1 26.8359 0)" fill="#FB3E7A"/>
										<rect width="3.7193" height="19.6364" rx="1.85965" transform="matrix(-1 0 0 1 19.3975 7.36365)" fill="#FB3E7A"/>
										<rect width="3.7193" height="8.59091" rx="1.85965" transform="matrix(-1 0 0 1 11.958 18.4091)" fill="#FB3E7A"/>
										<rect width="4.19613" height="16.6154" rx="2.09806" transform="matrix(-1 0 0 1 4.99707 10.3846)" fill="#FB3E7A"/>
									</svg>
								</div>
								<svg width="23" height="11" viewBox="0 0 23 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.866657 11L11.8816 -4.72849e-07L22.8965 11" fill="#0E8A74"/>
								</svg>
							</div>
							<div class="media align-items-center border-bottom p-md-4 p-3">
								<span class="number  col-1 px-0 align-self-center d-none d-sm-inline-block ">#3</span>
								<div class="ticket-icon ms-0 me-3 d-none d-sm-inline-block">
									<i class="fa fa-ticket" aria-hidden="true"></i>
								</div>
								<div class="media-body col-sm-6 col-6 col-xxl-5 px-0">
									<h5 class="mt-0 mb-0"><a class="number font-w500 " href="javascript:void(0);">Live Choir in Sydney 2020</a></h5>
								</div>
								<div class="media-footer ms-auto col-2 px-0 d-flex align-self-center align-items-center">
									<div class="text-center">
										<span class="text-secondary d-block chart-num-3 font-w600">225</span>
										<span class="fs-14">Sales</span>
									</div>
								</div>
								<div class="me-3">
									<span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
									<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="3.7193" height="27" rx="1.85965" transform="matrix(-1 0 0 1 26.8359 0)" fill="#FB3E7A"/>
										<rect width="3.7193" height="19.6364" rx="1.85965" transform="matrix(-1 0 0 1 19.3975 7.36365)" fill="#FB3E7A"/>
										<rect width="3.7193" height="8.59091" rx="1.85965" transform="matrix(-1 0 0 1 11.958 18.4091)" fill="#FB3E7A"/>
										<rect width="4.19613" height="16.6154" rx="2.09806" transform="matrix(-1 0 0 1 4.99707 10.3846)" fill="#FB3E7A"/>
									</svg>
								</div>
								<svg width="23" height="11" viewBox="0 0 23 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0.866657 -9.6165e-07L11.8816 11L22.8965 0" fill="#FF3131"/>
								</svg>
							</div>
							<div class="media align-items-center border-bottom p-md-4 p-3">
								<span class="number col-1 px-0 align-self-center d-none d-sm-inline-block ">#4</span>
								<div class="ticket-icon ms-0 me-3 d-none d-sm-inline-block">
									<i class="fa fa-ticket" aria-hidden="true"></i>
								</div>
								<div class="media-body col-sm-6 col-6 col-xxl-5 px-0">
									<h5 class="mt-0 mb-0"><a class="number font-w500 " href="javascript:void(0);">Artist Performing Festival In Aus..</a></h5>
								</div>
								<div class="media-footer ms-auto col-2 px-0 d-flex align-self-center align-items-center">
									<div class="text-center">
										<span class="text-secondary d-block fs-20 font-w600">127</span>
										<span class="fs-14">Sales</span>
									</div>
								</div>
								<div class="me-3">
									<span class="peity-success" data-style="width:100%;" style="display: none;">0,2,1,4</span>
									<svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect width="3.7193" height="27" rx="1.85965" transform="matrix(-1 0 0 1 26.8359 0)" fill="#FB3E7A"/>
										<rect width="3.7193" height="19.6364" rx="1.85965" transform="matrix(-1 0 0 1 19.3975 7.36365)" fill="#FB3E7A"/>
										<rect width="3.7193" height="8.59091" rx="1.85965" transform="matrix(-1 0 0 1 11.958 18.4091)" fill="#FB3E7A"/>
										<rect width="4.19613" height="16.6154" rx="2.09806" transform="matrix(-1 0 0 1 4.99707 10.3846)" fill="#FB3E7A"/>
									</svg>
								</div>
								<svg class="min-w22" width="22" height="11" viewBox="0 0 22 11" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M0 -9.61651e-07L11 11L22 0" fill="#E63D3D"/>
								</svg>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>	
</div>
@endsection