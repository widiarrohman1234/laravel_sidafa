<?php

namespace App\Http\Controllers;use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Absenmws;
use App\Models\Santri;



class AbsenmwsController extends Controller
{
    function index(){
    	$data['list_absenmws_putra'] =  DB::table('absen_mws')
        	->select ('*')
        	->rightjoin('santri', 'absen_mws.id_santri', '=', 'santri.id')
        	->where('status','=','hadir')
        	->where('jk','=','pria')
        	->get();

		$data['list_absenmws_putri'] =  DB::table('absen_mws')
        	->select ('*')
        	->rightjoin('santri', 'absen_mws.id_santri', '=', 'santri.id')
        	->where('status','=','hadir')
        	->where('jk','=','wanita')
        	->get();

		$data['laporan_a'] =  DB::table('absen_mws')
	        ->select('santri.id','santri.id_santri','santri.nama_santri',
	        	DB::raw("max(case when bln='01' THEN status else 0 end )as jan"),
	        	DB::raw("max(case when bln='02' THEN status else 0 end )as feb"),
	        	DB::raw("max(case when bln='03' THEN status else 0 end )as mar"),
	        	DB::raw("max(case WHEN bln='04' THEN status ELSE 0 end) as apr"),
				DB::raw("max(case WHEN bln='05' THEN status ELSE 0 end) as mei"),
				DB::raw("max(case WHEN bln='06' THEN status ELSE 0 end) as jun"),
				DB::raw("max(case WHEN bln='07' THEN status ELSE 0 end) as jul"),
				DB::raw("max(case WHEN bln='08' THEN status ELSE 0 end) as agu"),
				DB::raw("max(case WHEN bln='09' THEN status ELSE 0 end) as sep"),
				DB::raw("max(case WHEN bln='10' THEN status ELSE 0 end) as okt"),
				DB::raw("max(case WHEN bln='11' THEN status ELSE 0 end) as nov"),
				DB::raw("max(case WHEN bln='12' THEN status ELSE 0 end) as des"),
				DB::raw("count(status) as acount")
	    		)
	    	->join ('santri', 'absen_mws.id_santri', '=', 'santri.id')
	    	->where('jk','pria')
	    	->groupBy ('id_santri')
	        ->get();

	    $data['laporan_i'] =  DB::table('absen_mws')
	        ->select('santri.id','santri.id_santri','santri.nama_santri',
	        	DB::raw("max(case when bln='01' THEN status else 0 end )as jan"),
	        	DB::raw("max(case when bln='02' THEN status else 0 end )as feb"),
	        	DB::raw("max(case when bln='03' THEN status else 0 end )as mar"),
	        	DB::raw("max(case WHEN bln='04' THEN status ELSE 0 end) as apr"),
				DB::raw("max(case WHEN bln='05' THEN status ELSE 0 end) as mei"),
				DB::raw("max(case WHEN bln='06' THEN status ELSE 0 end) as jun"),
				DB::raw("max(case WHEN bln='07' THEN status ELSE 0 end) as jul"),
				DB::raw("max(case WHEN bln='08' THEN status ELSE 0 end) as agu"),
				DB::raw("max(case WHEN bln='09' THEN status ELSE 0 end) as sep"),
				DB::raw("max(case WHEN bln='10' THEN status ELSE 0 end) as okt"),
				DB::raw("max(case WHEN bln='11' THEN status ELSE 0 end) as nov"),
				DB::raw("max(case WHEN bln='12' THEN status ELSE 0 end) as des"),
				DB::raw("count(status) as acount")
	        	)
	    	->join ('santri', 'absen_mws.id_santri', '=', 'santri.id')
	    	->where('jk','wanita')
	    	->groupBy ('id_santri')
	        ->get();
		return view('admin.mws.index', $data);
	}

	function create(){
		$data['list_absenmws'] = DB::table('santri')
        	->select ('*')
        	->where('sts_santri','=','aktif')
        	->get();
		return view('admin.mws.create',$data);
	}

	function store(){
		$mws = new Absenmws;
		$mws->id_santri = request('id_santri');
		$mws->waktu = request('waktu');
		$mws->bln = request('bln');
		$mws->status = request('status');
		$mws->ket = request('ket');
		$mws->save();

		return redirect('admin/mws/create')->with('success','Data Berhasil Ditambahkan');
	}

	function show(Absenmws $mws){
		$data['mws'] = $mws;
		return view('admin.mws.show', $data);
	}

	function edit(Absenmws $mws){
		$data['mws'] = $mws;
		return view('admin.mws.edit', $data);
	}

	function update(Absenmws $mws){
		$mws->id_santri = request('id_santri');
		$mws->waktu = request('waktu');
		$mws->bln = request('bln');
		$mws->status = request('status');
		$mws->ket = request('ket');
		$mws->save();

		return redirect('admin/mws')->with('success','Data Berhasil Diubah');
	}

	function destroy(Absenmws $mws){
		$mws->delete();
		return redirect('admin/mws')->with('danger','Data Berhasil Dihapus');
	}

}
