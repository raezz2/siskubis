@extends('layouts.app')
@section('content')

<div class="row">
<div class="col-xl-8 col-lg-8">
<div class="card">
<div class="card-header container-fluid">
  <div class="row">
	<div class="col-md-7">
	  <h3>Berita</h3>
    </div>
    <div class="col-md-3">
        <a href="{{ route('inkubator.kategori.create') }}"><button class="btn btn-primary custom-btn btn-sm ml-5">+ Tambah Kategori</button></a>
    </div>
	<div class="col-md-2">
	  <a href="{{ route('inkubator.formBerita') }}"><button class="btn btn-primary custom-btn btn-sm">+ Tambah Berita</button></a>
	</div>
  </div>
</div>
<div class="card-body">

<div class="row row-xs">
	<div class="col-md-4">
        <form action="{{ route('cariberita') }}" method="get" name="s" >
        <div class="input-group custom-search-form">
            <input type="text" class="form-control" name="search" placeholder="Search...">
        </div>
	</div>
	<div class="col-md-4 mt-3 mt-md-0">
		<input class="form-control" type="date" placeholder="Tanggal">
	</div>
	<div class="col-md-2 mt-3 mt-md-0">
	 <div class="btn-group">
		<button class="btn btn-danger btn-block dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			Status
		</button>
		<div class="dropdown-menu ul-task-manager__dropdown-menu" x-placement="top-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, -102px, 0px);"><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-warning mr-2"></span>Draft</a><a class="dropdown-item" href="#"><span class="ul-task-manager__dot bg-success mr-2"></span>Published</a></div>
	  </div>
	</div>
	<div class="col-md-2 mt-3 mt-md-0">
		<button type="submit" class="btn btn-primary btn-block">Search</button>
	</div>
