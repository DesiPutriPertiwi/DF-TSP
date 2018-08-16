<?php

namespace App\Model;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Dapus extends Authenticatable
{
    public $table = 'dapus';
    public $timestamps = false;
    protected $fillable = [
        'dapus', 'id_dapus', 'sitasi',
    ];  

}
