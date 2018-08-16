<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Model\Dapus;
use App\Model\Deskripsi;

class AboutController
{
    public function index()
    {
        $dapus = Dapus::all();
        $deskripsi = Deskripsi::select('id_deskripsi','deskripsi', 'judul', 'file')->get();
        // dd($dapus);
        // dd($deskripsi);
        return view('user.about')->with(compact(['deskripsi',$deskripsi],['dapus',$dapus] ));
    }
}