</form>
</div>
  <hr>
	<div class="ul-widget__body">
	<div class="ul-widget5">
		@foreach ($berita as $b)
		<div class="ul-widget5__item">
			<div class="ul-widget5__content">
				<div class="ul-widget5__pic"><img src="{{ asset('storage/berita/' . $b->foto) }}" alt="Third slide" /></div>
				<div class="ul-widget5__section">
					<a class="ul-widget4__title" href="{{ route('inkubator.showBerita', $b->slug) }}">{{ Str::limit($b->tittle, 40) }}</a>
					<p class="ul-widget5__desc">{!! Str::limit($b->berita, 47) !!}</p>
					<div class="ul-widget5__info">
						<span>Status : </span>
							@if($b->publish == 1)
								<span class="badge badge-pill badge-success p-1 mr-2">Publish</span>
							@else
								<span class="badge badge-pill badge-danger p-1 mr-2">Draft</span>
							@endif
						<span>Author : </span><span class="text-primary">{{ $b->profil_user->nama }}</span><br>
						<span>Released : </span><span class="text-primary">{{ $b->created_at->format('d, M Y') }}</span>
					</div>
				</div>
			</div>
			<div class="ul-widget5__content">
				<div class="ul-widget5__stats"><span class="ul-widget5__sales">{{ $b->views }} <i class="i-Eye"></i></span><span class="ul-widget5__sales">200 <i class="i-Speach-Bubble-3"></i></span></div>
				<div class="ul-widget5__stats"><span class="ul-widget5__number">
				<form action="{{ route('inkubator.destroyBerita', $b->id) }}" method="post">
                	@csrf
                	<input type="hidden" name="_method" value="DELETE">
					<a class="ul-link-action text-success" href="{{ route('inkubator.editBerita', $b->id) }}" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="i-Edit"></i></a>
					<button type="submit" class="btn btn-link ul-link-action text-danger mr-1" data-toggle="tooltip" data-placement="top" title="" data-original-title="Want To Delete !!!"><i class="i-Eraser-2"></i></button>
				</form>
				</span></div>
			</div>
		</div>
		@endforeach
	</div>

	<ul class="pagination justify-content-center">
		<li class="page-item">{{ $berita->links() }}</li>
	</ul>

	</div>
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
					<p class="mb-2">{!! str::Limit($row->berita,30) !!}</p>
				</div>
				<div class="ul-widget-app__profile-status"><span class="badge badge-pill badge-primary p-2 m-1">Pending</span><span class="ul-widget-app__icons"><a href="href"><i class="i-Approved-Window text-mute"></i></a><a href="href"><i class="i-Like text-mute"></i></a><a href="href"><i class="i-Heart1 text-mute"></i></a></span><span class="text-mute">{{ $row->created_at->format('d, M Y') }}</span></div>
			</div>
		</div>
		@empty
			<p class="text-center">Tidak Ada Berita Umum</p>
		@endforelse
		</div>
		<ul class="pagination justify-content-center">
			<li class="page-item">{{ $berita->links() }}</li>
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
			<!--  row-comments-2 -->
			<div class="ul-widget-app__row-comments">
				<div class="ul-widget-app__profile-pic p-3"><img class="profile-picture avatar-md mb-2 rounded-circle" src="{{ asset('theme/images/faces/2.jpg')}}" alt="alt" /></div>
				<div class="ul-widget-app__comment">
					<div class="ul-widget-app__profile-title">
						<h6 class="heading">Jhon Trevor</h6>
						<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.ipsum .</p>
					</div>
					<div class="ul-widget-app__profile-status"><span class="badge badge-pill badge-success p-2 m-1">Approved</span><span class="ul-widget-app__icons"><a href="href"><i class="i-Approved-Window text-mute"></i></a><a href="href"><i class="i-Like text-mute"></i></a><a href="href"><i class="i-Heart1 text-mute"></i></a></span><span class="text-mute">May 14, 2019</span></div>
				</div>
			</div>
			<!--  row-comments-3 -->
			<div class="ul-widget-app__row-comments">
				<div class="ul-widget-app__profile-pic p-3"><img class="profile-picture avatar-md mb-2 rounded-circle" src="{{ asset('theme/images/faces/4.jpg')}}" alt="alt" /></div>
				<div class="ul-widget-app__comment">
					<div class="ul-widget-app__profile-title">
						<h6 class="heading">Jhon Trevor</h6>
						<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.ipsum .</p>
					</div>
					<div class="ul-widget-app__profile-status"><span class="badge badge-pill badge-danger p-2 m-1">Rejected</span><span class="ul-widget-app__icons"><a href="href"><i class="i-Approved-Window text-mute"></i></a><a href="href"><i class="i-Like text-mute"></i></a><a href="href"><i class="i-Heart1 text-mute"></i></a></span><span class="text-mute">May 14, 2019</span></div>
				</div>
			</div>
			<!--  row-comments-4 -->
			<div class="ul-widget-app__row-comments">
				<div class="ul-widget-app__profile-pic p-3"><img class="profile-picture avatar-md mb-2 rounded-circle" src="{{ asset('theme/images/faces/3.jpg')}}" alt="alt" /></div>
				<div class="ul-widget-app__comment">
					<div class="ul-widget-app__profile-title">
						<h6 class="heading">Jhon Trevor</h6>
						<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.ipsum .</p>
					</div>
					<div class="ul-widget-app__profile-status"><span class="badge badge-pill badge-primary p-2 m-1">Pending</span><span class="ul-widget-app__icons"><a href="href"><i class="i-Approved-Window text-mute"></i></a><a href="href"><i class="i-Like text-mute"></i></a><a href="href"><i class="i-Heart1 text-mute"></i></a></span><span class="text-mute">May 14, 2019</span></div>
				</div>
			</div>
			<!--  row-comments-5 -->
			<div class="ul-widget-app__row-comments">
				<div class="ul-widget-app__profile-pic p-3"><img class="profile-picture avatar-md mb-2 rounded-circle" src="{{ asset('theme/images/faces/5.jpg')}}" alt="alt" /></div>
				<div class="ul-widget-app__comment">
					<div class="ul-widget-app__profile-title">
						<h6 class="heading">Jhon Trevor</h6>
						<p class="mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.ipsum .</p>
					</div>
					<div class="ul-widget-app__profile-status"><span class="badge badge-pill badge-success p-2 m-1">Success</span><span class="ul-widget-app__icons"><a href="href"><i class="i-Approved-Window text-mute"></i></a><a href="href"><i class="i-Like text-mute"></i></a><a href="href"><i class="i-Heart1 text-mute"></i></a></span><span class="text-mute">May 14, 2019</span></div>
				</div>
			</div>
		</div>
	</div>

</div>
</div>
@endsection
