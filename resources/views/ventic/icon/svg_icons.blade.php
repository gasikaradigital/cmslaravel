@extends('layouts.default')
@section('content')
<div class="container-fluid">
	<div class="page-titles">
		<ol class="breadcrumb">
			<li class="breadcrumb-item"><a href="javascript:void(0)">Icons</a></li>
			<li class="breadcrumb-item active"><a href="javascript:void(0)">SVG icons</a></li>
		</ol>
	</div>
	<div class="row">
		<div class="col-xl-12">
			<div class="card p-0">
				<div class="card-header"><h4 class="text-black mb-0">SVG Icons</h4></div>
				<div class="card-body svg-area px-3">
					<div class="row">
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M12.638 4.9936V2.3C12.638 1.5824 13.2484 1 14.0006 1C14.7513 1 15.3631 1.5824 15.3631 2.3V4.9936C17.3879 5.2718 19.2805 6.1688 20.7438 7.565C22.5329 9.2719 23.5384 11.5872 23.5384 14V18.8932L24.6408 20.9966C25.1681 22.0041 25.1122 23.2001 24.4909 24.1582C23.8709 25.1163 22.774 25.7 21.5941 25.7H15.3631C15.3631 26.4176 14.7513 27 14.0006 27C13.2484 27 12.638 26.4176 12.638 25.7H6.40705C5.22571 25.7 4.12888 25.1163 3.50892 24.1582C2.88759 23.2001 2.83172 22.0041 3.36039 20.9966L4.46268 18.8932V14C4.46268 11.5872 5.46691 9.2719 7.25594 7.565C8.72068 6.1688 10.6119 5.2718 12.638 4.9936ZM14.0006 7.5C12.1924 7.5 10.4607 8.1851 9.18259 9.4045C7.90452 10.6226 7.18779 12.2762 7.18779 14V19.2C7.18779 19.4015 7.13739 19.6004 7.04337 19.7811C7.04337 19.7811 6.43703 20.9381 5.79662 22.1588C5.69171 22.3603 5.70261 22.6008 5.82661 22.7919C5.9506 22.983 6.16996 23.1 6.40705 23.1H21.5941C21.8298 23.1 22.0492 22.983 22.1732 22.7919C22.2972 22.6008 22.3081 22.3603 22.2031 22.1588C21.5627 20.9381 20.9564 19.7811 20.9564 19.7811C20.8624 19.6004 20.8133 19.4015 20.8133 19.2V14C20.8133 12.2762 20.0953 10.6226 18.8172 9.4045C17.5391 8.1851 15.8073 7.5 14.0006 7.5Z" fill="#759791"></path>
									</svg>
								</div>
								<div class="svg-classname">bell.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg">bell.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/bell.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg">bell.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12.638 4.9936V2.3C12.638 1.5824 13.2484 1 14.0006 1C14.7513 1 15.3631 1.5824 15.3631 2.3V4.9936C17.3879 5.2718 19.2805 6.1688 20.7438 7.565C22.5329 9.2719 23.5384 11.5872 23.5384 14V18.8932L24.6408 20.9966C25.1681 22.0041 25.1122 23.2001 24.4909 24.1582C23.8709 25.1163 22.774 25.7 21.5941 25.7H15.3631C15.3631 26.4176 14.7513 27 14.0006 27C13.2484 27 12.638 26.4176 12.638 25.7H6.40705C5.22571 25.7 4.12888 25.1163 3.50892 24.1582C2.88759 23.2001 2.83172 22.0041 3.36039 20.9966L4.46268 18.8932V14C4.46268 11.5872 5.46691 9.2719 7.25594 7.565C8.72068 6.1688 10.6119 5.2718 12.638 4.9936ZM14.0006 7.5C12.1924 7.5 10.4607 8.1851 9.18259 9.4045C7.90452 10.6226 7.18779 12.2762 7.18779 14V19.2C7.18779 19.4015 7.13739 19.6004 7.04337 19.7811C7.04337 19.7811 6.43703 20.9381 5.79662 22.1588C5.69171 22.3603 5.70261 22.6008 5.82661 22.7919C5.9506 22.983 6.16996 23.1 6.40705 23.1H21.5941C21.8298 23.1 22.0492 22.983 22.1732 22.7919C22.2972 22.6008 22.3081 22.3603 22.2031 22.1588C21.5627 20.9381 20.9564 19.7811 20.9564 19.7811C20.8624 19.6004 20.8133 19.4015 20.8133 19.2V14C20.8133 12.2762 20.0953 10.6226 18.8172 9.4045C17.5391 8.1851 15.8073 7.5 14.0006 7.5Z" fill="#759791"&gt;&lt;/path&gt;
&lt;/svg&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M27 7.88883C27 5.18897 24.6717 3 21.8 3C17.4723 3 10.5277 3 6.2 3C3.3283 3 1 5.18897 1 7.88883V23.7776C1 24.2726 1.31721 24.7174 1.80211 24.9069C2.28831 25.0963 2.8473 24.9912 3.2191 24.6417C3.2191 24.6417 5.74629 22.2657 7.27769 20.8272C7.76519 20.3688 8.42561 20.1109 9.11591 20.1109H21.8C24.6717 20.1109 27 17.922 27 15.2221V7.88883ZM24.4 7.88883C24.4 6.53951 23.2365 5.44441 21.8 5.44441C17.4723 5.44441 10.5277 5.44441 6.2 5.44441C4.7648 5.44441 3.6 6.53951 3.6 7.88883V20.8272L5.4382 19.0989C6.4132 18.1823 7.73661 17.6665 9.11591 17.6665H21.8C23.2365 17.6665 24.4 16.5726 24.4 15.2221V7.88883ZM7.5 15.2221H17.9C18.6176 15.2221 19.2 14.6745 19.2 13.9999C19.2 13.3252 18.6176 12.7777 17.9 12.7777H7.5C6.7824 12.7777 6.2 13.3252 6.2 13.9999C6.2 14.6745 6.7824 15.2221 7.5 15.2221ZM7.5 10.3333H20.5C21.2176 10.3333 21.8 9.7857 21.8 9.11104C21.8 8.43638 21.2176 7.88883 20.5 7.88883H7.5C6.7824 7.88883 6.2 8.43638 6.2 9.11104C6.2 9.7857 6.7824 10.3333 7.5 10.3333Z" fill="#759791"></path>
									</svg>
								</div>
								<div class="svg-classname">message.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-1" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
										<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-1" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-1" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-1">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-1">message.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/message.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-1" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-1">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="svg_inline_label_Brassieresvg-1">message.svg</h5>
											<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
