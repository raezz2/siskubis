<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Komentar;
use App\User;
use DB;

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
        $mainNews = Berita::with('beritaCategory')
                    ->orderBy('views','desc')
                    ->where('publish','=','1')
                    ->where('inkubator_id','=','0')
                    ->paginate(1);
        $lastNews = Berita::with('beritaCategory')
                    ->orderBy('created_at','desc')
                    ->where('publish','=','1')
                    ->where('inkubator_id','=','0')
                    ->paginate(4);
        $popular = Berita::with('beritaCategory')
                    ->orderBy('views','desc')
                    ->where('publish','=','1')
                    ->where('inkubator_id','=','0')
                    ->paginate(7);

        $berita = Berita::with('profil_user')->orderBy('created_at','desc')->paginate(10);
        $umum = Berita::with('profil_user')->where('inkubator_id','0')->orderBy('created_at','desc')->paginate(5);
        $hasil = Komentar::orderBy('created_at','desc')->paginate(5);
        
        
        return view('front.index', compact('mainNews','lastNews','popular', 'hasil'));
    }

    public function all()
    {
        $mainNews = Berita::with('beritaCategory')
                    ->orderBy('views','desc')
                    ->where('publish','=','1')
                    ->where('inkubator_id','=','0')
                    ->paginate(1);
        $lastNews = Berita::with('beritaCategory')
                    ->orderBy('created_at','desc')
                    ->where('publish','=','1')
                    ->where('inkubator_id','=','0')
                    ->paginate(10);
        $popular = Berita::with('beritaCategory')
                    ->orderBy('views','desc')
                    ->where('publish','=','1')
                    ->where('inkubator_id','=','0')
                    ->paginate(7);

        return view('front.all', compact('mainNews','lastNews','popular'));
    }

    public function single($slug)
    {
        $berita = Berita::find($slug);
        $berita = Berita::with(['beritaCategory','profil_user'])->where('slug', $slug)->first();
        $view = $berita->views + 1;
        $berita->update([
            'views' => $view,
        ]);
        $komentar = DB::table('berita_komentar')->where('berita_id',$berita->id)->orderBy('created_at','desc')->get();
        $total_komentar = DB::table('berita_komentar')->where('berita_id',$berita->id)->count();
        $recommend = Berita::with('beritaCategory')
                    ->where('berita_category_id', $berita->beritaCategory->id)
                    ->where('id','!=',$berita->id)
                    ->orderBy('created_at','desc')
                    ->paginate(2);
        $recent = Berita::with('beritaCategory')->orderBy('created_at','desc')->paginate(4);

        return view('front.single', compact('berita','komentar','total_komentar','recommend','recent'));
    }

    
}
