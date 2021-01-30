<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Januari;
use App\Models\Santri;



class JanuariController extends Controller
{
    function index(){
        $data['target'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as aktif'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->get();

        $data['sudah'] =  DB::table('januari')
            ->select (DB::raw('COUNT(santri.id_santri) as lunas'))
            ->rightjoin('santri', 'januari.id_santri', '=', 'santri.id')
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->where('status','=','lunas')
            ->get();

        $data['belum'] =  DB::table('januari')
         	->select (DB::raw('COUNT(santri.id_santri) as belum_lunas'))
         	->rightjoin('santri', 'januari.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->where('januari.nominal')
        	->get();
        $data['belumSpp50'] =  DB::table('januari')
         	->select (DB::raw('COUNT(santri.id_santri) as belumSpp50'))
         	->rightjoin('santri', 'januari.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->whereIn('santri.sts_ads_spp',
            	['spp50','spp100','spp150','spp200','spp250'])
         	->where('januari.nominal')
        	->get();
        $data['belumSpp300'] =  DB::table('januari')
         	->select (DB::raw('COUNT(santri.id_santri) as belumSpp300'))
         	->rightjoin('santri', 'januari.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->whereIn('santri.sts_ads_spp',
            	['spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
         	->where('januari.nominal')
        	->get();

		$data['index'] = DB::table('januari')
            ->select('januari.*', 'santri.id_santri', 'santri.nama_santri','santri.sts_ads_spp',
            	'administrasi.nama_administrasi', 'januari.nominal', 'user.username')
            ->join('santri', 'januari.id_santri', '=', 'santri.id')
            ->join('user', 'januari.id_user', '=', 'user.id')
			->join('administrasi', 'januari.id_administrasi', '=', 'administrasi.id')
            ->where('jk','=','pria')
			->latest()
            ->get();

       	$data['tunggakan'] = DB::table('januari')
            ->select('santri.id_santri', 'santri.nama_santri', 'santri.sts_ads_spp', 'januari.nominal', 'januari.status')
            ->rightjoin('santri', 'januari.id_santri', '=', 'santri.id')
            ->where('santri.sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->whereIn('santri.sts_ads_spp',
            	['spp50','spp100','spp150','spp200','spp250','spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
            ->where('januari.nominal')
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

            // dd(request()->all());
		return view('admin.pembayaran.spp.januari.index', $data);
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
		return view('admin.pembayaran.spp.januari.create',$data);
	}

	function store(){
		$januari = new Januari;
		$januari->id_santri = request('id_santri');
		$januari->id_administrasi = request('id_administrasi');
		$januari->id_user = request('id_user');
		$januari->nominal = request('nominal');
		$januari->waktu = request('waktu');
		$januari->status = request('status');
		$januari->keterangan = request('keterangan');

		$januari->save();

		return redirect('admin/januari')->with('success','Data Berhasil Ditambahkan');
		dd(request()->all());
	}

	function show(Januari $januari){
		$data['januari'] = $januari;
		return view('admin.pembayaran.spp.januari.show', $data);
	}

	function edit(Januari $januari){
		$data['januari'] = $januari;
		return view('admin.pembayaran.spp.januari.edit', $data);
	}

	function update(Januari $januari){
		$januari->id_santri = request('id_santri');
		$januari->id_administrasi = request('id_administrasi');
		$januari->id_user = request('id_user');
		$januari->nominal = request('nominal');
		$januari->waktu = request('waktu');
		$januari->status = request('status');
		$januari->keterangan = request('keterangan');
		$januari->save();

		return redirect('admin/januari')->with('success','Data Berhasil Diubah');
	}

	function destroy(Januari $januari){
		$januari->delete();
		return redirect('admin/januari')->with('danger','Data Berhasil Dihapus');
	}


	function kwitansiThermo(Januari $januari){
		$data['januari'] = $januari;
		return view('admin.pembayaran.spp.januari.kwitansiThermo', $data);
	}

	function kwitansiTinta(Januari $januari){
		$data['januari'] = $januari;
		return view('admin.pembayaran.spp.januari.kwitansiTinta', $data);
	}

}
