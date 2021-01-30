<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Santri;

class SantriController extends Controller
{
	function index(){
		// $user = request()->user();
		// putra
			// total
		$data['putra_total'] = DB::table('santri')
			->select('*')
			->where('jk','=','pria')
			->get();
		$data['count_putra_total'] = DB::table('santri')
			->select(DB::raw('COUNT(id) as total'))
			->where('jk','=','pria')
			->get();

			// aktif
		$data['putra_aktif'] = DB::table('santri')
			->select('*')
			->where('sts_santri','=','aktif')
			->where('jk','=','pria')
			->get();
		$data['count_putra_aktif'] = DB::table('santri')
			->select(DB::raw('COUNT(id) as aktif'))
			->where('sts_santri','=','aktif')
			->where('jk','=','pria')
			->get();

			// alumni
		$data['putra_alumni'] = DB::table('santri')
			->select('*')
			->where('sts_santri','=','alumni')
			->where('jk','=','pria')
			->get();
		$data['count_putra_alumni'] = DB::table('santri')
			->select(DB::raw('COUNT(id) as alumni'))
			->where('sts_santri','=','alumni')
			->where('jk','=','pria')
			->get();

		// putri
			// total
		$data['putri_total'] = DB::table('santri')
			->select('*')
			->where('jk','=','wanita')
			->get();
		$data['count_putri_total'] = DB::table('santri')
			->select(DB::raw('COUNT(id) as total'))
			->where('jk','=','wanita')
			->get();
			// aktif
		$data['putri_aktif'] = DB::table('santri')
			->select('*')
			->where('sts_santri','=','aktif')
			->where('jk','=','wanita')
			->get();
		$data['count_putri_aktif'] = DB::table('santri')
			->select(DB::raw('COUNT(id) as aktif'))
			->where('sts_santri','=','aktif')
			->where('jk','=','wanita')
			->get();
			// alumni
		$data['putri_alumni'] = DB::table('santri')
			->select('*')
			->where('sts_santri','=','alumni')
			->where('jk','=','wanita')
			->get();
		$data['count_putri_alumni'] = DB::table('santri')
			->select(DB::raw('COUNT(id) as alumni'))
			->where('sts_santri','=','alumni')
			->where('jk','=','wanita')
			->get();

		return view('admin.santri.index', $data);
	}

	function create(){
		return view('admin.santri.create');
	}

	function store(){
		$santri = new Santri;
		$santri->id_santri = request('id_santri');
		$santri->no_pend = request('no_pend');
		$santri->nik = request('nik');
		$santri->nama_santri = request('nama_santri');
		$santri->sts_santri = request('sts_santri');
		$santri->tgl_msk = request('tgl_msk');
		$santri->tgl_berhenti = request('tgl_berhenti');
		$santri->sts_ads_spp = request('sts_ads_spp');
		$santri->sts_ads_ip = request('sts_ads_ip');
		$santri->sts_ads_lmr = request('sts_ads_lmr');
		$santri->sts_ads_qrn = request('sts_ads_qrn');
		$santri->sts_ads_ssmp = request('sts_ads_ssmp');
		$santri->sts_ads_rsmp = request('sts_ads_rsmp');
		$santri->sts_ads_ssma = request('sts_ads_ssma');
		$santri->sts_ads_rsma = request('sts_ads_rsma');
		$santri->sts_ads_ssmk = request('sts_ads_ssmk');
		$santri->sts_ads_rsmk = request('sts_ads_rsmk');
		$santri->frl = request('frl');
		$santri->ta = request('ta');
		$santri->kmr = request('kmr');
		$santri->jk = request('jk');
		$santri->tpt_lhr_santri = request('tpt_lhr_santri');
		$santri->tgl_lhr_santri = request('tgl_lhr_santri');
		$santri->alamat = request('alamat');
		$santri->rt = request('rt');
		$santri->rw = request('rw');
		$santri->des_kel = request('des_kel');
		$santri->kec = request('kec');
		$santri->kab_kota = request('kab_kota');
		$santri->prov = request('prov');
		$santri->no_kk = request('no_kk');
		$santri->nm_ayah = request('nm_ayah');
		$santri->tpt_lhr_ayah = request('tpt_lhr_ayah');
		$santri->tgl_lhr_ayah = request('tgl_lhr_ayah');
		$santri->alamat_ayah = request('alamat_ayah');
		$santri->no_hp_ayah = request('no_hp_ayah');
		$santri->pkj_ayah = request('pkj_ayah');
		$santri->penghasilan_ayah = request('penghasilan_ayah');
		$santri->nm_ibu = request('nm_ibu');
		$santri->tpt_lhr_ibu = request('tpt_lhr_ibu');
		$santri->tgl_lhr_ibu = request('tgl_lhr_ibu');
		$santri->alamat_ibu = request('alamat_ibu');
		$santri->no_hp_ibu = request('no_hp_ibu');
		$santri->pkj_ibu = request('pkj_ibu');
		$santri->penghasilan_ibu = request('penghasilan_ibu');
		$santri->nm_wali = request('nm_wali');
		$santri->tpt_lhr_wali = request('tpt_lhr_wali');
		$santri->tgl_lhr_wali = request('tgl_lhr_wali');
		$santri->alamat_wali = request('alamat_wali');
		$santri->no_hp_wali = request('no_hp_wali');
		$santri->pkj_wali = request('pkj_wali');
		$santri->penghasilan_wali = request('penghasilan_wali');
		$santri->save();

		//dd(request()->all());
		return redirect('admin/santri')->with('success','Data Berhasil Ditambahkan');
	}

