<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Berita;
use App\kategori;
use App\Inkubator;
use App\profil_user;
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
        if (request()->s != '') {
            $berita = $berita->where('tittle', 'LIKE', '%' . request()->s . '%');
        }
        $umum = Berita::with('profil_user')->where('inkubator_id','0')->orderBy('created_at','ASC')->paginate(5);

        return view('berita.index',compact('berita', 'umum'));
    }

    public function search(Request $request){
        $cari = $request->get('search');
        $berita = Berita::where('tittle','LIKE','%'.$cari.'%')->paginate(10);
        return view('berita.index', compact('berita','cari'));
    }

    public function create()
    {
        $kategori_berita =  kategori::all();
        $inkubator = Inkubator::all();
        $penulis = profil_user::all();

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
        $kategori = kategori::all();
        $inkubator = Inkubator::all();

        return view('berita.formEditBerita', compact('berita','kategori', 'inkubator'));
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
        $view = $berita->views=+1;
        $berita->update([
            'views' => $view,
        ]);
        $umum = Berita::with('profil_user')->where('inkubator_id','0')->orderBy('created_at','ASC')->paginate(5);

        return view('berita.showBerita', compact('berita','umum'));
    }
}