<pre>&lt;svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"&gt; &lt;path d="M3.88552 6.2921C1.95571 6.54135 0.439911 8.19656 0.439911 10.1896V10.7253C0.439911 12.8874 2.21812 14.6725 4.38019 14.6725H12.7058V24.9768H7.01104C5.77451 24.9768 4.82009 24.0223 4.82009 22.7858V18.4039C4.84523 16.6262 2.16581 16.6262 2.19096 18.4039V22.7858C2.19096 25.4334 4.36345 27.6059 7.01104 27.6059H21.0331C23.6807 27.6059 25.8532 25.4334 25.8532 22.7858V13.9981C26.9064 13.286 27.6042 12.0802 27.6042 10.7253V10.1896C27.6042 8.17115 26.0501 6.50077 24.085 6.28526C24.0053 0.424609 17.6008 -1.28785 13.9827 2.48534C10.3936 -1.60185 3.7545 1.06979 3.88552 6.2921ZM12.7058 5.68103C12.7058 5.86287 12.7033 6.0541 12.7058 6.24246H6.50609C6.55988 2.31413 11.988 1.90765 12.7058 5.68103ZM21.4559 6.24246H15.3383C15.3405 6.05824 15.3538 5.87664 15.3383 5.69473C15.9325 2.04532 21.3535 2.18829 21.4559 6.24246ZM4.38019 8.87502H12.7058V12.0382H4.38019C3.62918 12.0382 3.06562 11.4764 3.06562 10.7253V10.1896C3.06562 9.43859 3.6292 8.87502 4.38019 8.87502ZM15.3383 8.87502H23.6656C24.4166 8.87502 24.9785 9.43859 24.9785 10.1896V10.7253C24.9785 11.4764 24.4167 12.0382 23.6656 12.0382H15.3383V8.87502ZM15.3383 14.6725H23.224V22.7858C23.224 24.0223 22.2696 24.9768 21.0331 24.9768H15.3383V14.6725Z" fill="#759791"&gt;&lt;/path&gt; 
&lt;/svg&gt;

</pre>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									 <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M3.88552 6.2921C1.95571 	6.54135 0.439911 8.19656 0.439911 10.1896V10.7253C0.439911 12.8874 2.21812 14.6725 4.38019 14.6725H12.7058V24.9768H7.01104C5.77451 24.9768 4.82009 24.0223 4.82009 22.7858V18.4039C4.84523 16.6262 2.16581 16.6262 2.19096 18.4039V22.7858C2.19096 25.4334 4.36345 27.6059 7.01104 27.6059H21.0331C23.6807 27.6059 25.8532 25.4334 25.8532 22.7858V13.9981C26.9064 13.286 27.6042 12.0802 27.6042 10.7253V10.1896C27.6042 8.17115 26.0501 6.50077 24.085 6.28526C24.0053 0.424609 17.6008 -1.28785 13.9827 2.48534C10.3936 -1.60185 3.7545 1.06979 3.88552 6.2921ZM12.7058 5.68103C12.7058 5.86287 12.7033 6.0541 12.7058 6.24246H6.50609C6.55988 2.31413 11.988 1.90765 12.7058 5.68103ZM21.4559 6.24246H15.3383C15.3405 6.05824 15.3538 5.87664 15.3383 5.69473C15.9325 2.04532 21.3535 2.18829 21.4559 6.24246ZM4.38019 8.87502H12.7058V12.0382H4.38019C3.62918 12.0382 3.06562 11.4764 3.06562 10.7253V10.1896C3.06562 9.43859 3.6292 8.87502 4.38019 8.87502ZM15.3383 8.87502H23.6656C24.4166 8.87502 24.9785 9.43859 24.9785 10.1896V10.7253C24.9785 11.4764 24.4167 12.0382 23.6656 12.0382H15.3383V8.87502ZM15.3383 14.6725H23.224V22.7858C23.224 24.0223 22.2696 24.9768 21.0331 24.9768H15.3383V14.6725Z" fill="#759791"></path> 
									</svg>
								</div>
								<div class="svg-classname">gift.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-2" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-2" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-2" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-2">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-2">flaticon-bar-chart-1</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/gift.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-2" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-2">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="svg_inline_label_Brassieresvg-2">gift.svg</h5>
											<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
<pre>&lt;svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"&gt; &lt;path d="M3.88552 6.2921C1.95571 6.54135 0.439911 8.19656 0.439911 10.1896V10.7253C0.439911 12.8874 2.21812 14.6725 4.38019 14.6725H12.7058V24.9768H7.01104C5.77451 24.9768 4.82009 24.0223 4.82009 22.7858V18.4039C4.84523 16.6262 2.16581 16.6262 2.19096 18.4039V22.7858C2.19096 25.4334 4.36345 27.6059 7.01104 27.6059H21.0331C23.6807 27.6059 25.8532 25.4334 25.8532 22.7858V13.9981C26.9064 13.286 27.6042 12.0802 27.6042 10.7253V10.1896C27.6042 8.17115 26.0501 6.50077 24.085 6.28526C24.0053 0.424609 17.6008 -1.28785 13.9827 2.48534C10.3936 -1.60185 3.7545 1.06979 3.88552 6.2921ZM12.7058 5.68103C12.7058 5.86287 12.7033 6.0541 12.7058 6.24246H6.50609C6.55988 2.31413 11.988 1.90765 12.7058 5.68103ZM21.4559 6.24246H15.3383C15.3405 6.05824 15.3538 5.87664 15.3383 5.69473C15.9325 2.04532 21.3535 2.18829 21.4559 6.24246ZM4.38019 8.87502H12.7058V12.0382H4.38019C3.62918 12.0382 3.06562 11.4764 3.06562 10.7253V10.1896C3.06562 9.43859 3.6292 8.87502 4.38019 8.87502ZM15.3383 8.87502H23.6656C24.4166 8.87502 24.9785 9.43859 24.9785 10.1896V10.7253C24.9785 11.4764 24.4167 12.0382 23.6656 12.0382H15.3383V8.87502ZM15.3383 14.6725H23.224V22.7858C23.224 24.0223 22.2696 24.9768 21.0331 24.9768H15.3383V14.6725Z" fill="#759791"&gt;&lt;/path&gt; 
&lt;/svg&gt;