	function show(Santri $santri){
		$data['santri'] = $santri;
		return view('admin.santri.show', $data);
	}

	function edit(Santri $santri){
		$data['santri'] = $santri;
		return view('admin.santri.edit', $data);
	}

	function update(Santri $santri){
		$santri->id_santri = request('id_santri');
		$santri->no_pend = request('no_pend');
		$santri->nik = request('nik');
		$santri->nama_santri = request('nama_santri');
		$santri->sts_santri = request('sts_santri');
		$santri->tgl_msk = request('tgl_msk');
		$santri->tgl_berhenti = request('tgl_berhenti');
		$santri->sts_ads_spp = request('sts_ads_spp');
		$santri->sts_ads_ip = request('sts_ads_ip');
		$santri->sts_ads_lmr = request('sts_ads_lmr');
		$santri->sts_ads_qrn = request('sts_ads_qrn');
		$santri->sts_ads_ssmp = request('sts_ads_ssmp');
		$santri->sts_ads_rsmp = request('sts_ads_rsmp');
		$santri->sts_ads_ssma = request('sts_ads_ssma');
		$santri->sts_ads_rsma = request('sts_ads_rsma');
		$santri->sts_ads_ssmk = request('sts_ads_ssmk');
		$santri->sts_ads_rsmk = request('sts_ads_rsmk');
		$santri->frl = request('frl');
		$santri->ta = request('ta');
		$santri->kmr = request('kmr');
		$santri->jk = request('jk');
		$santri->tpt_lhr_santri = request('tpt_lhr_santri');
		$santri->tgl_lhr_santri = request('tgl_lhr_santri');
		$santri->alamat = request('alamat');
		$santri->rt = request('rt');
		$santri->rw = request('rw');
		$santri->des_kel = request('des_kel');
		$santri->kec = request('kec');
		$santri->kab_kota = request('kab_kota');
		$santri->prov = request('prov');
		$santri->no_kk = request('no_kk');
		$santri->nm_ayah = request('nm_ayah');
		$santri->tpt_lhr_ayah = request('tpt_lhr_ayah');
		$santri->tgl_lhr_ayah = request('tgl_lhr_ayah');
		$santri->alamat_ayah = request('alamat_ayah');
		$santri->no_hp_ayah = request('no_hp_ayah');
		$santri->pkj_ayah = request('pkj_ayah');
		$santri->penghasilan_ayah = request('penghasilan_ayah');
		$santri->nm_ibu = request('nm_ibu');
		$santri->tpt_lhr_ibu = request('tpt_lhr_ibu');
		$santri->tgl_lhr_ibu = request('tgl_lhr_ibu');
		$santri->alamat_ibu = request('alamat_ibu');
		$santri->no_hp_ibu = request('no_hp_ibu');
		$santri->pkj_ibu = request('pkj_ibu');
		$santri->penghasilan_ibu = request('penghasilan_ibu');
		$santri->nm_wali = request('nm_wali');
		$santri->tpt_lhr_wali = request('tpt_lhr_wali');
		$santri->tgl_lhr_wali = request('tgl_lhr_wali');
		$santri->alamat_wali = request('alamat_wali');
		$santri->no_hp_wali = request('no_hp_wali');
		$santri->pkj_wali = request('pkj_wali');
		$santri->penghasilan_wali = request('penghasilan_wali');
		$santri->save();

		return redirect('admin/santri')->with('success','Data Berhasil Diubah');
	}

	function destroy(Santri $santri){
		$santri->delete();
		return redirect('admin/santri')->with('danger','Data Berhasil Dihapus');
	}

}