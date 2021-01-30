<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Santri;
use App\Models\Administrasi;
use App\Models\User;

class AdministrasiSantriBaru extends Model
{
  use HasFactory;
	protected $table='administrasi_santri_baru';

	function Santri(){
   		return $this->belongsTo(Santri::class, 'id_santri');
   	}

   	function Administrasi(){
   		return $this->belongsTo(Administrasi::class, 'id_administrasi');
   	}

   	function User(){
   		return $this->belongsTo(User::class, 'id_user');
   	}
}
