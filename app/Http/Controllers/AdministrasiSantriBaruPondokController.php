<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AdministrasiSantriBaru;
use App\Models\Santri;

class AdministrasiSantriBaruPondokController extends Controller
{
    function index(){
         $data['list_administrasi_santri_baru'] =  DB::table('administrasi_santri_baru')
            ->select ( 'santri.id_santri','santri.nama_santri','user.username','administrasi.nama_administrasi','administrasi_santri_baru.*')
            ->join ('santri', 'administrasi_santri_baru.id_santri', 'santri.id')
            ->join ('user', 'administrasi_santri_baru.id_user', 'user.id')
            ->join ('administrasi', 'administrasi_santri_baru.id_administrasi', 'administrasi.id')
            ->where ('ket','pondok')
            ->groupBy ('administrasi_santri_baru.id')
            ->latest('administrasi_santri_baru.id','desc')
            ->get();
            //dd($data['list_administrasi_santri_baru']);
        return view('admin.pembayaran.asb.pondok.index', $data);
    }


    function create(){
        $data['list_santri_a'] = DB::table('santri')
            ->select ('*')
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->get();

        $data['list_administrasi'] = DB::table('administrasi')
            ->select ('*')
            ->where ('ket','pondok')
            ->get();
        return view('admin.pembayaran.asb.pondok.create',$data);
    }


    function store()
    {
        $administrasi_santri_baru = new AdministrasiSantriBaru;
        $administrasi_santri_baru->id_santri = request('id_santri');
        $administrasi_santri_baru->id_administrasi = request('id_administrasi');
        $administrasi_santri_baru->id_user = request('id_user');
        $administrasi_santri_baru->nominal = request('nominal');
        $administrasi_santri_baru->waktu = request('waktu');
        $administrasi_santri_baru->status = request('status');
        $administrasi_santri_baru->keterangan = request('keterangan');
        $administrasi_santri_baru->save();
        //dd(request()->all());

        return redirect('admin/administrasisantribarupondok')->with('success','Data Berhasil Ditambahkan');
    }


    function show(AdministrasiSantriBaru $administrasisantribaru)
    {
        $data['administrasisantribaru'] = $administrasisantribaru;
        return view('admin.pembayaran.asb.pondok.show', $data);
    }

    function edit(AdministrasiSantriBaru $administrasisantribaru)
    {
        $data['administrasisantribaru'] = $administrasisantribaru;
        $data['list_santri_a'] = DB::table('santri')
            ->select ('*')
            ->where('sts_santri','=','aktif')
            ->where('jk','=','pria')
            ->get();
        $data['list_administrasi'] = DB::table('administrasi')
            ->select ('*')
            ->where ('ket','asb')
            ->get();
        return view('admin.pembayaran.asb.pondok.edit',$data);
    }

    function update(AdministrasiSantriBaru $administrasisantribaru)
    {
        $administrasisantribaru->id_santri = request('id_santri');
        $administrasisantribaru->id_administrasi = request('id_administrasi');
        $administrasisantribaru->id_user = request('id_user');
        $administrasisantribaru->nominal = request('nominal');
        $administrasisantribaru->waktu = request('waktu');
        $administrasisantribaru->status = request('status');
        $administrasisantribaru->keterangan = request('keterangan');
        $administrasisantribaru->save();
        // dd(request()->all());

        return redirect('admin/administrasisantribarupondok')->with('success','Data Berhasil Diubah');
    }

    function destroy(AdministrasiSantriBaru $administrasisantribaru)
    {
        $administrasisantribaru->delete();
        return redirect('admin/administrasisantribarupondok')->with('danger','Data Berhasil Dihapus');
    }

    function kwitansiThermo(AdministrasiSantriBaru $id)
    {
       $data['administrasisantribaru'] = $id;
        return view('admin.pembayaran.asb.pondok.kwitansiThermo', $data);
    }

    function kwitansiTinta(AdministrasiSantriBaru $id)
    {
       $data['administrasisantribaru'] = $id;
        return view('admin.pembayaran.asb.pondok.kwitansiTinta', $data);
    }
}
