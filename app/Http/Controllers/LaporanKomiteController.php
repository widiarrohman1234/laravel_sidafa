<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Januari;
use App\Models\Santri;

class LaporanKomiteController extends Controller
{
    function index(){
		$data['target'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as aktif'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->get();

        $data['nospp'] =  DB::table('santri')
        	->select (DB::raw('COUNT(id) as nospp'))
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','nospp')
        	->get();
        $data['siapanospp'] =  DB::table('santri')
        	->select ('*')
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
        $data['siapaspp50'] =  DB::table('santri')
        	->select ('*')
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
        $data['siapaspp100'] =  DB::table('santri')
        	->select ('*')
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
        $data['siapaspp150'] =  DB::table('santri')
        	->select ('*')
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
        $data['siapaspp200'] =  DB::table('santri')
        	->select ('*')
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
        $data['siapaspp250'] =  DB::table('santri')
        	->select ('*')
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
         $data['siapaspp300'] =  DB::table('santri')
        	->select ('*')
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
        $data['siapaspp350'] =  DB::table('santri')
        	->select ('*')
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
        $data['siapaspp400'] =  DB::table('santri')
        	->select ('*')
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
        $data['siapaspp450'] =  DB::table('santri')
        	->select ('*')
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
        $data['siapaspp500'] =  DB::table('santri')
        	->select ('*')
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
         $data['siapaspp550'] =  DB::table('santri')
        	->select ('*')
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
        $data['siapaspp600'] =  DB::table('santri')
        	->select ('*')
        	->where('sts_santri','=','aktif')
        	->where('jk','=','pria')
        	->where('santri.sts_ads_spp','=','spp600')
        	->get();

		return view('admin.laporan.laporanDataKomite', $data);
	}
}
