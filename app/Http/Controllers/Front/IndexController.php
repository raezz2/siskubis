<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Berita;

class IndexController extends Controller
{
    public function __construct()
    {
    //    $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $mainNews = Berita::with('beritaCategory')->orderBy('views')->paginate(1);
        $lastNews = Berita::with('beritaCategory')->orderBy('created_at')->paginate(4);
        $popular = Berita::with('beritaCategory')->orderBy('views','ASC')->paginate(7);



        return view('front.index', compact('mainNews','lastNews','popular'));
    }
	
	public function single()
    {
        return view('front.single');
    }
}
