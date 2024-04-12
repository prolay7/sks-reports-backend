@extends('backend.layout.app')
@section('title','Dashboard | ncriptech website CMS')

@section('content')

    <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
            <!-- row -->	
			<div class="page-titles">
				<ol class="breadcrumb">
					<li><h5 class="bc-title">Dashboard</h5></li>
					<li class="breadcrumb-item"><a href="javascript:void(0)">
						<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M2.125 6.375L8.5 1.41667L14.875 6.375V14.1667C14.875 14.5424 14.7257 14.9027 14.4601 15.1684C14.1944 15.4341 13.8341 15.5833 13.4583 15.5833H3.54167C3.16594 15.5833 2.80561 15.4341 2.53993 15.1684C2.27426 14.9027 2.125 14.5424 2.125 14.1667V6.375Z" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M6.375 15.5833V8.5H10.625V15.5833" stroke="#2C2C2C" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
						Home </a>
					</li>
					<li class="breadcrumb-item active"><a href="javascript:void(0)">Dashboard</a></li>
				</ol>
				
			</div>
			<div class="container-fluid">
				<div class="row">
					@include('backend.flash-message.flash-message')	
					<div class="col-xl-12 wid-100">
						<!--<div class="row">
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<h6>Total Colleges</h6>
												<h3>5</h3>
												
											</div>
											<div class="icon-box bg-primary-light">
												<svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z" fill="var(--primary)"/>
												</svg>
											</div>
										</div>
										<div id="TotalColleges"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<h6>Total Enquiry</h6>
												<h3>5</h3>
											</div>
											<div class="icon-box bg-primary-light">
												<svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z" fill="var(--primary)"/>
												</svg>
											</div>
										</div>
										<div id="TotalEnquiry"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<h6>Total Visitor</h6>
												<h3>100</h3>
											</div>
											<div class="icon-box bg-primary-light">
												<svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z" fill="var(--primary)"/>
												</svg>
											</div>
										</div>
										<div id="TotalVisitors"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-3 col-sm-6">
								<div class="card chart-grd same-card">
									<div class="card-body depostit-card p-0">
										<div class="depostit-card-media d-flex justify-content-between pb-0">
											<div>
												<h6>Total User</h6>
												<h3>5</h3>
											</div>
											<div class="icon-box bg-primary-light">
												<svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M11.4642 13.7074C11.4759 12.1252 10.8504 10.8738 9.60279 9.99009C8.6392 9.30968 7.46984 8.95476 6.33882 8.6137C3.98274 7.89943 3.29927 7.52321 3.29927 6.3965C3.29927 5.14147 4.93028 4.69493 6.32655 4.69493C7.34341 4.69493 8.51331 5.01109 9.23985 5.47964L10.6802 3.24887C9.73069 2.6333 8.43112 2.21342 7.14783 2.0831V0H4.49076V2.22918C2.12884 2.74876 0.640949 4.29246 0.640949 6.3965C0.640949 7.87005 1.25327 9.03865 2.45745 9.86289C3.37331 10.4921 4.49028 10.83 5.56927 11.1572C7.88027 11.8557 8.81873 12.2813 8.80805 13.691L8.80799 13.7014C8.80799 14.8845 7.24005 15.3051 5.89676 15.3051C4.62786 15.3051 3.248 14.749 2.46582 13.9222L0.535522 15.7481C1.52607 16.7957 2.96523 17.5364 4.4907 17.8267V20.0001H7.14783V17.8735C9.7724 17.4978 11.4616 15.9177 11.4642 13.7074Z" fill="var(--primary)"/>
												</svg>
											</div>
										</div>
										<div id="TotalUser"></div>
									</div>
								</div>
							</div>
							<div class="col-xl-8">
								<div class="card overflow-hidden">
									<div class="card-header border-0 pb-0 flex-wrap">
										<h4 class="heading mb-0">Unique Visitor Overview</h4>
										<ul class="nav nav-pills mix-chart-tab" id="pills-tab" role="tablist">
										  <li class="nav-item" role="presentation">
											<button class="nav-link active" data-series="week" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab"  aria-selected="true">Week</button>
										  </li>
										  <li class="nav-item" role="presentation">
											<button class="nav-link" data-series="month" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab"  aria-selected="false">Month</button>
										  </li>
										  <li class="nav-item" role="presentation">
											<button class="nav-link" data-series="year" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab"  aria-selected="false">Year</button>
										  </li>
										   <li class="nav-item" role="presentation">
											<button class="nav-link" data-series="all" id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab" aria-selected="false">All</button>
										  </li>
										</ul>
									</div>
									<div class="card-body  p-0">
											<div id="overiewChart"></div>
										<div class="ttl-project">
											<div class="pr-data">
												<h5>12,721</h5>
												<span>Number of Projects</span>
											</div>
											<div class="pr-data">
												<h5 class="text-primary">721</h5>
												<span>Active Projects</span>
											</div>
											<div class="pr-data">
												<h5>$2,50,523</h5>
												<span>Revenue</span>
											</div>
											<div class="pr-data">
												<h5 class="text-success">12,275h</h5>
												<span>Working Hours</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-4 col-md-6 up-shd">
								<div class="card">
									<div class="card-header pb-0 border-0">
										<h4 class="heading mb-0">Enquiry Statics</h4>
										<select class="default-select status-select normal-select">
										  <option value="Today">Today</option>
										  <option value="Week">Week</option>
										  <option value="Month">Month</option>
										</select>
									</div>
									<div class="card-body">
										<div id="projectChart" class="project-chart"></div>
										<div class="project-date">
											<div class="project-media">
												<p class="mb-0">
													<svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect y="0.5" width="12" height="12" rx="3" fill="var(--primary)"/>
													</svg>
													B.Pharma Enquiry
												</p>
												<span>20%</span>
											</div>	
											<div class="project-media">
												<p class="mb-0">
													<svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect y="0.5" width="12" height="12" rx="3" fill="#3AC977"/>
													</svg>
													D.Pharma Enquiry
												</p>
												<span>25%</span>
											</div>
											<div class="project-media">
												<p class="mb-0">
													<svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect y="0.5" width="12" height="12" rx="3" fill="#FF5E5E"/>
													</svg>
													B.Ed Enquiry
												</p>
												<span>30%</span>
											</div>
											<div class="project-media">
												<p class="mb-0">
													<svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect y="0.5" width="12" height="12" rx="3" fill="#FF9F00"/>
													</svg>
													D.El.Ed Enquiry 
												</p>
												<span>25%</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					
					
					
					
					
					
					<div class="col-xl-12 bst-seller">
						<div class="card">
							<div class="card-body p-0">
								<div class="table-responsive active-projects style-1 ItemsCheckboxSec shorting ">
								<div class="tbl-caption">
									<h4 class="heading mb-0">Latest 10 Enquiry </h4>
									<div>
										<a class="btn btn-primary btn-sm" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">View All</a>
										<button type="button" class="btn btn-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal1">+ Invite Employee
										</button>
									</div>
								</div>
									<table id="empoloyees-tbl" class="table">
										<thead>
                                            <tr>
												<th>
													<div class="form-check custom-checkbox ms-0">
														<input type="checkbox" class="form-check-input checkAllInput" id="checkAll2" required="">
														<label class="form-check-label" for="checkAll2"></label>
													</div>
												</th>
                                                <th>Enquiry ID</th>
                                                <th>Student Name</th>
                                                <th>Address</th>
                                                <th>Interest Course</th>
                                                <th>Interested Colleges</th>
                                                <th>Location</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
										<tbody>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox0100" required="">
														<label class="form-check-label" for="customCheckBox0100"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic1.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ra@gmail.com</a></td>
												<td>
													<span>+12 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>AZ</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox1100" required="">
														<label class="form-check-label" for="customCheckBox1100"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic2.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox151" required="">
														<label class="form-check-label" for="customCheckBox151"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic3.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky M</a></h6>
															<span>Software Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">rm@gmail.com</a></td>
												<td>
													<span>+55 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>PA</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2100" required="">
														<label class="form-check-label" for="customCheckBox2100"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic1.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Software Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox3100" required="">
														<label class="form-check-label" for="customCheckBox3100"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic2.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Honey Risher</a></h6>
															<span>Software Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">hr@gmail.com</a></td>
												<td>
													<span>+22 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>WA</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox4100" required="">
														<label class="form-check-label" for="customCheckBox4100"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic2.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Mony Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ma@gmail.com</a></td>
												<td>
													<span>+62 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>WA</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox2222" required="">
														<label class="form-check-label" for="customCheckBox2222"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic1.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ankites Risher</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ar@gmail.com</a></td>
												<td>
													<span>+62 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>AL</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox1111" required="">
														<label class="form-check-label" for="customCheckBox1111"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic2.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Elijah James</a></h6>
															<span>Software Developer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ar@gmail.com</a></td>
												<td>
													<span>+85 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>AL</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox1122" required="">
														<label class="form-check-label" for="customCheckBox1122"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic3.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Elijah James</a></h6>
															<span>Software Developer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ej@gmail.com</a></td>
												<td>
													<span>+69 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>AL</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox5100" required="">
														<label class="form-check-label" for="customCheckBox5100"></label>
													</div>
												</td>
												<td><span>1018</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic3.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Tony Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">ta@gmail.com</a></td>
												<td>
													<span>+78 123 456 7890</span>
												</td>
												<td>
													<span>Female</span>
												</td>	
												<td>
													<span>NYC</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox0101" required="">
														<label class="form-check-label" for="customCheckBox0101"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic1.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Pending</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox102" required="">
														<label class="form-check-label" for="customCheckBox102"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic3.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox1055" required="">
														<label class="form-check-label" for="customCheckBox1055"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic1.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+255 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>USA</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Pending</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox103" required="">
														<label class="form-check-label" for="customCheckBox103"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic3.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>Delhi</span>
												</td>
												<td>
													<span class="badge badge-success light border-0">Active</span>
												</td>
											</tr>
											<tr>
												<td>
													<div class="form-check custom-checkbox">
														<input type="checkbox" class="form-check-input" id="customCheckBox104" required="">
														<label class="form-check-label" for="customCheckBox104"></label>
													</div>
												</td>
												<td><span>1001</span></td>
												<td>
													<div class="products">
														<img src="{{ asset('assets/backend/images/contacts/pic2.jpg') }}" class="avatar avatar-md" alt="">
														<div>
															<h6><a href="javascript:void(0)">Ricky Antony</a></h6>
															<span>Web Designer</span>	
														</div>	
													</div>
												</td>
												<td><a href="javascript:void(0)" class="text-primary">abc@gmail.com</a></td>
												<td>
													<span>+91 123 456 7890</span>
												</td>
												<td>
													<span>Male</span>
												</td>	
												<td>
													<span>USA</span>
												</td>
												<td>
													<span class="badge badge-danger light border-0">Pending</span>
												</td>
											</tr>
										</tbody>
										
									</table>
								</div>
							</div>
						</div>
					</div>-->
				</div>
			
			</div>
        </div>
		
        <!--**********************************
            Content body end
        ***********************************-->

@endsection