</pre>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
								<svg class="ms-2 primary-icon" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#0E8A74"></path>
								</svg>
								</div>
								<div class="svg-classname">up.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-23" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
								<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-23" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-23" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-23">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-23">up.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/up.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-23" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-23">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-23">up.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg class="ms-2 primary-icon" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M2.00401 11.1924C0.222201 11.1924 -0.670134 9.0381 0.589795 7.77817L7.78218 0.585786C8.56323 -0.195262 9.82956 -0.195262 10.6106 0.585786L17.803 7.77817C19.0629 9.0381 18.1706 11.1924 16.3888 11.1924H2.00401Z" fill="#0E8A74"&gt;&lt;/path&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg class="ms-2" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.00401 -4.76837e-06C0.222201 -4.76837e-06 -0.670134 2.15428 0.589795 3.41421L7.78218 10.6066C8.56323 11.3876 9.82956 11.3876 10.6106 10.6066L17.803 3.41421C19.0629 2.15428 18.1706 -4.76837e-06 16.3888 -4.76837e-06H2.00401Z" fill="#FF3131"></path>
									</svg>
								
								</div>
								<div class="svg-classname">down.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-24" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-24" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-24" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-24">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-24">down.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/down.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-24" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-24">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="svg_inline_label_Brassieresvg-24">down.svg</h5>
											<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
											<pre>&lt;svg class="ms-2" width="19" height="12" viewBox="0 0 19 12" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M2.00401 -4.76837e-06C0.222201 -4.76837e-06 -0.670134 2.15428 0.589795 3.41421L7.78218 10.6066C8.56323 11.3876 9.82956 11.3876 10.6106 10.6066L17.803 3.41421C19.0629 2.15428 18.1706 -4.76837e-06 16.3888 -4.76837e-06H2.00401Z" fill="#FF3131"&gt;&lt;/path&gt;
&lt;/svg&gt;

</pre>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
								<svg width="25" height="26" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
									<rect width="3.54545" height="26" rx="1.77273" transform="matrix(-1 0 0 1 24.8181 0)" fill="#0e8a74"></rect>
									<rect width="3.54545" height="18.9091" rx="1.77273" transform="matrix(-1 0 0 1 17.7272 7.09088)" fill="#0e8a74"></rect>
									<rect width="3.54545" height="8.27273" rx="1.77273" transform="matrix(-1 0 0 1 10.6362 17.7273)" fill="#0e8a74"></rect>
									<rect width="4" height="16" rx="2" transform="matrix(-1 0 0 1 4 10)" fill="#0e8a74"></rect>
								</svg>
								</div>
								<div class="svg-classname">grph.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-25" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-25" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-25" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-25">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-25">grph.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
													<pre>&lt;img src="{{ asset('images/iconly/bulk/grph.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-25" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-25">
								<div class="modal-dialog modal-dialog-centered" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="svg_inline_label_Brassieresvg-25">grph.svg</h5>
											<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
											</button>
										</div>
										<div class="modal-body">
<pre>&lt;svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg"&gt; &lt;path d="M3.88552 6.2921C1.95571 6.54135 0.439911 8.19656 0.439911 10.1896V10.7253C0.439911 12.8874 2.21812 14.6725 4.38019 14.6725H12.7058V24.9768H7.01104C5.77451 24.9768 4.82009 24.0223 4.82009 22.7858V18.4039C4.84523 16.6262 2.16581 16.6262 2.19096 18.4039V22.7858C2.19096 25.4334 4.36345 27.6059 7.01104 27.6059H21.0331C23.6807 27.6059 25.8532 25.4334 25.8532 22.7858V13.9981C26.9064 13.286 27.6042 12.0802 27.6042 10.7253V10.1896C27.6042 8.17115 26.0501 6.50077 24.085 6.28526C24.0053 0.424609 17.6008 -1.28785 13.9827 2.48534C10.3936 -1.60185 3.7545 1.06979 3.88552 6.2921ZM12.7058 5.68103C12.7058 5.86287 12.7033 6.0541 12.7058 6.24246H6.50609C6.55988 2.31413 11.988 1.90765 12.7058 5.68103ZM21.4559 6.24246H15.3383C15.3405 6.05824 15.3538 5.87664 15.3383 5.69473C15.9325 2.04532 21.3535 2.18829 21.4559 6.24246ZM4.38019 8.87502H12.7058V12.0382H4.38019C3.62918 12.0382 3.06562 11.4764 3.06562 10.7253V10.1896C3.06562 9.43859 3.6292 8.87502 4.38019 8.87502ZM15.3383 8.87502H23.6656C24.4166 8.87502 24.9785 9.43859 24.9785 10.1896V10.7253C24.9785 11.4764 24.4167 12.0382 23.6656 12.0382H15.3383V8.87502ZM15.3383 14.6725H23.224V22.7858C23.224 24.0223 22.2696 24.9768 21.0331 24.9768H15.3383V14.6725Z" fill="#759791"&gt;&lt;/path&gt; 
&lt;/svg&gt;
</pre>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M29.3124 0.990819C30.1459 1.71561 30.234 2.97887 29.5092 3.81239L20.7578 13.8765C19.359 15.4851 16.9444 15.7141 15.2681 14.397L11.1176 11.1359L3.87074 17.9564C3.06639 18.7135 1.80064 18.6751 1.04361 17.8708C0.286573 17.0664 0.324929 15.8007 1.12928 15.0436L8.3761 8.22309C9.817 6.86695 12.0329 6.76812 13.5888 7.99062L17.7394 11.2518L26.4908 1.18767C27.2156 0.354158 28.4788 0.266024 29.3124 0.990819Z" fill="#FB3E7A"></path>
									</svg>
								</div>
								<div class="svg-classname">progess.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-26" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-26" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-26" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-26">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-26">progess.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/progess.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-26" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-26">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-26">progess.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg width="30" height="19" viewBox="0 0 30 19" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M29.3124 0.990819C30.1459 1.71561 30.234 2.97887 29.5092 3.81239L20.7578 13.8765C19.359 15.4851 16.9444 15.7141 15.2681 14.397L11.1176 11.1359L3.87074 17.9564C3.06639 18.7135 1.80064 18.6751 1.04361 17.8708C0.286573 17.0664 0.324929 15.8007 1.12928 15.0436L8.3761 8.22309C9.817 6.86695 12.0329 6.76812 13.5888 7.99062L17.7394 11.2518L26.4908 1.18767C27.2156 0.354158 28.4788 0.266024 29.3124 0.990819Z" fill="#FB3E7A"&gt;&lt;/path&gt;
