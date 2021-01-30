<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Februari;
use App\Models\Santri;



class FebruariController extends Controller
{
    function index(){
        $data['target'] =  DB::table('santri')
            ->select (DB::raw('COUNT(id) as aktif'))
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->get();
        $data['sudah'] =  DB::table('februari')
            ->select (DB::raw('COUNT(santri.id_santri) as lunas'))
            ->rightjoin('santri', 'februari.id_santri', '=', 'santri.id')
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->where('status','=','lunas')
            ->get();
        $data['belum'] =  DB::table('februari')
            ->select (DB::raw('COUNT(santri.id_santri) as belum_lunas'))
            ->rightjoin('santri', 'februari.id_santri', '=', 'santri.id')
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->where('februari.nominal')
            ->get();
        $data['belumSpp50'] =  DB::table('februari')
            ->select (DB::raw('COUNT(santri.id_santri) as belumSpp50'))
            ->rightjoin('santri', 'februari.id_santri', '=', 'santri.id')
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->whereIn('santri.sts_ads_spp',
                ['spp50','spp100','spp150','spp200','spp250'])
            ->where('februari.nominal')
            ->get();
        $data['belumSpp300'] =  DB::table('februari')
            ->select (DB::raw('COUNT(santri.id_santri) as belumSpp300'))
            ->rightjoin('santri', 'februari.id_santri', '=', 'santri.id')
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->whereIn('santri.sts_ads_spp',
                ['spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
            ->where('februari.nominal')
            ->get();
        $data['index'] = DB::table('februari')
            ->select('februari.*', 'santri.id_santri', 'santri.nama_santri','santri.sts_ads_spp',
                'administrasi.nama_administrasi', 'februari.nominal', 'user.username')
            ->join('santri', 'februari.id_santri', '=', 'santri.id')
            ->join('user', 'februari.id_user', '=', 'user.id')
            ->join('administrasi', 'februari.id_administrasi', '=', 'administrasi.id')
            ->latest()
            ->get();
        $data['tunggakan'] = DB::table('februari')
            ->select('santri.id_santri', 'santri.nama_santri', 'santri.sts_ads_spp', 'februari.nominal', 'februari.status')
            ->rightjoin('santri', 'februari.id_santri', '=', 'santri.id')
            ->where('santri.sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->whereIn('santri.sts_ads_spp',
                ['spp50','spp100','spp150','spp200','spp250','spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
            ->where('februari.nominal')
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
		return view('admin.pembayaran.spp.februari.index', $data);
	}

	function create(){
        $data['list_santri_a'] = DB::table('santri')
            ->select ('*')
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->get();
        $data['list_santri_i'] = DB::table('santri')
            ->select ('*')
            ->where('sts_santri','=','aktif')
            ->where('jk','=','wanita')
            ->get();    
		return view('admin.pembayaran.spp.februari.create',$data);
	}

	function store(){
		$februari = new februari;
		$februari->id_santri = request('id_santri');
		$februari->id_administrasi = request('id_administrasi');
		$februari->id_user = request('id_user');
		$februari->nominal = request('nominal');
		$februari->waktu = request('waktu');
		$februari->status = request('status');
		$februari->keterangan = request('keterangan');

		$februari->save();

		return redirect('admin/februari')->with('success','Data Berhasil Ditambahkan');
		dd(request()->all());
	}

	function show(februari $februari){
		$data['februari'] = $februari;
		return view('admin.pembayaran.spp.februari.show', $data);
	}

	function edit(februari $februari){
		$data['februari'] = $februari;
		return view('admin.pembayaran.spp.februari.edit', $data);
	}

	function update(februari $februari){
		$februari->id_santri = request('id_santri');
		$februari->id_administrasi = request('id_administrasi');
		$februari->id_user = request('id_user');
		$februari->nominal = request('nominal');
		$februari->waktu = request('waktu');
		$februari->status = request('status');
		$februari->keterangan = request('keterangan');
		$februari->save();

		return redirect('admin/februari')->with('success','Data Berhasil Diubah');
	}

	function destroy(februari $februari){
		$februari->delete();
		return redirect('admin/februari')->with('danger','Data Berhasil Dihapus');
	}


	function kwitansiThermo(februari $februari){
		$data['februari'] = $februari;
		return view('admin.pembayaran.spp.februari.kwitansiThermo', $data);
	}

	function kwitansiTinta(februari $februari){
		$data['februari'] = $februari;
		return view('admin.pembayaran.spp.februari.kwitansiTinta', $data);
	}

}
