<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class KadarAir extends Authenticatable
{
    public $table = 'kadar_air';
    public $timestamps = false;
    protected $primarykey = 'id_kadarAir';
    protected $fillable = [
        'kadarAir', 'sitasi_id', 'contohKadar_id', 'jenisTanah_Id',
    ];  
}
