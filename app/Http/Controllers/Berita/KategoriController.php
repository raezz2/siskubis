<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kategori;


class KategoriController extends Controller
{
    public function index(){
		$berita_category = Kategori::All();
		$data = array(
			'berita_category' => $berita_category,
			'no'        => 1
		);
		return view('kategori.index',$data);
	}
	public function create(){
		$data = array('title'   => 'category');
		return view('kategori.create',$data);
	}
	public function store(){
		Kategori::create([
			'category'      => request('category'),
		]);
		return redirect('/inkubator/berita/kategori');
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
		return redirect('/inkubator/berita/kategori');
	}

    $kategori->delete();
	public function destroy(Kategori $kategori){
        return redirect('/inkubator/berita/kategori');
	}
}
