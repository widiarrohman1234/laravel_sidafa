<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Santri;
use App\Models\Administrasi;
use App\Models\User;

class Maret extends Model
{
    use HasFactory;
    protected $table='maret';

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
