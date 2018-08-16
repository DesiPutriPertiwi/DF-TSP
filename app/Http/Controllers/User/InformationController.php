<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Model\Jenis_Tanah;
use App\Model\Persamaan;
use App\Model\Tutupan_Lahan;


class InformationController 
{

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function kadarAir()
    {
        return view('user.kadarAirTanah');
    }

    public function kecepatanAngin()
    {
        return view('user.kecepatanAngin');
    }

    public function klasifikasiTanah()
    {
        return view('user.klasifikasiTanah');
    }

    public function persamaan()
    {
        $persamaan = DB::table('persamaan')
                    ->join('jenis_tanah', 'jenisTanah_id', '=', 'id_tanah')
                    ->select('persamaan.*', 'jenis_tanah.nama_tanah')
                    ->get();
        
        return view('user.persamaan')->with(compact('persamaan',$persamaan));
    }

    public function tutupanLahan()
    {
        $tutupan = Tutupan_Lahan::all();
        return view('user.tutupanLahan')->with(compact('tutupan',$tutupan));
    }

    public function contohPerhitungan()
    {
        $tutupanLahan = DB::table('contoh_perhitungan')
                ->join('kecepatan_angin', 'id_contoh', '=','contohKecepatan_id')
                ->join('tutupan_lahan', 'tutupan_id', '=','id_tutupan')
                ->join('kadar_air', 'kadarAir_id', '=','id_kadarAir')
                ->select('contoh_perhitungan.*', 'tutupan_lahan.hutan', 'kecepatan_angin.kecepatan','kadar_air.kadarAir')
                ->get();

        $hasil = DB::table('hasil_contoh')
                ->join('jenis_tanah', 'jenisTanah_id', '=','id_tanah')
                ->select('hasil_contoh.*', 'jenis_tanah.nama_tanah')
                ->get(); 
        return view('user.contohPerhitungan')->with(compact(['tutupanLahan', $tutupanLahan], ['hasil', $hasil]));
    }
}
