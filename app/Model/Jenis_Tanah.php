<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Model\Persamaan;

class Jenis_Tanah extends Authenticatable
{
    public $table = 'jenis_tanah';
    public $timestamps = false;
    protected $primarykey = 'id_tanah';
    protected $fillable = [
        'nama_tanah', 
    ];  

    public function persamaan()
    {
        return $this->hasMany('App\Model\Persamaan');
    }
}
