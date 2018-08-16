<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\Jenis_Tanah;

class HomeController
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    public function index()
    {
        $jenis_tanah = Jenis_Tanah::select('id_tanah','nama_tanah')->get();

        return view('user.home')->with(compact('jenis_tanah',$jenis_tanah));
    }
}
