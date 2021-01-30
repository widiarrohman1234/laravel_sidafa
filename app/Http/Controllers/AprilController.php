<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\April;
use App\Models\Santri;



class AprilController extends Controller
{
    function index(){
        $data['target'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as aktif'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->get();

        $data['sudah'] =  DB::table('april')
        	->count();

        $data['belum'] =  DB::table('april')
         	->select (DB::raw('COUNT(santri.id_santri) as belum_lunas'))
         	->rightjoin('santri', 'april.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->where('april.nominal')
        	->get();
        $data['belumSpp50'] =  DB::table('april')
         	->select (DB::raw('COUNT(santri.id_santri) as belumSpp50'))
         	->rightjoin('santri', 'april.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->whereIn('santri.sts_ads_spp',
            	['spp50','spp100','spp150','spp200','spp250'])
         	->where('april.nominal')
        	->get();
        $data['belumSpp300'] =  DB::table('april')
         	->select (DB::raw('COUNT(santri.id_santri) as belumSpp300'))
         	->rightjoin('santri', 'april.id_santri', '=', 'santri.id')
         	->where('sts_santri','=','aktif')
         	->where('jk','=','pria')
         	->whereIn('santri.sts_ads_spp',
            	['spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
         	->where('april.nominal')
        	->get();

		$data['index'] = DB::table('april')
            ->select('april.*', 'santri.id_santri', 'santri.nama_santri','santri.sts_ads_spp',
            	'administrasi.nama_administrasi', 'april.nominal', 'user.username')
            ->join('santri', 'april.id_santri', '=', 'santri.id')
            ->join('user', 'april.id_user', '=', 'user.id')
			->join('administrasi', 'april.id_administrasi', '=', 'administrasi.id')
			->latest()
            ->get();

       	$data['tunggakan'] = DB::table('april')
            ->select('santri.id_santri', 'santri.nama_santri', 'santri.sts_ads_spp', 'april.nominal', 'april.status')
            ->rightjoin('santri', 'april.id_santri', '=', 'santri.id')
            ->where('santri.sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->whereIn('santri.sts_ads_spp',
            	['spp50','spp100','spp150','spp200','spp250','spp300','spp350','spp400','spp450','spp500','spp550','spp600'])
            ->where('april.nominal')
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
		return view('admin.pembayaran.spp.april.index', $data);
	}

	function create(){
		$data['list_santri'] = DB::table('santri')
        	->select ('*')
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->get();
		return view('admin.pembayaran.spp.april.create',$data);
	}

	function store(){
		$april = new april;
		$april->id_santri = request('id_santri');
		$april->id_administrasi = request('id_administrasi');
		$april->id_user = request('id_user');
		$april->nominal = request('nominal');
		$april->waktu = request('waktu');
		$april->status = request('status');
		$april->keterangan = request('keterangan');

		$april->save();

		return redirect('admin/april')->with('success','Data Berhasil Ditambahkan');
		dd(request()->all());
	}

	function show(april $april){
		$data['april'] = $april;
		return view('admin.pembayaran.spp.april.show', $data);
	}

	function edit(april $april){
		$data['april'] = $april;
		return view('admin.pembayaran.spp.april.edit', $data);
	}

	function update(april $april){
		$april->id_santri = request('id_santri');
		$april->id_administrasi = request('id_administrasi');
		$april->id_user = request('id_user');
		$april->nominal = request('nominal');
		$april->waktu = request('waktu');
		$april->status = request('status');
		$april->keterangan = request('keterangan');
		$april->save();

		return redirect('admin/april')->with('success','Data Berhasil Diubah');
	}

	function destroy(april $april){
		$april->delete();
		return redirect('admin/april')->with('danger','Data Berhasil Dihapus');
	}


	function kwitansiThermo(april $april){
		$data['april'] = $april;
		return view('admin.pembayaran.spp.april.kwitansiThermo', $data);
	}

	function kwitansiTinta(april $april){
		$data['april'] = $april;
		return view('admin.pembayaran.spp.april.kwitansiTinta', $data);
	}

}
