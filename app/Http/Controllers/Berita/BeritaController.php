<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Berita;
use App\kategori;
use App\Inkubator;
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
        $berita = Berita::with('beritaCategory','inkubator','user')->orderBy('created_at','ASC')->paginate(5);
        if (request()->search != '') {
            $berita = $berita->where('tittle', 'LIKE', '%' . request()->s . '%');
        }

        return view('berita.index',compact('berita', $berita));
    }

    public function create()
    {
        $kategori_berita =  kategori::all();
        $inkubator = Inkubator::all();

        return view('berita.formTambah',compact('kategori_berita','inkubator'));
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'tittle'                => 'required',
            'berita'                => 'required',
            'berita_category_id'    => 'required|exists:berita_category,id',
            'publish'               => 'required',
            'author_id'             => 'required|exists:user,id',
            'inkubator_id'          => 'required|exists:inkubator,id',
            'foto'                  => 'required|image|mimes:jpg,png,jpeg',

        ]);
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . Str::slug($request->tittle) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/berita', $filename);

            $berita = Berita::create([
                'tittle'                => $request->tittle,
                'slug'                  => $request->tittle,
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

}
