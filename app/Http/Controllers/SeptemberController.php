<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\September;
use App\Models\Santri;



class SeptemberController extends Controller
{
    function index(){
        $data['target'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as aktif'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->get();

        $data['sudah'] =  DB::table('september')
        	->count();

        $data['belum'] =  DB::table('september')
         	->select (DB::raw('COUNT(santri.id_santri) as belum_lunas'))
         	->rightjoin('santri', 'september.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->where('september.nominal')
        	->get();
        $data['belumSpp50'] =  DB::table('september')
         	->select (DB::raw('COUNT(santri.id_santri) as belumSpp50'))
         	->rightjoin('santri', 'september.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->whereIn('santri.sts_ads_spp',
            	['spp50','spp100','spp150','spp200','spp250'])
         	->where('september.nominal')
        	->get();
        $data['belumSpp300'] =  DB::table('september')
         	->select (DB::raw('COUNT(santri.id_santri) as belumSpp300'))
         	->rightjoin('santri', 'september.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->whereIn('santri.sts_ads_spp',
            	['spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
         	->where('september.nominal')
        	->get();

		$data['index'] = DB::table('september')
            ->select('september.*', 'santri.id_santri', 'santri.nama_santri','santri.sts_ads_spp',
            	'administrasi.nama_administrasi', 'september.nominal', 'user.username')
            ->join('santri', 'september.id_santri', '=', 'santri.id')
            ->join('user', 'september.id_user', '=', 'user.id')
			->join('administrasi', 'september.id_administrasi', '=', 'administrasi.id')
			->latest()
            ->get();

       	$data['tunggakan'] = DB::table('september')
            ->select('santri.id_santri', 'santri.nama_santri', 'santri.sts_ads_spp', 'september.nominal', 'september.status')
            ->rightjoin('santri', 'september.id_santri', '=', 'santri.id')
            ->where('santri.sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->whereIn('santri.sts_ads_spp',
            	['spp50','spp100','spp150','spp200','spp250','spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
            ->where('september.nominal')
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
		return view('admin.pembayaran.spp.september.index', $data);
	}

	function create(){
		$data['list_santri'] = DB::table('santri')
        	->select ('*')
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->get();
		return view('admin.pembayaran.spp.september.create',$data);
	}

	function store(){
		$september = new september;
		$september->id_santri = request('id_santri');
		$september->id_administrasi = request('id_administrasi');
		$september->id_user = request('id_user');
		$september->nominal = request('nominal');
		$september->waktu = request('waktu');
		$september->status = request('status');
		$september->keterangan = request('keterangan');

		$september->save();

		return redirect('admin/september')->with('success','Data Berhasil Ditambahkan');
		dd(request()->all());
	}

	function show(september $september){
		$data['september'] = $september;
		return view('admin.pembayaran.spp.september.show', $data);
	}

	function edit(september $september){
		$data['september'] = $september;
		return view('admin.pembayaran.spp.september.edit', $data);
	}

	function update(september $september){
		$september->id_santri = request('id_santri');
		$september->id_administrasi = request('id_administrasi');
		$september->id_user = request('id_user');
		$september->nominal = request('nominal');
		$september->waktu = request('waktu');
		$september->status = request('status');
		$september->keterangan = request('keterangan');
		$september->save();

		return redirect('admin/september')->with('success','Data Berhasil Diubah');
	}

	function destroy(september $september){
		$september->delete();
		return redirect('admin/september')->with('danger','Data Berhasil Dihapus');
	}


	function kwitansiThermo(september $september){
		$data['september'] = $september;
		return view('admin.pembayaran.spp.september.kwitansiThermo', $data);
	}

	function kwitansiTinta(september $september){
		$data['september'] = $september;
		return view('admin.pembayaran.spp.september.kwitansiTinta', $data);
	}

}
