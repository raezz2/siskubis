@extends('layouts.app')
@section('breadcrumb')
<div class="breadcrumb">
	<h1 class="mr-2">Tenant</h1>
	<div class="row">
	<div class="col-xl-12">
		<div class="navbar navbar-expand-lg navbar-light navbar-component rounded">
			<div class="text-center d-lg-none w-100">
				<button class="task-manager-button navbar-toggler text-white" type="button" data-toggle="collapse" data-target="#navbar-filter"><i class="i-Filter-2"></i></button>
			</div>
			<div class="navbar-collapse collapse" id="navbar-filter">
				<div class="filter-mobile"><span class="navbar-text font-weight-semibold">Filter:</span></div>
				<ul class="navbar-nav flex-wrap">
					<li class="nav-item dropdown"><a class="navbar-nav-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="i-Time-Window"></i> By date</a>
						<div class="dropdown-menu"><a class="dropdown-item" href="#">Show all</a>
							<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Today</a><a class="dropdown-item" href="#">Yesterday</a><a class="dropdown-item" href="#">This week</a><a class="dropdown-item" href="#">This month</a><a class="dropdown-item" href="#">This year</a>
						</div>
					</li>
					<li class="nav-item dropdown"><a class="navbar-nav-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="i-Bar-Chart-2"></i> By status</a>
						<div class="dropdown-menu"><a class="dropdown-item" href="#">Show all</a>
							<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Open</a><a class="dropdown-item" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a><a class="dropdown-item" href="#">Duplicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
						</div>
					</li>
					<li class="nav-item dropdown"><a class="navbar-nav-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="i-Arrow-Turn-Right"></i> By priority</a>
						<div class="dropdown-menu"><a class="dropdown-item" href="#">Show all</a>
							<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Highest</a><a class="dropdown-item" href="#">High</a><a class="dropdown-item" href="#">Normal</a><a class="dropdown-item" href="#">Low</a>
						</div>
					</li>
				</ul>
				<div class="filter-mobile"><span class="navbar-text font-weight-semibold">View Mode:</span></div>
				<ul class="navbar-nav flex-wrap">
					<li class="nav-item dropdown"><a class="navbar-nav-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="i-Time-Window"></i> List</a></li>
					<li class="nav-item dropdown"><a class="navbar-nav-link" href="#" data-toggle="dropdown" aria-expanded="false"><i class="i-Bar-Chart-2"></i> Grid</a></li>
				</ul>


			</div>
		</div>
	</div>
	</div>
