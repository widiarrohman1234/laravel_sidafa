<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Juli;
use App\Models\Santri;



class JuliController extends Controller
{
    function index(){
        $data['target'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as aktif'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->get();

        $data['sudah'] =  DB::table('juli')
        	->count();

        $data['belum'] =  DB::table('juli')
         	->select (DB::raw('COUNT(santri.id_santri) as belum_lunas'))
         	->rightjoin('santri', 'juli.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->where('juli.nominal')
        	->get();
        $data['belumSpp50'] =  DB::table('juli')
         	->select (DB::raw('COUNT(santri.id_santri) as belumSpp50'))
         	->rightjoin('santri', 'juli.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->whereIn('santri.sts_ads_spp',
            	['spp50','spp100','spp150','spp200','spp250'])
         	->where('juli.nominal')
        	->get();
        $data['belumSpp300'] =  DB::table('juli')
         	->select (DB::raw('COUNT(santri.id_santri) as belumSpp300'))
         	->rightjoin('santri', 'juli.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->whereIn('santri.sts_ads_spp',
            	['spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
         	->where('juli.nominal')
        	->get();

		$data['index'] = DB::table('juli')
            ->select('juli.*', 'santri.id_santri', 'santri.nama_santri','santri.sts_ads_spp',
            	'administrasi.nama_administrasi', 'juli.nominal', 'user.username')
            ->join('santri', 'juli.id_santri', '=', 'santri.id')
            ->join('user', 'juli.id_user', '=', 'user.id')
			->join('administrasi', 'juli.id_administrasi', '=', 'administrasi.id')
			->latest()
            ->get();

       	$data['tunggakan'] = DB::table('juli')
            ->select('santri.id_santri', 'santri.nama_santri', 'santri.sts_ads_spp', 'juli.nominal', 'juli.status')
            ->rightjoin('santri', 'juli.id_santri', '=', 'santri.id')
            ->where('santri.sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->whereIn('santri.sts_ads_spp',
            	['spp50','spp100','spp150','spp200','spp250','spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
            ->where('juli.nominal')
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
		return view('admin.pembayaran.spp.juli.index', $data);
	}

	function create(){
		$data['list_santri'] = DB::table('santri')
        	->select ('*')
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->get();
		return view('admin.pembayaran.spp.juli.create',$data);
	}

	function store(){
		$juli = new juli;
		$juli->id_santri = request('id_santri');
		$juli->id_administrasi = request('id_administrasi');
		$juli->id_user = request('id_user');
		$juli->nominal = request('nominal');
		$juli->waktu = request('waktu');
		$juli->status = request('status');
		$juli->keterangan = request('keterangan');

		$juli->save();

		return redirect('admin/juli')->with('success','Data Berhasil Ditambahkan');
		dd(request()->all());
	}

	function show(juli $juli){
		$data['juli'] = $juli;
		return view('admin.pembayaran.spp.juli.show', $data);
	}

	function edit(juli $juli){
		$data['juli'] = $juli;
		return view('admin.pembayaran.spp.juli.edit', $data);
	}

	function update(juli $juli){
		$juli->id_santri = request('id_santri');
		$juli->id_administrasi = request('id_administrasi');
		$juli->id_user = request('id_user');
		$juli->nominal = request('nominal');
		$juli->waktu = request('waktu');
		$juli->status = request('status');
		$juli->keterangan = request('keterangan');
		$juli->save();

		return redirect('admin/juli')->with('success','Data Berhasil Diubah');
	}

	function destroy(juli $juli){
		$juli->delete();
		return redirect('admin/juli')->with('danger','Data Berhasil Dihapus');
	}


	function kwitansiThermo(juli $juli){
		$data['juli'] = $juli;
		return view('admin.pembayaran.spp.juli.kwitansiThermo', $data);
	}

	function kwitansiTinta(juli $juli){
		$data['juli'] = $juli;
		return view('admin.pembayaran.spp.juli.kwitansiTinta', $data);
	}

}