&lt;/svg&gt;

	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#C8C8C8"></path>
										<path fill-rule="evenodd" clip-rule="evenodd" d="M15.9999 0.686289C14.7205 0.233951 13.3682 0 11.9999 0V3.93696C13.4442 3.93696 14.8619 4.32489 16.105 5.06021C17.3481 5.79553 18.3708 6.85124 19.0664 8.117C19.7619 9.38277 20.1047 10.8121 20.0589 12.2557C20.0131 13.6992 19.5804 15.104 18.806 16.3231C18.0317 17.5422 16.9441 18.531 15.6569 19.186C14.3697 19.8411 12.9302 20.1384 11.4888 20.0468C10.0475 19.9553 8.65715 19.4783 7.46319 18.6656C6.26922 17.853 5.31544 16.7346 4.70154 15.4273L1.13794 17.1007C1.71955 18.3393 2.50612 19.4639 3.45939 20.4297C4.00364 20.9811 4.60223 21.4807 5.24803 21.9203C7.02498 23.1297 9.09416 23.8396 11.2393 23.9759C13.3845 24.1121 15.5268 23.6697 17.4425 22.6948C19.3582 21.7199 20.9768 20.2483 22.1293 18.4339C23.2818 16.6195 23.9257 14.5289 23.9939 12.3805C24.062 10.2321 23.5519 8.10484 22.5167 6.22104C21.4816 4.33724 19.9595 2.76605 18.1094 1.6717C17.4371 1.27398 16.7304 0.944541 15.9999 0.686289Z" fill="#FB3E7A"></path>
									</svg>
								</div>
								<div class="svg-classname">circle.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-27" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-27" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
									
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-27" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-27">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-27">circle.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/circle.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-27" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-27">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-27">circle.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M12 20C16.4183 20 20 16.4183 20 12C20 7.58172 16.4183 4 12 4C7.58172 4 4 7.58172 4 12C4 16.4183 7.58172 20 12 20ZM12 24C18.6274 24 24 18.6274 24 12C24 5.37258 18.6274 0 12 0C5.37258 0 0 5.37258 0 12C0 18.6274 5.37258 24 12 24Z" fill="#C8C8C8"&gt;&lt;/path&gt;
&lt;path fill-rule="evenodd" clip-rule="evenodd" d="M15.9999 0.686289C14.7205 0.233951 13.3682 0 11.9999 0V3.93696C13.4442 3.93696 14.8619 4.32489 16.105 5.06021C17.3481 5.79553 18.3708 6.85124 19.0664 8.117C19.7619 9.38277 20.1047 10.8121 20.0589 12.2557C20.0131 13.6992 19.5804 15.104 18.806 16.3231C18.0317 17.5422 16.9441 18.531 15.6569 19.186C14.3697 19.8411 12.9302 20.1384 11.4888 20.0468C10.0475 19.9553 8.65715 19.4783 7.46319 18.6656C6.26922 17.853 5.31544 16.7346 4.70154 15.4273L1.13794 17.1007C1.71955 18.3393 2.50612 19.4639 3.45939 20.4297C4.00364 20.9811 4.60223 21.4807 5.24803 21.9203C7.02498 23.1297 9.09416 23.8396 11.2393 23.9759C13.3845 24.1121 15.5268 23.6697 17.4425 22.6948C19.3582 21.7199 20.9768 20.2483 22.1293 18.4339C23.2818 16.6195 23.9257 14.5289 23.9939 12.3805C24.062 10.2321 23.5519 8.10484 22.5167 6.22104C21.4816 4.33724 19.9595 2.76605 18.1094 1.6717C17.4371 1.27398 16.7304 0.944541 15.9999 0.686289Z" fill="#FB3E7A"&gt;&lt;/path&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>	
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
								<svg class="me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M0.648712 9.33093V14.3327C0.648712 15.2524 1.39698 16 2.31597 16H14.3203C15.24 16 15.9875 15.2524 15.9875 14.3327V9.33093H0.648712Z" fill="white"></path>
										<path d="M7.89532 1.52481L5.39974 2.11702L7.49049 5.19347L10.1935 4.5786L7.89532 1.52481Z" fill="white"></path>
										<path d="M4.70618 2.28177L2.01652 2.91931L4.08526 5.9671L6.79224 5.35153L4.70618 2.28177Z" fill="white"></path>
										<path d="M15.9769 2.90997L15.4093 0.757192C15.2786 0.23366 14.7424 -0.0957707 14.2136 0.0249289L11.9728 0.55712L14.0989 3.69159L15.7281 3.3208C15.8168 3.30079 15.8928 3.24543 15.9395 3.16809C15.9862 3.09075 15.9996 2.998 15.9769 2.90997Z" fill="white"></path>
										<path d="M11.2785 0.721863L8.60357 1.35675L10.9057 4.41719L13.4006 3.84964L11.2785 0.721863Z" fill="white"></path>
										<path d="M4.00924 5.99707L2.9422 8.66404H5.55849L6.62553 5.99707H4.00924Z" fill="white"></path>
										<path d="M7.34378 5.99707L6.27674 8.66404H8.89299L9.96006 5.99707H7.34378Z" fill="white"></path>
										<path d="M15.6541 5.99707H14.0129L12.9458 8.66469H15.9876V6.3305C15.9875 6.14578 15.8388 5.99707 15.6541 5.99707Z" fill="white"></path>
										<path d="M10.6783 5.99707L9.61125 8.66404H12.2269L13.2946 5.99707H10.6783Z" fill="white"></path>
										<path d="M1.32296 3.08472L0.779418 3.21342C0.514667 3.27344 0.290587 3.43416 0.148536 3.66493C0.00648451 3.89635 -0.0355306 4.16845 0.0304931 4.43186L0.648715 6.8754V8.66404H2.22394L3.22495 6.16248L3.38767 6.12581L1.32296 3.08472Z" fill="white"></path>
									</svg>
								</div>
								<div class="svg-classname">movie.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-28" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-28" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-28" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-28">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-28">movie.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/movie.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-28" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-28">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-28">movie.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg class="me-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M0.648712 9.33093V14.3327C0.648712 15.2524 1.39698 16 2.31597 16H14.3203C15.24 16 15.9875 15.2524 15.9875 14.3327V9.33093H0.648712Z" fill="white"&gt;&lt;/path&gt;
