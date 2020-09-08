@extends('layouts.app')

@section('content')
   <div class="row">
   <div class="col-md-3">
	<div class="card">
		<div class="card-header">
		<h3>Produk</h3>
		</div>
		<div class="card-body">
			<div class="ul-contact-list">
				<div class="contact-close-mobile-icon float-right mb-2"><i class="i-Close-Window text-15 font-weight-600"></i></div>
				<!-- modal-->
				<!-- end:modal-->
				<input class="form-control form-control-rounded col-md-12" id="exampleFormControlInput1" type="text" placeholder="Search Produk..." />
				<br>
				<div class="list-group" id="list-tab" role="tablist"><a class="list-group-item list-group-item-action border-0 active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Business-Mens"></i>All Produks</a>
				<a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="nav-icon i-Conference"></i> Non Produk</a>
				<label class="text-muted font-weight-600 py-8" for="">MEMBERS INKUBATOR</label>
					<select class="form-control form-control-rounded"><option>All Inkubator</option><option></option></select>
					</br>
					<a class="list-group-item list-group-item-action border-0" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Arrow-Next"></i> Pra Start Up</a>
					<a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="nav-icon i-Arrow-Next"></i> Start Up</a>
					<a class="list-group-item list-group-item-action border-0" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="nav-icon i-Arrow-Next"></i> Scale Up</a>
				</div>
			</div>
			<div class="ul-contact-list">
				<div class="contact-close-mobile-icon float-right mb-2"><i class="i-Close-Window text-15 font-weight-600"></i></div>
				<!-- modal-->
				<input class="form-control form-control-rounded col-md-12" id="exampleFormControlInput1" type="text" placeholder="Search User..." />
				<br>
				<div class="list-group" id="list-tab" role="tablist"><a class="list-group-item list-group-item-action border-0 active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Business-Mens"></i>All Produk</a>
				<label class="text-muted font-weight-600 py-8" for="">MEMBERS INKUBATOR</label>
					<a class="list-group-item list-group-item-action border-0" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Arrow-Next"></i> Pra Start Up</a>
					<a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="nav-icon i-Arrow-Next"></i> Start Up</a>
					<a class="list-group-item list-group-item-action border-0" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="nav-icon i-Arrow-Next"></i> Scale Up</a>
				</div>
			</div>
		</div>
	</div>
   </div>
	<div class="col-md-9">
	<section class="product-cart">
                    <div class="row list-grid">
                        <div class="list-item col-md-3">
                            <div class="card o-hidden mb-4 d-flex flex-column">
                                <div class="list-thumb d-flex"><img alt="" src="{{ asset('theme/images/products/speaker-1.jpg')}}" /></div>
                                <div class="flex-grow-1 d-bock">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center"><a class="w-40 w-sm-100" href="">
                                            <div class="item-title">
                                                Wireless Bluetooth V4.0 Portable Speaker with HD Sound
                                                and Bass
                                            </div>
                                        </a>
                                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                      
                                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges"><span class="badge badge-info">Startup</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item col-md-3">
                            <div class="card o-hidden mb-4 d-flex flex-column">
                                <div class="list-thumb d-flex"><img alt="" src="{{ asset('theme/images/products/speaker-2.jpg')}}" /></div>
                                <div class="flex-grow-1 d-bock">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center"><a class="w-40 w-sm-100" href="">
                                            <div class="item-title">Portable Speaker with HD Sound</div>
                                        </a>
                                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                        
                                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges"><span class="badge badge-primary">Startup</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item col-md-3">
                            <div class="card o-hidden mb-4 d-flex flex-column">
                                <div class="list-thumb d-flex"><img alt="" src="{{ asset('theme/images/products/headphone-2.jpg')}}" /></div>
                                <div class="flex-grow-1 d-bock">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center"><a class="w-40 w-sm-100" href="">
                                            <div class="item-title">Lightweight On-Ear Headphones - Black</div>
                                        </a>
                                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                       
                                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges"><span class="badge badge-info">Startup</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item col-md-3">
                            <div class="card o-hidden mb-4 d-flex flex-column">
                                <div class="list-thumb d-flex"><img alt="" src="{{ asset('theme/images/products/watch-1.jpg')}}" /></div>
                                <div class="flex-grow-1 d-bock">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center"><a class="w-40 w-sm-100" href="">
                                            <div class="item-title">
                                                Automatic-self-wind mens Watch 5102PR-001 (Certified
                                                Pre-owned)
                                            </div>
                                        </a>
                                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                        
                                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges"><span class="badge badge-info">Startup</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item col-md-3">
                            <div class="card o-hidden mb-4 d-flex flex-column">
                                <div class="list-thumb d-flex"><img alt="" src="{{ asset('theme/images/products/watch-2.jpg')}}" /></div>
                                <div class="flex-grow-1 d-bock">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center"><a class="w-40 w-sm-100" href="">
                                            <div class="item-title">Automatic-self-wind mens Watch 5102PR-001</div>
                                        </a>
                                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                        
                                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges"><span class="badge badge-info">Startup</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item col-md-3">
                            <div class="card o-hidden mb-4 d-flex flex-column">
                                <div class="list-thumb d-flex"><img alt="" src="{{ asset('theme/images/products/headphone-3.jpg')}}" /></div>
                                <div class="flex-grow-1 d-bock">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center"><a class="w-40 w-sm-100" href="">
                                            <div class="item-title">On-Ear Headphones - Black</div>
                                        </a>
                                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                        
                                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges"><span class="badge badge-success">Scaleup</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item col-md-3">
                            <div class="card o-hidden mb-4 d-flex flex-column">
                                <div class="list-thumb d-flex"><img alt="" src="{{ asset('theme/images/products/headphone-4.jpg')}}" /></div>
                                <div class="flex-grow-1 d-bock">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center"><a class="w-40 w-sm-100" href="">
                                            <div class="item-title">In-Ear Headphone</div>
                                        </a>
                                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                        
                                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges"><span class="badge badge-primary">Startup</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="list-item col-md-3">
                            <div class="card o-hidden mb-4 d-flex flex-column">
                                <div class="list-thumb d-flex"><img alt="" src="{{ asset('theme/images/products/iphone-2.jpg')}}" /></div>
                                <div class="flex-grow-1 d-bock">
                                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center"><a class="w-40 w-sm-100" href="">
                                            <div class="item-title">Duis exercitation nostrud anim</div>
                                        </a>
                                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                                       
                                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges"><span class="badge badge-red">Pra Startup</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 ">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </section>
	</div>
</div><!-- end of main-content -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New Produk</h5>
				<button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			</div>
			<div class="modal-body">
				<form>
					<div class="form-group">
						<input class="form-control" type="text" placeholder="Name...." />
					</div>
					<div class="form-group">
						<input class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email...." />
					</div>
					<div class="form-group">
						<input class="form-control" id="exampleInputPassword1" type="text" placeholder="phone...." />
					</div>
					<div class="form-group">
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="notes...."></textarea>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button>
				<button class="btn btn-primary" type="button">
					Save
					changes
				</button>
			</div>
		</div>
	</div>
</div>
@endsection
@section('css')
    <link rel="stylesheet" href="{{asset('theme/css/plugins/datatables.min.css')}}" />
@endsection
@section('js')
	<script src="{{asset('theme/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('theme/js/scripts/contact-list-table.min.js')}}"></script>
    <script src="{{asset('theme/js/scripts/datatables.script.min.js')}}"></script>
	<script src="{{asset('theme/js/plugins/datatables.min.js')}}"></script>
    <script src="{{asset('theme/js/scripts/tooltip.script.min.js')}}"></script>
    <script>
        $('#ul-contact-list').DataTable({
			responsive:true
		});
    </script>
@endsection