</div>
@endsection
@section('content')
<div id="task-manager">
	<div class="row">
		<div class="col-xl-9">
			<div class="row">
				@foreach($data as $data)
				<div class="col-xl-6">
					<div class="card mt-4 mb-4">
						<img class="card-img-top" src="{{ asset('theme/images/'.$data->foto)}}" alt="" height="380px">
						<div class="card-header">
						<strong>{{$data->title}}</strong>
						</div>
						<div class="card-body">
							<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
								<div>
									
									<p class="ul-task-manager__paragraph mb-3">{{$data->subtitle}}</p>
									<a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
								</div>
								<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
									
									<li>Priority:</li>
									<li><a class="badge badge-warning align-top" href="#">{{$data->name}}</a></li>
									<li>Mentor:</li>
									<li><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center">
						<span class="ul-task-manager__font-date text-muted">Terdaftar:{{$data->created_at}}</span>
						<span>Aktifitas: <span class="font-weight-semibold">18 hours ago</span></span>
							<ul class="list-inline mb-0 mt-2 mt-sm-0">
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">Aktif</a>
									
								</li>
								
							</ul>
						</div>
					</div>
				</div>
				@endforeach
				
				<!--<div class="col-xl-6">
					<div class="card mt-4 mb-4">
						<img class="card-img-top" src="{{ asset('theme/images/photo-wide-2.jpg')}}" alt="">
						<div class="card-header">
						<strong>Nama Produk</strong>
						</div>
						<div class="card-body">
							<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
								<div>
									<h6><a href="">#23. New icons set for an iOS app</a></h6>
									<p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
								</div>
								<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
									<li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
									<li>Priority:</li>
									<li><a class="badge badge-warning align-top" href="#">Start Up</a></li>
									<li>Mentor:</li>
									<li><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
							<ul class="list-inline mb-0 mt-2 mt-sm-0">
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
									<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
									</div>
								</li>
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
									<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="card mt-4 mb-4">
						<img class="card-img-top" src="{{ asset('theme/images/photo-wide-2.jpg')}}" alt="">
						<div class="card-header">
						<strong>Nama Produk</strong>
						</div>
						<div class="card-body">
							<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
								<div>
									<h6><a href="">#23. New icons set for an iOS app</a></h6>
									<p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
								</div>
								<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
									<li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
									<li>Priority:</li>
									<li><a class="badge badge-success align-top" href="#">Pra Start Up</a></li>
									<li>Mentor:</li>
									<li><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
							<ul class="list-inline mb-0 mt-2 mt-sm-0">
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
									<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
									</div>
								</li>
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
									<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="card mt-4 mb-4">
						<img class="card-img-top" src="{{ asset('theme/images/photo-wide-2.jpg')}}" alt="">
						<div class="card-header">
						<strong>Nama Produk</strong>
						</div>
						<div class="card-body">
							<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
								<div>
									<h6><a href="">#23. New icons set for an iOS app</a></h6>
									<p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
								</div>
								<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
									<li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
									<li>Priority:</li>
									<li><a class="badge badge-primary align-top" href="#">Scale Up</a></li>
									<li>Mentor:</li>
									<li><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
							<ul class="list-inline mb-0 mt-2 mt-sm-0">
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
									<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
									</div>
								</li>
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
									<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
								<div class="col-xl-6">
					<div class="card mt-4 mb-4">
						<img class="card-img-top" src="{{ asset('theme/images/photo-wide-2.jpg')}}" alt="">
						<div class="card-header">
						<strong>Nama Produk</strong>
						</div>
						<div class="card-body">
							<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
								<div>
									<h6><a href="">#23. New icons set for an iOS app</a></h6>
									<p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
								</div>
								<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
									<li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
									<li>Priority:</li>
									<li><a class="badge badge-success align-top" href="#">Pra Start Up</a></li>
									<li>Mentor:</li>
									<li><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
							<ul class="list-inline mb-0 mt-2 mt-sm-0">
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
									<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
									</div>
								</li>
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
									<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="card mt-4 mb-4">
						<img class="card-img-top" src="{{ asset('theme/images/photo-wide-2.jpg')}}" alt="">
						<div class="card-header">
						<strong>Nama Produk</strong>
						</div>
						<div class="card-body">
							<div class="d-sm-flex align-item-sm-center flex-sm-nowrap">
								<div>
									<h6><a href="">#23. New icons set for an iOS app</a></h6>
									<p class="ul-task-manager__paragraph mb-3">A collection of textile samples lay spread out on the table..</p><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a>
								</div>
								<ul class="list list-unstyled mb-0 mt-3 mt-sm-0 ml-auto">
									<li><span class="ul-task-manager__font-date text-muted">20 January, 2015</span></li>
									<li>Priority:</li>
									<li><a class="badge badge-primary align-top" href="#">Scale Up</a></li>
									<li>Mentor:</li>
									<li><a href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" height="36" alt="corrupted 2" /></a><a href="#"><i class="ul-task-manager__fonts i-Add"></i></a><a class="btn btn-icon bg-transparent border-slate-300 text-slate rounded-round border-dashed" href=""><i class="icon-plus22"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="card-footer d-sm-flex justify-content-sm-between align-items-sm-center"><span>Due: <span class="font-weight-semibold">18 hours</span></span>
							<ul class="list-inline mb-0 mt-2 mt-sm-0">
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown">On hold</a>
									<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Open</a><a class="dropdown-item active" href="#">On hold</a><a class="dropdown-item" href="#">Resolved</a><a class="dropdown-item" href="#">Closed</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#">Dublicate</a><a class="dropdown-item" href="#">Invalid</a><a class="dropdown-item" href="#">Wontfix</a>
									</div>
								</li>
								<li class="list-inline-item dropdown"><a class="text-default" href="#" data-toggle="dropdown"><i class="i-Gear-2"></i></a>
									<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#"><i class="icon-alarm-add"></i> Check in</a><a class="dropdown-item" href="#"><i class="icon-attachment"></i> Attach screenshot</a><a class="dropdown-item" href="#"><i class="icon-rotate-ccw2"></i> Reassign</a>
										<div class="dropdown-divider"></div><a class="dropdown-item" href="#"><i class="icon-pencil7"></i> Edit task</a><a class="dropdown-item" href="#"><i class="icon-cross2"></i> Remove</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>-->
			</div>
			<!-- pagination-->
			<div class="row justify-content-center mt-4">
				<nav aria-label="Page navigation example">
					<ul class="pagination">
						<li class="page-item"><a class="page-link" href="#">Previous</a></li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">Next</a></li>
					</ul>
				</nav>
			</div>
			<!-- end of pagination-->
		</div>
		<!-- right-sidebar-content-->
		<div class="col-xl-3">
			<!-- search-->
			<div class="card mt-4 mb-3">
				<div class="card-header font-weight-bold dropdown-toggle" onclick="customToggle()">Search Task</div>
				<div class="card-body" id="custom-toggle">
				<button class="btn btn-outline-secondary btn-block mb-4" type="button" data-toggle="modal" data-target="#exampleModal">ADD TENANT</button>
				</div>
			</div>
			<!-- end of search-->
			<!-- navigation-->
			<div class="card mb-3">
				<div class="card-header font-weight-bold dropdown-toggle" onclick="customToggle3()">Navigation</div>
				<div class="card-body" id="custom-toggle3">
				<div class="ul-contact-list">
				<div class="contact-close-mobile-icon float-right mb-2"><i class="i-Close-Window text-15 font-weight-600"></i></div>
				<input class="form-control form-control-rounded col-md-12" id="exampleFormControlInput1" type="text" placeholder="Search Tenant..." />
				<br>
				<div class="list-group" id="list-tab" role="tablist"><a class="list-group-item list-group-item-action border-0 active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Business-Mens"></i>All Tenants</a>
				<a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="nav-icon i-Conference"></i> Non Tenant</a>
				<label class="text-muted font-weight-600 py-8" for="">MEMBERS INKUBATOR</label>
					<select class="form-control form-control-rounded"><option>All Inkubator</option><option></option></select>
					</br>
					<a class="list-group-item list-group-item-action border-0" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Arrow-Next"></i> Pra Start Up</a>
					<a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="nav-icon i-Arrow-Next"></i> Start Up</a>
					<a class="list-group-item list-group-item-action border-0" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="nav-icon i-Arrow-Next"></i> Scale Up</a>
				</div>
			</div>
			<!--<div class="ul-contact-list">
				<div class="contact-close-mobile-icon float-right mb-2"><i class="i-Close-Window text-15 font-weight-600"></i></div>
				<!-- modal-->
				<!--<input class="form-control form-control-rounded col-md-12" id="exampleFormControlInput1" type="text" placeholder="Search User..." />
				<br>
				<div class="list-group" id="list-tab" role="tablist"><a class="list-group-item list-group-item-action border-0 active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Business-Mens"></i>All Tenant</a>
				<label class="text-muted font-weight-600 py-8" for="">MEMBERS INKUBATOR</label>
					<a class="list-group-item list-group-item-action border-0" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Arrow-Next"></i> Pra Start Up</a>
					<a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="nav-icon i-Arrow-Next"></i> Start Up</a>
					<a class="list-group-item list-group-item-action border-0" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="nav-icon i-Arrow-Next"></i> Scale Up</a>
				</div>
			</div>-->
				</div>
			</div>
			<!-- end of navigation-->
			<!-- assigners-->