&lt;path d="M7.89532 1.52481L5.39974 2.11702L7.49049 5.19347L10.1935 4.5786L7.89532 1.52481Z" fill="white"&gt;&lt;/path&gt;
&lt;path d="M4.70618 2.28177L2.01652 2.91931L4.08526 5.9671L6.79224 5.35153L4.70618 2.28177Z" fill="white"&gt;&lt;/path&gt;
&lt;path d="M15.9769 2.90997L15.4093 0.757192C15.2786 0.23366 14.7424 -0.0957707 14.2136 0.0249289L11.9728 0.55712L14.0989 3.69159L15.7281 3.3208C15.8168 3.30079 15.8928 3.24543 15.9395 3.16809C15.9862 3.09075 15.9996 2.998 15.9769 2.90997Z" fill="white"&gt;&lt;/path&gt;
&lt;path d="M11.2785 0.721863L8.60357 1.35675L10.9057 4.41719L13.4006 3.84964L11.2785 0.721863Z" fill="white"&gt;&lt;/path&gt;
&lt;path d="M4.00924 5.99707L2.9422 8.66404H5.55849L6.62553 5.99707H4.00924Z" fill="white"&gt;&lt;/path&gt;
&lt;path d="M7.34378 5.99707L6.27674 8.66404H8.89299L9.96006 5.99707H7.34378Z" fill="white"&gt;&lt;/path&gt;
&lt;path d="M15.6541 5.99707H14.0129L12.9458 8.66469H15.9876V6.3305C15.9875 6.14578 15.8388 5.99707 15.6541 5.99707Z" fill="white"&gt;&lt;/path&gt;
&lt;path d="M10.6783 5.99707L9.61125 8.66404H12.2269L13.2946 5.99707H10.6783Z" fill="white"&gt;&lt;/path&gt;
&lt;path d="M1.32296 3.08472L0.779418 3.21342C0.514667 3.27344 0.290587 3.43416 0.148536 3.66493C0.00648451 3.89635 -0.0355306 4.16845 0.0304931 4.43186L0.648715 6.8754V8.66404H2.22394L3.22495 6.16248L3.38767 6.12581L1.32296 3.08472Z" fill="white"&gt;&lt;/path&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
								<svg class="dolor" width="32" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M6.07438 25H7.95454V22.6464C11.8595 22.302 14 19.6039 14 16.8197C14 12.7727 10.8471 11.9977 7.95454 11.3088V5.10907C9.34297 5.4535 10.1529 6.5155 10.2686 7.66361H13.7975C13.5372 4.42021 11.281 2.61194 7.95454 2.32492V0H6.07438V2.35362C2.4876 2.66935 0 4.87945 0 8.09415C0 12.1412 3.18182 12.9449 6.07438 13.6625V19.977C4.45455 19.69 3.64463 18.628 3.52893 17.1929H0C0 20.4363 2.54545 22.3594 6.07438 22.6751V25ZM10.6736 16.992C10.6736 18.4845 9.69008 19.69 7.95454 19.977V14.1504C9.51653 14.6383 10.6736 15.3559 10.6736 16.992ZM3.35537 7.92193C3.35537 6.17107 4.48347 5.22388 6.07438 5.02296V10.8209C4.5124 10.333 3.35537 9.58668 3.35537 7.92193Z" fill="#194039"></path>
										</svg>
								</div>
								<div class="svg-classname">doller.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-29" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-29" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-29" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-29">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-29">doller.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/doller.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-29" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-29">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-29">doller.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg class="me-4 dolor" width="32" height="25" viewBox="0 0 14 25" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M6.07438 25H7.95454V22.6464C11.8595 22.302 14 19.6039 14 16.8197C14 12.7727 10.8471 11.9977 7.95454 11.3088V5.10907C9.34297 5.4535 10.1529 6.5155 10.2686 7.66361H13.7975C13.5372 4.42021 11.281 2.61194 7.95454 2.32492V0H6.07438V2.35362C2.4876 2.66935 0 4.87945 0 8.09415C0 12.1412 3.18182 12.9449 6.07438 13.6625V19.977C4.45455 19.69 3.64463 18.628 3.52893 17.1929H0C0 20.4363 2.54545 22.3594 6.07438 22.6751V25ZM10.6736 16.992C10.6736 18.4845 9.69008 19.69 7.95454 19.977V14.1504C9.51653 14.6383 10.6736 15.3559 10.6736 16.992ZM3.35537 7.92193C3.35537 6.17107 4.48347 5.22388 6.07438 5.02296V10.8209C4.5124 10.333 3.35537 9.58668 3.35537 7.92193Z" fill="#194039"&gt;&lt;/path&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
								<svg width="32" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
										<path d="M21 3H20C20 2.20435 19.6839 1.44129 19.1213 0.87868C18.5587 0.31607 17.7956 0 17 0C16.2044 0 15.4413 0.31607 14.8787 0.87868C14.3161 1.44129 14 2.20435 14 3H10C10 2.20435 9.68393 1.44129 9.12132 0.87868C8.55871 0.316071 7.79565 4.47035e-08 7 4.47035e-08C6.20435 4.47035e-08 5.44129 0.316071 4.87868 0.87868C4.31607 1.44129 4 2.20435 4 3H3C2.20435 3 1.44129 3.31607 0.87868 3.87868C0.31607 4.44129 0 5.20435 0 6L0 21C0 21.7956 0.31607 22.5587 0.87868 23.1213C1.44129 23.6839 2.20435 24 3 24H21C21.7956 24 22.5587 23.6839 23.1213 23.1213C23.6839 22.5587 24 21.7956 24 21V6C24 5.20435 23.6839 4.44129 23.1213 3.87868C22.5587 3.31607 21.7956 3 21 3ZM3 5H4C4 5.79565 4.31607 6.55871 4.87868 7.12132C5.44129 7.68393 6.20435 8 7 8C7.26522 8 7.51957 7.89464 7.70711 7.70711C7.89464 7.51957 8 7.26522 8 7C8 6.73478 7.89464 6.48043 7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 5.89464 6.29289 5.70711C6.10536 5.51957 6 5.26522 6 5V3C6 2.73478 6.10536 2.48043 6.29289 2.29289C6.48043 2.10536 6.73478 2 7 2C7.26522 2 7.51957 2.10536 7.70711 2.29289C7.89464 2.48043 8 2.73478 8 3V4C8 4.26522 8.10536 4.51957 8.29289 4.70711C8.48043 4.89464 8.73478 5 9 5H14C14 5.79565 14.3161 6.55871 14.8787 7.12132C15.4413 7.68393 16.2044 8 17 8C17.2652 8 17.5196 7.89464 17.7071 7.70711C17.8946 7.51957 18 7.26522 18 7C18 6.73478 17.8946 6.48043 17.7071 6.29289C17.5196 6.10536 17.2652 6 17 6C16.7348 6 16.4804 5.89464 16.2929 5.70711C16.1054 5.51957 16 5.26522 16 5V3C16 2.73478 16.1054 2.48043 16.2929 2.29289C16.4804 2.10536 16.7348 2 17 2C17.2652 2 17.5196 2.10536 17.7071 2.29289C17.8946 2.48043 18 2.73478 18 3V4C18 4.26522 18.1054 4.51957 18.2929 4.70711C18.4804 4.89464 18.7348 5 19 5H21C21.2652 5 21.5196 5.10536 21.7071 5.29289C21.8946 5.48043 22 5.73478 22 6V10H2V6C2 5.73478 2.10536 5.48043 2.29289 5.29289C2.48043 5.10536 2.73478 5 3 5ZM21 22H3C2.73478 22 2.48043 21.8946 2.29289 21.7071C2.10536 21.5196 2 21.2652 2 21V12H22V21C22 21.2652 21.8946 21.5196 21.7071 21.7071C21.5196 21.8946 21.2652 22 21 22Z" fill="#194039"></path>
										<path d="M12 16C12.5523 16 13 15.5523 13 15C13 14.4477 12.5523 14 12 14C11.4477 14 11 14.4477 11 15C11 15.5523 11.4477 16 12 16Z" fill="#194039"></path>
										<path d="M18 16C18.5523 16 19 15.5523 19 15C19 14.4477 18.5523 14 18 14C17.4477 14 17 14.4477 17 15C17 15.5523 17.4477 16 18 16Z" fill="#194039"></path>
										<path d="M6 16C6.55228 16 7 15.5523 7 15C7 14.4477 6.55228 14 6 14C5.44771 14 5 14.4477 5 15C5 15.5523 5.44771 16 6 16Z" fill="#194039"></path>
										<path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" fill="#194039"></path>
										<path d="M18 20C18.5523 20 19 19.5523 19 19C19 18.4477 18.5523 18 18 18C17.4477 18 17 18.4477 17 19C17 19.5523 17.4477 20 18 20Z" fill="#194039"></path>
										<path d="M6 20C6.55228 20 7 19.5523 7 19C7 18.4477 6.55228 18 6 18C5.44771 18 5 18.4477 5 19C5 19.5523 5.44771 20 6 20Z" fill="#194039"></path>
										</g>
										<defs>
										<clipPath id="clip0">
										<rect width="24" height="24" fill="white"></rect>
										</clipPath>
										</defs>
									</svg>
								</div>
								<div class="svg-classname">calendar.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-30" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-30" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-30" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-30">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-30">calendar.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/calendar.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-30" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-30">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-30">calendar.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
