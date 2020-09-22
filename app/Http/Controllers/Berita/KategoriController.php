<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kategori;
use Session;


class KategoriController extends Controller
{
	public function sukses(){
        Session::flash('sukses', 'Ini notifikasi SUKSES');
        return redirect(route('inkubator.kategori.create'));
    }

    public function peringatan(){
        Session::flash('peringatan', 'Ini notifikasi PERINGATAN');
        return redirect(route('inkubator.kategori.create'));
    }

    public function gagal(){
        Session::flash('gagal', 'Ini notifikasi GAGAL');
        return redirect(route('inkubator.kategori.create'));
    }
	public function create(){
		$berita_category = Kategori::orderBy('category')->get();
		$datas = array(
			'berita_category' => $berita_category,
			'no'        => 1
		);

		$data = array('title'   => 'category');
		return view('kategori.create',$data,$datas);
	}
	public function store(){
		Kategori::create([
			'category'      => request('category'),
        ]);

        Session::flash('sukses', 'Ini notifikasi SUKSES');
		return redirect(route('inkubator.kategori.create'));
	}
	public function edit(Kategori $kategori)
	{
		$data = array(
			'title'       => 'Kategori',
			'kategori'     => $kategori
		);
		return view('kategori.edit',$data);
	}

	public function update(Kategori $kategori)
	{
		$kategori->update([
			'category'      => request('category'),
        ]);
        Session::flash('peringatan', 'BERHASIL DIEDIT');
		return redirect(route('inkubator.kategori.create'));
	}

	public function destroy(Kategori $kategori){
    	$kategori->delete();

        Session::flash('gagal', 'BERHASIL DIHAPUS');
        return redirect(route('inkubator.kategori.create'));
	}
}

