<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Kategori;


class KategoriController extends Controller
{
	/*
    public function index(){
		$berita_category = Kategori::All();
		$data = array(
			'berita_category' => $berita_category,
			'no'        => 1
		);
		return view('kategori.index',$data);
	}
	*/
	public function create(){
		$berita_category = Kategori::All();
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
		return redirect(route('inkubator.kategori.create'));
	}

	public function destroy(Kategori $kategori){
    	$kategori->delete();
    	
        return redirect(route('inkubator.kategori.create'));
	}
}
