<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Deskripsi;
use App\Model\Dapus;

class IndexController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function dapus()
    {
        $dapus = Dapus::all();
        return view('admin.dapus')->with(compact('dapus', $dapus));
    }

    public function deskripsi()
    {
        // $deskripsi = Deskripsi::all();
        return view('admin.deskripsi');
    }
}
