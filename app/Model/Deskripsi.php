<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Deskripsi extends Authenticatable
{
    public $table = 'deskripsi_penelitian';
    public $timestamps = false;
    protected $fillable = [
        'deskripsi', 'id_deskripsi', 'judul', 'file' 
    ];  

}
