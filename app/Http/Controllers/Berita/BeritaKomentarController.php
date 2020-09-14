<?php

namespace App\Http\Controllers\Berita;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Berita;
use App\Komentar;
use App\User;
use Auth;
use DB;

class BeritaKomentarController extends Controller
{
    public function comment(Request $request)
    {
        //VALIDASI DATA YANG DITERIMA
        $this->validate($request, [
            'id' => 'required',
            'komentar' => 'required'
        ]);
    
        Komentar::create([
            'berita_id' => $request->berita_id,
            //JIKA PARENT ID TIDAK KOSONG, MAKA AKAN DISIMPAN IDNYA, SELAIN ITU NULL
            'user_id' => Auth::user()->id,
            'komentar' => $request->komentar
        ]);
        return redirect()->back()->with(['success' => 'Komentar Ditambahkan']);
        // return $request->all();
    }
    public function destroy($id)
    {
        DB::table('berita_komentar')->where('id',$id)->delete();
    
	return redirect()->back()->with(['success' => 'Komentar Dihapus']);
    }

}