<pre>&lt;svg class="me-4 calendar" width="32" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;g clip-path="url(#clip0)"&gt;
&lt;path d="M21 3H20C20 2.20435 19.6839 1.44129 19.1213 0.87868C18.5587 0.31607 17.7956 0 17 0C16.2044 0 15.4413 0.31607 14.8787 0.87868C14.3161 1.44129 14 2.20435 14 3H10C10 2.20435 9.68393 1.44129 9.12132 0.87868C8.55871 0.316071 7.79565 4.47035e-08 7 4.47035e-08C6.20435 4.47035e-08 5.44129 0.316071 4.87868 0.87868C4.31607 1.44129 4 2.20435 4 3H3C2.20435 3 1.44129 3.31607 0.87868 3.87868C0.31607 4.44129 0 5.20435 0 6L0 21C0 21.7956 0.31607 22.5587 0.87868 23.1213C1.44129 23.6839 2.20435 24 3 24H21C21.7956 24 22.5587 23.6839 23.1213 23.1213C23.6839 22.5587 24 21.7956 24 21V6C24 5.20435 23.6839 4.44129 23.1213 3.87868C22.5587 3.31607 21.7956 3 21 3ZM3 5H4C4 5.79565 4.31607 6.55871 4.87868 7.12132C5.44129 7.68393 6.20435 8 7 8C7.26522 8 7.51957 7.89464 7.70711 7.70711C7.89464 7.51957 8 7.26522 8 7C8 6.73478 7.89464 6.48043 7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 5.89464 6.29289 5.70711C6.10536 5.51957 6 5.26522 6 5V3C6 2.73478 6.10536 2.48043 6.29289 2.29289C6.48043 2.10536 6.73478 2 7 2C7.26522 2 7.51957 2.10536 7.70711 2.29289C7.89464 2.48043 8 2.73478 8 3V4C8 4.26522 8.10536 4.51957 8.29289 4.70711C8.48043 4.89464 8.73478 5 9 5H14C14 5.79565 14.3161 6.55871 14.8787 7.12132C15.4413 7.68393 16.2044 8 17 8C17.2652 8 17.5196 7.89464 17.7071 7.70711C17.8946 7.51957 18 7.26522 18 7C18 6.73478 17.8946 6.48043 17.7071 6.29289C17.5196 6.10536 17.2652 6 17 6C16.7348 6 16.4804 5.89464 16.2929 5.70711C16.1054 5.51957 16 5.26522 16 5V3C16 2.73478 16.1054 2.48043 16.2929 2.29289C16.4804 2.10536 16.7348 2 17 2C17.2652 2 17.5196 2.10536 17.7071 2.29289C17.8946 2.48043 18 2.73478 18 3V4C18 4.26522 18.1054 4.51957 18.2929 4.70711C18.4804 4.89464 18.7348 5 19 5H21C21.2652 5 21.5196 5.10536 21.7071 5.29289C21.8946 5.48043 22 5.73478 22 6V10H2V6C2 5.73478 2.10536 5.48043 2.29289 5.29289C2.48043 5.10536 2.73478 5 3 5ZM21 22H3C2.73478 22 2.48043 21.8946 2.29289 21.7071C2.10536 21.5196 2 21.2652 2 21V12H22V21C22 21.2652 21.8946 21.5196 21.7071 21.7071C21.5196 21.8946 21.2652 22 21 22Z" fill="#194039"&gt;&lt;/path&gt;
&lt;path d="M12 16C12.5523 16 13 15.5523 13 15C13 14.4477 12.5523 14 12 14C11.4477 14 11 14.4477 11 15C11 15.5523 11.4477 16 12 16Z" fill="#194039"&gt;&lt;/path&gt;
&lt;path d="M18 16C18.5523 16 19 15.5523 19 15C19 14.4477 18.5523 14 18 14C17.4477 14 17 14.4477 17 15C17 15.5523 17.4477 16 18 16Z" fill="#194039"&gt;&lt;/path&gt;
&lt;path d="M6 16C6.55228 16 7 15.5523 7 15C7 14.4477 6.55228 14 6 14C5.44771 14 5 14.4477 5 15C5 15.5523 5.44771 16 6 16Z" fill="#194039"&gt;&lt;/path&gt;
&lt;path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" fill="#194039"&gt;&lt;/path&gt;
&lt;path d="M18 20C18.5523 20 19 19.5523 19 19C19 18.4477 18.5523 18 18 18C17.4477 18 17 18.4477 17 19C17 19.5523 17.4477 20 18 20Z" fill="#194039"&gt;&lt;/path&gt;
&lt;path d="M6 20C6.55228 20 7 19.5523 7 19C7 18.4477 6.55228 18 6 18C5.44771 18 5 18.4477 5 19C5 19.5523 5.44771 20 6 20Z" fill="#194039"&gt;&lt;/path&gt;
&lt;/g&gt;
&lt;defs&gt;
&lt;clipPath id="clip0"&gt;
&lt;rect width="24" height="24" fill="white"&gt;&lt;/rect&gt;
&lt;/clipPath&gt;
&lt;/defs&gt;
&lt;/svg&gt;

	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg  width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
											<g clip-path="">
											<path d="M27.5711 13.4286C27.5711 22.4286 15.9997 30.1428 15.9997 30.1428C15.9997 30.1428 4.42822 22.4286 4.42822 13.4286C4.42822 10.3596 5.64735 7.41638 7.81742 5.24632C9.98748 3.07625 12.9307 1.85712 15.9997 1.85712C19.0686 1.85712 22.0118 3.07625 24.1819 5.24632C26.3519 7.41638 27.5711 10.3596 27.5711 13.4286Z" stroke="#194039" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
											<path d="M15.9997 17.2857C18.13 17.2857 19.8569 15.5588 19.8569 13.4286C19.8569 11.2983 18.13 9.57141 15.9997 9.57141C13.8695 9.57141 12.1426 11.2983 12.1426 13.4286C12.1426 15.5588 13.8695 17.2857 15.9997 17.2857Z" stroke="#194039" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"></path>
											</g>
											<defs>
											<clipPath id="clip1">
											<rect width="30.8571" height="30.8571" fill="white" transform="translate(0.571289 0.571411)"></rect>
											</clipPath>
											</defs>
										</svg>
								</div>
								<div class="svg-classname">location.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-31" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-31" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-31" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-31">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-31">location.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/location.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-31" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-31">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-31">location.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg class="location" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;g clip-path=""&gt;
