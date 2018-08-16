<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Hasil_Contoh extends Authenticatable
{
    public $table = 'hasil_contoh';
    public $timestamps = false;
    protected $primarykey = 'id_contoh';
    protected $fillable = [
        'hasil_df', 'hasil_tsp', 'jenisTanah_id', 
    ];  

    public function jenisTanah() {
        return $this->belongsTo('App\Model\Jenis_Tanah');
    }
}
