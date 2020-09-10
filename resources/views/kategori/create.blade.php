@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-3">
        @include('layouts.module.sidebar')
    </div>
    <div class="col-md">
      <div class="panel panel-default">
        <div class="panel-heading">Buat Kategori Baru</div>
        <div class="panel-body">
          <form action="{{ route('inkubator.kategori.create') }}" method="post">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" class="form-control" name="category" placeholder="Enter Name Kategori">
            </div>
            <div class="form-group">
              <input type="submit" value="Simpan" class="btn btn-primary">
              <a href="{{URL('/inkubator/berita/kategori')}}" class="btn btn-danger">Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection()
