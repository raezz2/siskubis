<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Berita;
use App\kategori;
use App\Inkubator;
use App\profil_user;
use App\Komentar;
use App\User;
use Auth;
use Validator;
use File;

class BeritaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $berita = Berita::with('profil_user')->orderBy('created_at','ASC')->paginate(5);
        $umum = Berita::with('profil_user')->where('inkubator_id','0')->orderBy('created_at','ASC')->paginate(5);
		$hasil = Komentar::all();

        return view('berita.index',compact('berita', 'umum', 'hasil'));
    }

    public function search(Request $request){
        $cari = $request->input('search');
        $tgl = $request->input('tgl');
        $status = $request->input('status');
        if($status == '3'){
            $berita = Berita::where('created_at','LIKE', $tgl.'%')->where('tittle','LIKE','%'.$cari.'%')->paginate(10);
        } else {
            $berita = Berita::where('publish','=',$status)->where('created_at','LIKE', $tgl.'%')->where('tittle','LIKE','%'.$cari.'%')->paginate(10);
        }



        // $berita = Berita::where('created_at','LIKE','%'.$cari.'%')->paginate(10);
        // if($request->has('tgl')){
        // $berita->where('created_at','=', $tgl);
        // }
        // if($request->has('search')){
        // $berita->where('tittle','LIKE','%'.$cari.'%');
        //  }

       $umum = Berita::with('profil_user')->where('inkubator_id','0')->orderBy('created_at','ASC')->paginate(5);
         //return response()->json($berita);
        return view('berita.index', compact('berita','cari','umum'));
    }

    public function create()
    {
        $kategori_berita =  kategori::orderBy('category')->get();
        $inkubator = Inkubator::orderBy('nama')->get();
        $penulis = profil_user::orderBy('nama')->get();

        return view('berita.formTambah',compact('kategori_berita','inkubator','penulis'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tittle'                => 'required',
            'berita'                => 'required',
            'berita_category_id'    => 'required|exists:berita_category,id',
            'publish'               => 'required',
            'author_id'             => 'required|exists:profil_user,user_id',
            'inkubator_id'          => 'required|exists:inkubator,id',
            'foto'                  => 'required|image|mimes:jpg,png,jpeg',

        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . Str::slug($request->tittle) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/berita', $filename);

            $berita = Berita::create([
                'tittle'                => $request->tittle,
                'slug'                  => Str::slug($request->tittle),
                'berita'                => $request->berita,
                'berita_category_id'    => $request->berita_category_id,
                'publish'               => $request->publish,
                'author_id'             => $request->author_id,
                'inkubator_id'          => $request->inkubator_id,
                'foto'                  => $filename,
                'views'                 => $request->views
            ]);

            return redirect(route('inkubator.berita'))->with(['success' => 'berita berhasil dipublish']);
        }
    }

    public function destroy(Berita $berita)
    {
        $berita->delete();
        File::delete(storage_path('app/public/berita/' . $berita->foto));

        return redirect(route('inkubator.berita'))->with(['success' => 'berita berhasil dihapus']);
    }

    public function edit($id)
    {
        $berita = berita::find($id);
        $kategori =  kategori::orderBy('category')->get();
        $inkubator = Inkubator::orderBy('nama')->get();
        $penulis = profil_user::orderBy('nama')->get();

        return view('berita.formEditBerita', compact('berita','kategori', 'inkubator','penulis'));
    }

    public function update($id, Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tittle'                => 'required',
            'berita'                => 'required',
            'berita_category_id'    => 'required|exists:berita_category,id',
            'publish'               => 'required',
            'author_id'             => 'required|exists:profil_user,user_id',
            'inkubator_id'          => 'required|exists:inkubator,id',
            'foto'                  => 'required|image|mimes:jpg,png,jpeg',

        ]);
        $berita = Berita::find($id);
        $filename = $berita->foto;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . Str::slug($request->tittle) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/berita', $filename);
            File::delete(storage_path('app/public/berita/' . $produk->foto));
        }
        $berita->update([
            'tittle'                => $request->tittle,
            'slug'                  => Str::slug($request->tittle),
            'berita'                => $request->berita,
            'berita_category_id'    => $request->berita_category_id,
            'publish'               => $request->publish,
            'author_id'             => $request->author_id,
            'inkubator_id'          => $request->inkubator_id,
            'foto'                  => $filename,
            'views'                 => $request->views
        ]);

        return redirect(route('inkubator.berita'))->with(['success' => 'berita berhasil dipublish']);

    }

    public function show($slug)
    {
        $berita = Berita::with(['beritaCategory','profil_user'])->where('slug', $slug)->first();
        $view = $berita->views + 1;
        $berita->update([
            'views' => $view,
        ]);
        $umum = Berita::with('profil_user')->where('inkubator_id','0')->orderBy('created_at','ASC')->paginate(5);

        return view('berita.showBerita', compact('berita','umum'));
    }
	    public function single()
    {
        $hasil = User::all();
        return view('front.single',['hasil'=>$hasil]);
    }
}
