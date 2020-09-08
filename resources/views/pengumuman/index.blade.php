@extends('layouts.app')
@section('content')
   <div class="row">
   <div class="col-md-3">
	<div class="card">
		<div class="card-header">
		<h3>Pengumuman</h3>
		</div>
		<div class="card-body">
			<div class="ul-contact-list">
				<div class="contact-close-mobile-icon float-right mb-2"><i class="i-Close-Window text-15 font-weight-600"></i></div>
				<!-- modal-->
				<button class="btn btn-outline-secondary btn-block mb-4" type="button" data-toggle="modal" data-target="#exampleModal">Tambah Pengumuman</button>
				<!-- end:modal-->
				<input class="form-control form-control-rounded col-md-12" id="exampleFormControlInput1" type="text" placeholder="Search Tenant..." />
				<br>
				<div class="list-group" id="list-tab" role="tablist"><a class="list-group-item list-group-item-action border-0 active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Business-Mens"></i> Semua Pengumuman</a>
				<a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="nav-icon i-Conference"></i> Non Tenan</a>
				<label class="text-muted font-weight-600 py-8" for="">MEMBERS INKUBATOR</label>
					<select class="form-control form-control-rounded"><option>All Inkubator</option><option></option></select>
					</br>
					<a class="list-group-item list-group-item-action border-0" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home"><i class="nav-icon i-Arrow-Next"></i> Pra Start Up</a>
					<a class="list-group-item list-group-item-action border-0" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile"><i class="nav-icon i-Arrow-Next"></i> Start Up</a>
					<a class="list-group-item list-group-item-action border-0" id="list-settings-list" data-toggle="list" href="#list-settings" role="tab" aria-controls="settings"><i class="nav-icon i-Arrow-Next"></i> Scale Up</a>
				</div>
			</div>

		</div>
	</div>
   </div>
	<div class="col-md-9">
	<div class="card">
		<div class="card-body">
			<table class="display table" id="ul-contact-list" style="width:100%">
					<thead>
						<tr>
							<th width="65%">Pengumuman</th>
							<th width="15%">Kategori</th>
							<th width="15%">Tanggal</th>
							<th width="5%">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
							<a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a>
							</td>
							<td><a class="badge badge-primary m-2 p-2" href="#">Scale Up</a></td>
							<td>April 25, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a>
							</td>
							<td><a class="badge badge-success m-2 p-2" href="#">Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a></td>
							<td><a class="badge badge-danger m-2 p-2" href="#">Pra Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a></td>
							<td><a class="badge badge-warning m-2 p-2" href="#">Semua Tenan</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a></td>
							<td><a class="badge badge-primary m-2 p-2" href="#">Scale Up</a></td>
							<td>April 25, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a></td>
							<td><a class="badge badge-success m-2 p-2" href="#">Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a></td>
							<td><a class="badge badge-danger m-2 p-2" href="#">Pra Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a></td>
							<td><a class="badge badge-warning m-2 p-2" href="#">Semua Tenan</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a></td>
							<td><a class="badge badge-primary m-2 p-2" href="#">Scale Up</a></td>
							<td>April 25, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a></td>
							<td><a class="badge badge-success m-2 p-2" href="#">Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a></td>
							<td><a class="badge badge-danger m-2 p-2" href="#">Pra Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Pengumuman</strong>
									<p>Pengumumannya adalah ini</p>
							</a></td>
							<td><a class="badge badge-warning m-2 p-2" href="#">Semua Tenan</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
					</tbody>
				</table>
		</div>
	</div>
	</div>
</div><!-- end of main-content -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">New Tenant</h5>
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
			responsive:true,
			order:[[2,'DESC']]
		});
    </script>
@endsection