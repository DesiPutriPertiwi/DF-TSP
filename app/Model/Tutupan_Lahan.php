<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Tutupan_Lahan extends Authenticatable
{
    public $table = 'tutupan_lahan';
    public $timestamps = false;
    protected $primarykey = 'id_tutupan';
    protected $fillable = [
        'daerah','h_primer', 'h_skunder', 'h_tanaman','hutan', 'non_hutan' 
    ];  

}