&lt;path d="M27.5711 13.4286C27.5711 22.4286 15.9997 30.1428 15.9997 30.1428C15.9997 30.1428 4.42822 22.4286 4.42822 13.4286C4.42822 10.3596 5.64735 7.41638 7.81742 5.24632C9.98748 3.07625 12.9307 1.85712 15.9997 1.85712C19.0686 1.85712 22.0118 3.07625 24.1819 5.24632C26.3519 7.41638 27.5711 10.3596 27.5711 13.4286Z" stroke="#194039" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;/path&gt;
&lt;path d="M15.9997 17.2857C18.13 17.2857 19.8569 15.5588 19.8569 13.4286C19.8569 11.2983 18.13 9.57141 15.9997 9.57141C13.8695 9.57141 12.1426 11.2983 12.1426 13.4286C12.1426 15.5588 13.8695 17.2857 15.9997 17.2857Z" stroke="#194039" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;/path&gt;
&lt;/g&gt;
&lt;defs&gt;
&lt;clipPath id="clip1"&gt;
&lt;rect width="30.8571" height="30.8571" fill="white" transform="translate(0.571289 0.571411)"&gt;&lt;/rect&gt;
&lt;/clipPath&gt;
&lt;/defs&gt;
&lt;/svg&gt;

	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg class="me-2 user-ico mb-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0)">
										<path d="M21 24H3C2.73478 24 2.48043 23.8946 2.29289 23.7071C2.10536 23.5196 2 23.2652 2 23V22.008C2.00287 20.4622 2.52021 18.9613 3.47044 17.742C4.42066 16.5227 5.74971 15.6544 7.248 15.274C7.46045 15.2219 7.64959 15.1008 7.78571 14.9296C7.92182 14.7583 7.9972 14.5467 8 14.328V13.322L6.883 12.206C6.6032 11.9313 6.38099 11.6036 6.22937 11.2419C6.07776 10.8803 5.99978 10.4921 6 10.1V5.96201C6.01833 4.41693 6.62821 2.93765 7.70414 1.82861C8.78007 0.719572 10.2402 0.0651427 11.784 5.16174e-06C12.5992 -0.00104609 13.4067 0.158488 14.1603 0.469498C14.9139 0.780509 15.5989 1.2369 16.1761 1.81263C16.7533 2.38835 17.2114 3.07213 17.5244 3.82491C17.8373 4.5777 17.999 5.38476 18 6.20001V10.1C17.9997 10.4949 17.9204 10.8857 17.7666 11.2495C17.6129 11.6132 17.388 11.9426 17.105 12.218L16 13.322V14.328C16.0029 14.5469 16.0784 14.7586 16.2147 14.9298C16.351 15.1011 16.5404 15.2221 16.753 15.274C18.251 15.6548 19.5797 16.5232 20.5298 17.7424C21.4798 18.9617 21.997 20.4624 22 22.008V23C22 23.2652 21.8946 23.5196 21.7071 23.7071C21.5196 23.8946 21.2652 24 21 24ZM4 22H20C19.9954 20.8996 19.6249 19.8319 18.9469 18.9651C18.2689 18.0983 17.3219 17.4816 16.255 17.212C15.6125 17.0494 15.0423 16.6779 14.6341 16.1558C14.2259 15.6337 14.0028 14.9907 14 14.328V12.908C14.0001 12.6428 14.1055 12.3885 14.293 12.201L15.703 10.792C15.7965 10.7026 15.8711 10.5952 15.9221 10.4763C15.9731 10.3574 15.9996 10.2294 16 10.1V6.20001C16.0017 5.09492 15.5671 4.03383 14.7907 3.24737C14.0144 2.46092 12.959 2.01265 11.854 2.00001C10.8264 2.04117 9.85379 2.47507 9.1367 3.21225C8.41962 3.94943 8.01275 4.93367 8 5.96201V10.1C7.99979 10.2266 8.0249 10.352 8.07384 10.4688C8.12278 10.5856 8.19458 10.6914 8.285 10.78L9.707 12.2C9.89455 12.3875 9.99994 12.6418 10 12.907V14.327C9.99724 14.9896 9.77432 15.6325 9.3663 16.1545C8.95827 16.6766 8.3883 17.0482 7.746 17.211C6.67872 17.4804 5.73137 18.0972 5.05318 18.9642C4.37498 19.8313 4.00447 20.8993 4 22Z" fill="#000"></path>
										</g>
										<defs>
										<clipPath id="clip1000">
										<rect width="24" height="24" fill="white"></rect>
										</clipPath>
										</defs>
									</svg>
								</div>
								<div class="svg-classname">user.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-32" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-32" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-32" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-32">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-32">user.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/user.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-32" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-32">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-32">user.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
	<pre>&lt;svg class="me-2 user-ico mb-1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;g clip-path="url(#clip0)"&gt;
&lt;path d="M21 24H3C2.73478 24 2.48043 23.8946 2.29289 23.7071C2.10536 23.5196 2 23.2652 2 23V22.008C2.00287 20.4622 2.52021 18.9613 3.47044 17.742C4.42066 16.5227 5.74971 15.6544 7.248 15.274C7.46045 15.2219 7.64959 15.1008 7.78571 14.9296C7.92182 14.7583 7.9972 14.5467 8 14.328V13.322L6.883 12.206C6.6032 11.9313 6.38099 11.6036 6.22937 11.2419C6.07776 10.8803 5.99978 10.4921 6 10.1V5.96201C6.01833 4.41693 6.62821 2.93765 7.70414 1.82861C8.78007 0.719572 10.2402 0.0651427 11.784 5.16174e-06C12.5992 -0.00104609 13.4067 0.158488 14.1603 0.469498C14.9139 0.780509 15.5989 1.2369 16.1761 1.81263C16.7533 2.38835 17.2114 3.07213 17.5244 3.82491C17.8373 4.5777 17.999 5.38476 18 6.20001V10.1C17.9997 10.4949 17.9204 10.8857 17.7666 11.2495C17.6129 11.6132 17.388 11.9426 17.105 12.218L16 13.322V14.328C16.0029 14.5469 16.0784 14.7586 16.2147 14.9298C16.351 15.1011 16.5404 15.2221 16.753 15.274C18.251 15.6548 19.5797 16.5232 20.5298 17.7424C21.4798 18.9617 21.997 20.4624 22 22.008V23C22 23.2652 21.8946 23.5196 21.7071 23.7071C21.5196 23.8946 21.2652 24 21 24ZM4 22H20C19.9954 20.8996 19.6249 19.8319 18.9469 18.9651C18.2689 18.0983 17.3219 17.4816 16.255 17.212C15.6125 17.0494 15.0423 16.6779 14.6341 16.1558C14.2259 15.6337 14.0028 14.9907 14 14.328V12.908C14.0001 12.6428 14.1055 12.3885 14.293 12.201L15.703 10.792C15.7965 10.7026 15.8711 10.5952 15.9221 10.4763C15.9731 10.3574 15.9996 10.2294 16 10.1V6.20001C16.0017 5.09492 15.5671 4.03383 14.7907 3.24737C14.0144 2.46092 12.959 2.01265 11.854 2.00001C10.8264 2.04117 9.85379 2.47507 9.1367 3.21225C8.41962 3.94943 8.01275 4.93367 8 5.96201V10.1C7.99979 10.2266 8.0249 10.352 8.07384 10.4688C8.12278 10.5856 8.19458 10.6914 8.285 10.78L9.707 12.2C9.89455 12.3875 9.99994 12.6418 10 12.907V14.327C9.99724 14.9896 9.77432 15.6325 9.3663 16.1545C8.95827 16.6766 8.3883 17.0482 7.746 17.211C6.67872 17.4804 5.73137 18.0972 5.05318 18.9642C4.37498 19.8313 4.00447 20.8993 4 22Z" fill="#000"&gt;&lt;/path&gt;
&lt;/g&gt;
&lt;defs&gt;
&lt;clipPath id="clip0"&gt;
&lt;rect width="24" height="24" fill="white"&gt;&lt;/rect&gt;
&lt;/clipPath&gt;
&lt;/defs&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-2 col-lg-3 col-xxl-3 col-md-4 col-sm-6 col-12">	
							<div class="svg-icons-ov">
								<div class="svg-icons-prev">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#0e8a74" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
										</svg>
								</div>
								<div class="svg-classname">edit.svg</div>
								<div class="svg-icon-popup">
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_img_Brassieresvg-33" class="btn btn-sm btn-brand"><i class="fa-solid fa-image"></i></a>
									<a href="javascript:;" data-bs-toggle="modal" data-bs-target="#svg_inline_Brassieresvg-33" class="btn btn-sm btn-brand"><i class="fa fa-code"></i></a>
								</div>
								<div class="modal fade" id="svg_img_Brassieresvg-33" tabindex="-1" role="dialog" aria-labelledby="svg_img_label_Brassieresvg-33">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_img_label_Brassieresvg-33">edit.svg</h5>
												<button type="button" class="btn-close"  data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;img src="{{ asset('images/iconly/bulk/edit.svg') }}"/&gt;</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="svg_inline_Brassieresvg-33" tabindex="-1" role="dialog" aria-labelledby="svg_inline_label_Brassieresvg-33">
									<div class="modal-dialog modal-dialog-centered" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="svg_inline_label_Brassieresvg-33">edit.svg</h5>
												<button type="button" class="btn-close"   data-bs-dismiss="modal" aria-label="Close">
												</button>
											</div>
											<div class="modal-body">
												<pre>&lt;svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
&lt;path d="M17 3C17.2626 2.73735 17.5744 2.52901 17.9176 2.38687C18.2608 2.24473 18.6286 2.17157 19 2.17157C19.3714 2.17157 19.7392 2.24473 20.0824 2.38687C20.4256 2.52901 20.7374 2.73735 21 3C21.2626 3.26264 21.471 3.57444 21.6131 3.9176C21.7553 4.26077 21.8284 4.62856 21.8284 5C21.8284 5.37143 21.7553 5.73923 21.6131 6.08239C21.471 6.42555 21.2626 6.73735 21 7L7.5 20.5L2 22L3.5 16.5L17 3Z" stroke="#FF7B31" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;/path&gt;
&lt;/svg&gt;
	</pre>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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