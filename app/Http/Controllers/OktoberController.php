<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Oktober;
use App\Models\Santri;


class OktoberController extends Controller
{
    function index(){
		$data['target'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as aktif'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->get();

        $data['sudah'] =  DB::table('oktober')
        	->count();

        $data['belum'] =  DB::table('oktober')
         	->select (DB::raw('COUNT(santri.id_santri) as belum_lunas'))
         	->rightjoin('santri', 'oktober.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->where('oktober.nominal')
        	->get();
        $data['belumSpp50'] =  DB::table('oktober')
         	->select (DB::raw('COUNT(santri.id_santri) as belumSpp50'))
         	->rightjoin('santri', 'oktober.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->whereIn('santri.sts_ads_spp',
            	['spp50','spp100','spp150','spp200','spp250'])
         	->where('oktober.nominal')
        	->get();
        $data['belumSpp300'] =  DB::table('oktober')
         	->select (DB::raw('COUNT(santri.id_santri) as belumSpp300'))
         	->rightjoin('santri', 'oktober.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->whereIn('santri.sts_ads_spp',
            	['spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
         	->where('oktober.nominal')
        	->get();

		$data['index'] = DB::table('oktober')
            ->select('oktober.*', 'santri.id_santri', 'santri.nama_santri','santri.sts_ads_spp',
            	'administrasi.nama_administrasi', 'oktober.nominal', 'user.username')
            ->join('santri', 'oktober.id_santri', '=', 'santri.id')
            ->join('user', 'oktober.id_user', '=', 'user.id')
			->join('administrasi', 'oktober.id_administrasi', '=', 'administrasi.id')
			->latest()
            ->get();

       	$data['tunggakan'] = DB::table('oktober')
            ->select('santri.id_santri', 'santri.nama_santri', 'santri.sts_ads_spp', 'oktober.nominal', 'oktober.status')
            ->rightjoin('santri', 'oktober.id_santri', '=', 'santri.id')
            ->where('santri.sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->whereIn('santri.sts_ads_spp',
            	['spp50','spp100','spp150','spp200','spp250','spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
            ->where('oktober.nominal')
            ->get();
        $data['nospp'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as nospp'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','nospp')
        	->get();
        $data['spp50'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp50'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp50')
        	->get();
        $data['spp100'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp100'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp100')
        	->get();
        $data['spp150'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp150'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp150')
        	->get();
        $data['spp200'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp200'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp200')
        	->get();
        $data['spp250'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp250'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp250')
        	->get();
        $data['spp300'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp300'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp300')
        	->get();
        $data['spp350'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp350'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp350')
        	->get();
        $data['spp400'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp400'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp400')
        	->get();
        $data['spp450'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp450'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp450')
        	->get();
        $data['spp500'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp500'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp500')
        	->get();
        $data['spp550'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp550'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp550')
        	->get();
        $data['spp600'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as spp600'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp600')
        	->get();

        //rekap SPP
        $data['putra_khidmad'] = DB::table('santri')
            ->select(DB::raw('COUNT(id_santri) as khidmad_a'))
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->where('sts_ads_spp','=','nospp')
            ->get();
        $data['putra_spp50'] = DB::table('santri')
            ->select(DB::raw('COUNT(id_santri) as spp50_a'))
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->whereIn('sts_ads_spp',['spp50','spp100','spp150','spp200','spp250'])
            ->get();
        $data['putra_spp300'] = DB::table('santri')
            ->select(DB::raw('COUNT(id_santri) as spp300_a'))
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->whereIn('sts_ads_spp',['spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
            ->get();
		return view('admin.pembayaran.spp.oktober.index', $data);
	}

	function create(){
		$data['list_santri'] = DB::table('santri')
        	->select ('*')
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->get();
		return view('admin.pembayaran.spp.oktober.create',$data);
	}

	function store(){
		$oktober = new Oktober;
		$oktober->id_santri = request('id_santri');
		$oktober->id_administrasi = request('id_administrasi');
		$oktober->id_user = request('id_user');
		$oktober->nominal = request('nominal');
		$oktober->waktu = request('waktu');
		$oktober->status = request('status');
		$oktober->keterangan = request('keterangan');

		$oktober->save();

		return redirect('admin/oktober')->with('success','Data Berhasil Ditambahkan');
		dd(request()->all());
	}

	function show(Oktober $oktober){
		$data['oktober'] = $oktober;
		return view('admin.pembayaran.spp.oktober.show', $data);
	}

	function edit(Oktober $oktober){
		$data['oktober'] = $oktober;
		return view('admin.pembayaran.spp.oktober.edit', $data);
	}

	function update(Oktober $oktober){
		$oktober->id_santri = request('id_santri');
		$oktober->id_administrasi = request('id_administrasi');
		$oktober->id_user = request('id_user');
		$oktober->nominal = request('nominal');
		$oktober->waktu = request('waktu');
		$oktober->status = request('status');
		$oktober->keterangan = request('keterangan');
		$oktober->save();

		return redirect('admin/oktober')->with('success','Data Berhasil Diubah');
	}

	function destroy(Oktober $oktober){
		$oktober->delete();
		return redirect('admin/oktober')->with('danger','Data Berhasil Dihapus');
	}


	function kwitansiThermo(Oktober $oktober){
		$data['oktober'] = $oktober;
		return view('admin.pembayaran.spp.oktober.kwitansiThermo', $data);
	}

	function kwitansiTinta(Oktober $oktober){
		$data['oktober'] = $oktober;
		return view('admin.pembayaran.spp.oktober.kwitansiTinta', $data);
	}
}
