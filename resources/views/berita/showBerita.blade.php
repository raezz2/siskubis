@extends('layouts.app')
@section('css')

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

@endsection
@section('content')

<div class="row">
	<div class="col-xl-8 col-lg-8">
		<div class="card">
			<div class="card-body">
				<small>{{ $berita->created_at->format('d M Y | h:i') }}</small>
				<h1 class="card-title text-danger font-weight-bold">
					{{ $berita->tittle }}
				</h1>
				<small>{{ $berita->profil_user->nama }} - <b>SISKUBIS</b></small>
				<img src="{{ asset('storage/berita/' . $berita->foto) }}" alt="{{ $berita->slug }}" class="w-100" height="350px">
				<p class="text-justify">{!! $berita->berita !!}</p>
			</div>
		</div>
	</div>
<div class="col-xl-4 col-lg-4">
<div class="card mb-4">
	<div class="card-body">
		<div class="card-title mb-0">Berita Umum</div>
	</div>
	<div class="ul-widget-app__comments">
		<!--  row-comments -->
		@forelse($umum as $row)
		<div class="ul-widget-app__row-comments">
			<div class="ul-widget-app__profile-pic p-3"><img class="profile-picture avatar-lg" src="{{ asset('storage/berita/' . $row->foto) }}" alt="alt" /></div>
			<div class="ul-widget-app__comment">
				<div class="ul-widget-app__profile-title">
					<h6 class="heading">{{ $row->tittle }}</h6>
					<p class="mb-2">{!! Str::Limit($row->berita, 35) !!}</p>
				</div>
				<div class="ul-widget-app__profile-status">
							@if($berita->publish == 1)
								<span class="badge badge-pill badge-success p-1 mr-2">Publish</span>
							@else
								<span class="badge badge-pill badge-danger p-1 mr-2">Draft</span>
							@endif
					<span class="ul-widget-app__icons"><a href="href"><i class="i-Approved-Window text-mute"></i></a><a href="href"><i class="i-Like text-mute"></i></a><a href="href"><i class="i-Heart1 text-mute"></i></a></span><span class="text-mute">{{ $row->created_at->format('d, M Y') }}</span>
				</div>
			</div>
		</div>
		@empty
			<p class="text-center">Tidak Ada Berita Umum</p>
		@endforelse
		</div>
		<ul class="pagination justify-content-center">
			<li class="page-item"></li>
		</ul>	
	</div>

	<div class="card">
		<div class="card-body">
			<div class="card-title mb-0">Recent Comments</div>
		</div>
		<div class="ul-widget-app__comments">
			<!--  row-comments -->
			<div class="ul-widget-app__row-comments">
				<div class="ul-widget-app__profile-pic p-3"><img class="profile-picture avatar-md mb-2 rounded-circle img-fluid" src="{{ asset('theme/images/faces/1.jpg')}}" alt="alt" /></div>
				<div class="ul-widget-app__comment">
					<div class="ul-widget-app__profile-title">
						<h6 class="heading">Jhon Wick</h6>
						<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.ipsum .</p>
					</div>
					<div class="ul-widget-app__profile-status"><span class="badge badge-pill badge-primary p-2 m-1">Pending</span><span class="ul-widget-app__icons"><a href="href"><i class="i-Approved-Window text-mute"></i></a><a href="href"><i class="i-Like text-mute"></i></a><a href="href"><i class="i-Heart1 text-mute"></i></a></span><span class="text-mute">May 14, 2019</span></div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
@endsection
