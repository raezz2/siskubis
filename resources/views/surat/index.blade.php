@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-12 ">
	<div class="card text-left">
		<div class="card-body">
			<ul class="nav nav-tabs" id="myIconTab" role="tablist">
			<h3 class="" style="margin: 0 20px 0px 0px;padding: 5px;">Persuratan</h3>
				<li class="nav-item"><a class="nav-link active" id="home-icon-tab" data-toggle="tab" href="#homeIcon" role="tab" aria-controls="homeIcon" aria-selected="true"><i class="nav-icon i-Home1 mr-1"></i> Surat Masuk</a></li>
				<li class="nav-item"><a class="nav-link" id="profile-icon-tab" data-toggle="tab" href="#profileIcon" role="tab" aria-controls="profileIcon" aria-selected="false"><i class="nav-icon i-Home1 mr-1"></i> Surat Keluar</a></li>
			</ul>
			<div class="tab-content" id="myIconTabContent" style="padding: 1rem 0 !important; ">
				<div class="tab-pane fade show active" id="homeIcon" role="tabpanel" aria-labelledby="home-icon-tab">
					<table class="display table" id="masuk" style="width:100%">
						<thead>
							<tr>
								<th width="65%">Surat</th>
								<th width="15%">Kategori</th>
								<th width="15%">Tanggal</th>
								<th width="5%">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
								<a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a>
								</td>
								<td><a class="badge badge-primary m-2 p-2" href="#">Scale Up</a></td>
								<td>April 25, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a>
								</td>
								<td><a class="badge badge-success m-2 p-2" href="#">Start Up</a></td>
								<td>April 34, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a></td>
								<td><a class="badge badge-danger m-2 p-2" href="#">Pra Start Up</a></td>
								<td>April 34, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a></td>
								<td><a class="badge badge-warning m-2 p-2" href="#">Semua Tenan</a></td>
								<td>April 34, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a></td>
								<td><a class="badge badge-primary m-2 p-2" href="#">Scale Up</a></td>
								<td>April 25, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a></td>
								<td><a class="badge badge-success m-2 p-2" href="#">Start Up</a></td>
								<td>April 34, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a></td>
								<td><a class="badge badge-danger m-2 p-2" href="#">Pra Start Up</a></td>
								<td>April 34, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a></td>
								<td><a class="badge badge-warning m-2 p-2" href="#">Semua Tenan</a></td>
								<td>April 34, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a></td>
								<td><a class="badge badge-primary m-2 p-2" href="#">Scale Up</a></td>
								<td>April 25, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a></td>
								<td><a class="badge badge-success m-2 p-2" href="#">Start Up</a></td>
								<td>April 34, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a></td>
								<td><a class="badge badge-danger m-2 p-2" href="#">Pra Start Up</a></td>
								<td>April 34, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
							<tr>
								<td><a href="">
										<strong>Judul Surat</strong>
										<p>Suratnya adalah ini</p>
								</a></td>
								<td><a class="badge badge-warning m-2 p-2" href="#">Semua Tenan</a></td>
								<td>April 34, 2019</td>
								<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="tab-pane fade" id="profileIcon" role="tabpanel" aria-labelledby="profile-icon-tab">
					<table class="display table" id="keluar" style="width:100%">
					<thead>
						<tr>
							<th width="65%">Surat</th>
							<th width="15%">Kategori</th>
							<th width="15%">Tanggal</th>
							<th width="5%">Action</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
							<a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a>
							</td>
							<td><a class="badge badge-primary m-2 p-2" href="#">Scale Up</a></td>
							<td>April 25, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a>
							</td>
							<td><a class="badge badge-success m-2 p-2" href="#">Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a></td>
							<td><a class="badge badge-danger m-2 p-2" href="#">Pra Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a></td>
							<td><a class="badge badge-warning m-2 p-2" href="#">Semua Tenan</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a></td>
							<td><a class="badge badge-primary m-2 p-2" href="#">Scale Up</a></td>
							<td>April 25, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a></td>
							<td><a class="badge badge-success m-2 p-2" href="#">Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a></td>
							<td><a class="badge badge-danger m-2 p-2" href="#">Pra Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a></td>
							<td><a class="badge badge-warning m-2 p-2" href="#">Semua Tenan</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a></td>
							<td><a class="badge badge-primary m-2 p-2" href="#">Scale Up</a></td>
							<td>April 25, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a></td>
							<td><a class="badge badge-success m-2 p-2" href="#">Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a></td>
							<td><a class="badge badge-danger m-2 p-2" href="#">Pra Start Up</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
						<tr>
							<td><a href="">
									<strong>Judul Surat</strong>
									<p>Suratnya adalah ini</p>
							</a></td>
							<td><a class="badge badge-warning m-2 p-2" href="#">Semua Tenan</a></td>
							<td>April 34, 2019</td>
							<td><a class="ul-link-action text-success" href="" data-toggle="tooltip" data-placement="top" title="Edit"><i class="i-Edit"></i></a><a class="ul-link-action text-danger mr-1" href="" data-toggle="tooltip" data-placement="top" title="Want To Delete !!!"><i class="i-Eraser-2"></i></a></td>
						</tr>
					</tbody>
				</table>
				</div>
				<div class="tab-pane fade" id="contactIcon" role="tabpanel" aria-labelledby="contact-icon-tab">Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore.</div>
			</div>
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
        $('#masuk').DataTable({
			responsive:true,
		});
		
		$('#keluar').DataTable({
			responsive:true,
		});
    </script>
@endsection