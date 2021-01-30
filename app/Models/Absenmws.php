<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Santri;

class Absenmws extends Authenticatable {

	protected $table = 'absen_mws';
    use HasFactory, Notifiable;

	function Santri(){
   		return $this->belongsTo(Santri::class, 'id_santri');
   	}
}

