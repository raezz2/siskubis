<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Tenant;
use DB;

class TenantController extends Controller
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
		//$data['data']=Tenant::where('inkubator_id',Auth::user()->inkubator_id)->leftJoin('tenant_user',['tenant.id'=>'tenant_user.tenant_id'])->leftJoin('tenant_mentor',['tenant.id'=>'tenant_mentor.tenant_id'])->select('tenant.*','tenant_user.user_id as personil','tenant_mentor.user_id as mentor')->get();
		$data['data']=Tenant::where('inkubator_id',Auth::user()->inkubator_id)->leftJoin('priority',['tenant.priority'=>'priority.id'])->get();
        // return response()->json($data);
		return view('tenant.index',$data);
    }
	
	public function kategori($kategori)
    {
        return view('tenant.'.$kategori);
    }
	public function detail($kategori,$id)
    {
        return view('tenant.'.$kategori);
    }
	

	
	
}
