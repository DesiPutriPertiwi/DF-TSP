<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Jenis_Tanah;


class Persamaan extends Authenticatable
{
    public $table = 'persamaan';
    public $timestamps = false;
    protected $primarykey = 'id_persamaan';
    protected $fillable = [
        'jenisTanah_id', 'persamaan_DF', 'persamaan_TSP', 'asal', 
    ];  

    public function jenisTanah() {
        return $this->belongsTo('App\Model\Jenis_Tanah');
    }
}
