@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md">
      <div class="card">
        <div class="card-header">Buat Kategori Baru</div>
        <div class="card-body">
          <form action="{{ route('inkubator.kategori.create') }}" method="post">
            {{ csrf_field() }}

            @if(session()->has('sukses'))
            <div class="alert alert-success">
                {{ session()->get('sukses') }}
            </div>
            {{-- ($message = Session::get('sukses'))
				<div class="alert alert-success alert-block">
					<button type="button" class="close" data-dismiss="alert">×</button>
					<strong>{{ $message }}</strong>
                </div> --}}

            {{-- @else ($message = Session::get('gagal'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div> --}}

            @endif

            <div class="form-group">
              <label for="">Nama</label>
              <input type="text" class="form-control" name="category" placeholder="Enter Name Kategori">
            </div>
            <div class="form-group">
              <input type="submit" value="Simpan" class="btn btn-primary">
              <a href="{{ route('inkubator.berita') }}" class="btn btn-danger">Kembali</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div><br><br>
    @if ($message = Session::get('peringatan'))
    <div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if ($message = Session::get('gagal'))
    <div class="alert alert-danger alert-block">
	    <button type="button" class="close" data-dismiss="alert">×</button>
	    <strong>{{ $message }}</strong>
    </div>
    @endif

        <table class="table">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Kategori</th>
              <th>Pilihan</th>
            </tr>
          </thead>
          <tbody>
            @foreach($berita_category as $kategori)
            <tr>
              <td>{{ $no++ }}</td>
              <td>{{ $kategori->category }}</td>
              <td>
                <a href="{{ route('inkubator.kategori.edit', $kategori) }}" class="btn btn-success btn-sm" style="float:left;">Edit</a>
                <form action="{{ route('inkubator.kategori.destroy',$kategori) }}" method="post">
                  {{ csrf_field() }}
                  <input type="hidden" name="_method" value="DELETE">
                  <button type="submit" class="btn btn-danger btn-sm" style="margin-left:3px;">Hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
</div>
</div>
@endsection()