<!--			<div class="card mb-3">
				<div class="card-header font-weight-bold dropdown-toggle" onclick="customToggle4()">Assigners</div>
				<div class="card-body" id="custom-toggle4">
					<ul class="media-list">
						<li class="media mb-2"><a class="mr-4" href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" alt="asd" srcset="" /></a>
							<div class="ul-task-manager__media"><a href="">James Alexander gull</a>
								<div class="font-size-sm text-muted">Santa Ana,CA</div>
							</div>
							<div class="ml-3 align-self-center"><span class="badge badge-mark"></span></div>
						</li>
						<li class="media mb-2"><a class="mr-4" href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" alt="asd" srcset="" /></a>
							<div class="ul-task-manager__media"><a href="">James Alexander</a>
								<div class="font-size-sm text-muted">Santa Ana,CA</div>
							</div>
							<div class="ml-3 align-self-center"><span class="badge badge-mark"></span></div>
						</li>
						<li class="media mb-2"><a class="mr-4" href="#"><img class="rounded-circle" src="{{ asset('theme/images/faces/1.jpg')}}" width="36" alt="asd" srcset="" /></a>
							<div class="ul-task-manager__media"><a href="">James Alexander</a>
								<div class="font-size-sm text-muted">Santa Ana,CA</div>
							</div>
							<div class="ml-3 align-self-center"><span class="badge badge-mark"></span></div>
						</li>
					</ul>
				</div>
			</div>-->
			<!-- end of assigners-->
			<!-- completeness stats-->
			<div class="card mb-3">
				<div class="card-header font-weight-bold dropdown-toggle" onclick="customToggle6()">Completeness Stats</div>
				<div class="card-body" id="custom-toggle6">
					<ul class="list-unstyled mb-0">
						<li class="mb-3">
							<div class="d-flex align-items-center mb-1">Pra Start Up <span class="text-muted ml-auto">100%</span></div>
							<div class="progress" style="height: 0.125rem;">
								<div class="progress-bar bg-danger" style="width: 100%"><span class="sr-only">100% Complete</span></div>
							</div>
						</li>
						<li class="mb-3">
							<div class="d-flex align-items-center mb-1">Start Up <span class="text-muted ml-auto">0%</span></div>
							<div class="progress" style="height: 0.125rem;">
								<div class="progress-bar bg-warning-400" style="width: 0%"><span class="sr-only">0% Complete</span></div>
							</div>
						</li>
						<li class="mb-3">
							<div class="d-flex align-items-center mb-1">Scale Up <span class="text-muted ml-auto">0%</span></div>
							<div class="progress" style="height: 0.125rem;">
								<div class="progress-bar bg-success-400" style="width: 0%"><span class="sr-only">0% Complete</span></div>
							</div>
						</li>
						<li>
							<div class="d-flex align-items-center mb-1">Proposal <span class="text-muted ml-auto">0%</span></div>
							<div class="progress" style="height: 0.125rem;">
								<div class="progress-bar bg-grey-400" style="width: 0%"><span class="sr-only">0% Complete</span></div>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<!-- end of completeness-->
		</div>

	</div>
</div><!-- end of main-content -->
@endsection