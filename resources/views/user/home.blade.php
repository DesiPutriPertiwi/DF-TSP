@extends('user.layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <img src="{{ asset('image/gambar1.png')}}" name="aboutme" width="1500" height="250">
            <h3 style="margin-top:25px"><b>Program Perhitungan Bangkitan Debu Jatuh (DF) dan Total <i>Suspended Particulate</i> (TSP)</b></h3>
            <break>
            <h5 class="row justify-content-center">&copy; Prof. Dr. Ir. Arief Sabdo Yuwono, M.SC dan Elsy Gustika Buana</h5>
            <break>
            <h5 class="row justify-content-center">Email: arief.sabdo.yuwono66@gmail.com</h5>
            <break>
            <h5 class="row justify-content-center">Departemen Teknik Sipil dan Lingkungan - IPB, Bogor</h5> 
        </div>

        <div class="row justify-content-center" style="margin-top:50px">
            <div class="col-md-10" style="margin-bottom:100px">
                <div class="card">
                    <div style="margin-top:15px;margin-bottom:15px;margin-left:15px;margin-right:15px;">
                        <h4><b>Petunjuk:</b></h4>
                        <ul>
                            <li>1. Pilihlah jenis tanah pada sel yang berwarna <span style="color:yellow"><b>KUNING</b></span> (huruf awal menggunakan huruf kapital)</li>
                            <li>2. Isilah angka pada sel-sel yang berwarna <span style="color:blue"><b>BIRU</b></span></li>
                            <li>3. Klik DF untuk menghitung kuantitas bangkitan debu jatuh dan TSP untuk menghitung kuantitas bangkitan TSP</li>
                        </ul>
                    </div>
                </div>

                <div class="card" style="margin-top:30px">
                    <div class="table100 ver2">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 column1 text-center">Parameter</th>
                                        <th class="cell100 column2 text-center">Simbol</th>
                                        <th class="cell100 column3 text-center">Kuantitas</th>
                                        <th class="cell100 column4 text-center">Satuan</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                        <div class="table100-body js-pscroll">
                            <table>
                                <tbody>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Jenis Tanah</td>
                                        <td class="cell100 column2 text-center">T</td>
                                        <td class="cell100 column3 text-center table-warning">
                                            <select id="T" name="jenis tanah" class="col-md-10">
                                                <option value="0">--Pilih Jenis Tanah--</option>
                                                @foreach($jenis_tanah as $tanah)
                                                    <option value="{{$tanah->nama_tanah}}">{{ ucfirst($tanah->nama_tanah)}}</option>
                                                @endforeach
                                            </select>
                                        </td>
                                        <td class="cell100 column4 text-center"></td>
								    </tr>
                                    <tr class="row100 body">
                                        <td class="cell100 column1">Kecepatan Angin</td>
                                        <td class="cell100 column2 text-center">U</td>
                                        <td class="cell100 column3 table-primary" align="center">
                                            <input class="col-md-10 text-right" id="U" type="number" placeholder="Tulis Angka">
                                        </td>
                                        <td class="cell100 column4 text-center">m/detik</td>
								    </tr>
                                     <tr class="row100 body">
                                        <td class="cell100 column1">Kadar Air Tanah</td>
                                        <td class="cell100 column2 text-center">M</td>
                                        <td class="cell100 column3  table-primary" align="center">
                                            <input class="col-md-10 text-right" id="M" type="number" placeholder="Tulis Angka">
                                        </td>
                                        <td class="cell100 column4 text-center">%</td>
								    </tr>
                                     <tr class="row100 body">
                                        <td class="cell100 column1">Tutupan Lahan</td>
                                        <td class="cell100 column2 text-center">L</td>
                                        <td class="cell100 column3  table-primary" align="center">
                                            <input class="col-md-10 text-right" id="L" type="number" placeholder="Tulis Angka">
                                        </td>
                                        <td class="cell100 column4 text-center">%</td>
								    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                
                    <h4 style="margin-top:40px"><b>Perhitungan:</b></h4>
                    <div class="row justify-content-center" style="margin-top:10px">
                        <div class="card-header col-md-5" style="margin-right:30px" color="#ffe6e6">
                            <h5 class=" text-left" style="margin-top:10px"><i>Dustfall</i></h5>
                            <div class="row justify-content-center" style="margin-top:30px">
                                <span class="col-md-5 text-right" placeholder="Hasil DF"> 
                                    <h3><b><div id="Df"></div></b></h3>
                                </span>
                                <div class="col-md-4 col-md-offset-1 text-right">
                                    ton/km<sup>2</sup>/bulan 
                                </div> 
                            </div>
                            <div class="row justify-content-center" style="margin-bottom:10px;">
                                <button id="tombolDf" class=" btn btn-success col-md-5" style="margin-top:35px">DF</button>
                            </div>
                        </div>
                        <div class="card-header col-md-5" >
                            <h5 class="text-left" style="margin-top:10px">Total<i> Suspended Particulate</i></h5>
                            <div class="row justify-content-center" style="margin-top:30px">
                                <span class="col-md-5 text-right" placeholder="Hasil TSP"> 
                                    <h3><b><div id="TSP"></div></b></h3>
                                </span>
                                <div class="col-md-4 text-right">
                                    &mu;g/Nm<sup>3</sup>
                                </div>
                            </div>
                            <div class="row justify-content-center" style="margin-bottom:10px;">
                                <button id="tombolTSP" class="btn btn-success col-md-5" style="margin-top:35px;">TSP</button>
                            </div>
                        </div>
                    </div>

                    <!--tabel-->
                    <div class="card-subtitle" style="margin-top:60px">
                        <div class="table100 ver1">
                            <div class="table100-body">
                                <table style="margin-top:10px">
                                    <tbody>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Baku mutu debu jatuh (permikiman)<b>*</b></td>
                                            <td class="cell100 column2 text-center">10</td>
                                            <td class="cell100 column2">ton/km<sup>2</sup>/bulan</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Baku mutu debu jatuh (industri)<b>*</b></td>
                                            <td class="cell100 column2 text-center">20</td>
                                            <td class="cell100 column2">ton/km<sup>2</sup>/bulan</td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Baku mutu TSP (waktu pengukuran 24 jam)<b>*</b></td>
                                            <td class="cell100 column2 text-center">230</td>
                                            <td class="cell100 column2">&mu;g/Nm<sup>3</sup></td>
                                        </tr>
                                        <tr class="row100 body">
                                            <td class="cell100 column1">Baku mutu TSP (waktu pengukuran 1 jam)<b>*</b></td>
                                            <td class="cell100 column2 text-center">90</td>
                                            <td class="cell100 column2">&mu;g/Nm<sup>3</sup></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="panel-footer">
                                    <div class="col-lg-12"  style="margin-top:10px">
                                        <p class="muted pull-right"><strong><b>*</b>Peraturan Pemerintah No. 41 Tahun 1999 tentang Pengendalian Pencemaran Udara</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
</div>

<script type="text/javascript">

$(document).ready(function() {
    var T, U, M, L, Df, TSP;
    console.log("wooow");
    $("#Df").html(0);
    $("#TSP").html(0);

    $("#T").change(function() {
        console.log(this.value);
        T = this.value;
    });
    $("#U").change(function() {
        console.log("U=" + this.value);
        U = Number(this.value);
    });
    $("#M").change(function() {
        console.log("M=" + this.value);
        M = Number(this.value);
    });
    $("#L").change(function() {
        console.log("L=" + this.value);
        L = Number(this.value);
    });
    $("#tombolDf").click(function() {
        $("#Df").html(CountDf(T, M, L, U));
    });
    $("#tombolTSP").click(function() {
        $("#TSP").html(CountTSP(T, M, L, U));
    })
})
    // test = 8;
    // document.getElementById("test").innerHTML = test;
    
    // T = "Aluvial";
    // U = 2;
    // M = 2;
    // L = 2;

    function CountDf(T, M, L, U){
        if(T == "Aluvial") 
        {        
            Df = (((146.94*Math.pow(U,2))-(258.54*U)+120.54)*0.37)+(((-2.6242*M)+81.227)*0.19)+(((-0.0023*Math.pow(L,2))+(0.0535*L)+5.725)*0.43);
            //TSP = (((103.77*U) + 75.615)*0.32)+(((-18.646*M)+765.44)*0.32)+(((-1.104*L)+152.19)*0.36);
        }    
        else if(T == "Andosol")
        {
            Df = ((3.77*Math.exp(0.069*U))*0.26) + ((8.19*Math.exp(-0.02*M))*0.34) + ((6.25*Math.exp(-0.014*L))*0.41);
            //TSP = (((28.6*log(U))+76.29)*0.09) + (((-56.42*log(M))+311.75)*0.38)+(((-6.844*log(L))+107.3)*0.53);
        } 
        else if(T == "Grumosol" )
        {
            Df = (((11.019*Math.pow(U,2))-(15.518*U)+13.776)*0.25)+(((0.1098 *M^2)-(8.1174*M)+157.95)*0.34)+(((-0.082*L)+5.25)*0.41);
            //TSP = (((128.17*U)-60.984)*0.29)+(((-16.579*M)+667.44)*0.32)+(((-1.5339*L)+171.91)*0.39);
        }    
        else if(T == "Latosol" )
        {
            Df = (((30.714*Math.pow(U,2))-(47.595*U)+23.697)*0.31)+(((-1.0888*M)+34.902)*0.29)+(((0.0005*Math.pow(L,2))-(0.163*L)+9.05)*0.41);
            //TSP = (((90.376*U)+30.894)*0.3)+(((-19.793*M)+732.02)*0.3)+(((-1.5871*L)+114.29)*0.41);
        }
        else if(T == "Mediteran" )
        {
            Df = ((0.52*Math.exp(4.16*U))*0.29)+((210.74*Math.exp(-0.18*M))*0.34)+((1.82*Math.exp(-0.02*L))*0.38);
            //TSP = ((32.02*Math.exp(1.37*U))*0.31)+((178.07*Math.exp(-0.04*M))*0.27)+((123.75*Math.exp(-0.02*L))*0.42);
        }
        else if(T == "Regosol" )
        {
            Df = ((4.127*Math.exp(1.5825*U))*0.33)+((23.987*Math.exp(-0.043*M))*0.27)+((98.968*Math.exp(-0.136*L))*0.4);
            //TSP = ((39.592*Math.exp(-1.0942*M))*0.25)+((157.12*Math.exp(0.028*U))*0.34)+((110.42*Math.exp(-0.024*L))*0.4);
        }
        else if(T == "Podsolik Merah Kuning" )
        {
            Df = (((15.97*U)-1.556)*0.25)+(((-2.3285*M)+102.04)*0.33)+(((-0.1009*L)+7.3034)*0.42);
            //TSP = (((6.7703*U)+14.442)*0.06)+(((-5.7413*M)+240.9)*0.43)+(((-0.1701*L)+10.7)*0.51);
        }
        else if(T == "Kompleks Mediteran Merah Kuning dan Grumosol" )
        {
            Df = ((4.4*Math.exp(1.19*U))*0.39)+((645.62*Math.exp(-0.1*M))*0.19)+((15.65*Math.exp(-0.02*L))*0.42);
            //TSP = ((27*Math.exp(1.22*U))*0.4)+((72.48*Math.exp(0.003*M))*0.17)+((66.04*Math.exp(-0.01*L))*0.43);
        }
        else if(T == "Kompleks Podsolik Merah Kuning Latosol Litosol" )
        {
            Df = (((4.6063*U)+2.9387)*0.11)+(((-1.6677*M)+72.057)*0.42)+(((-0.0445*L)+4.3014)*0.48);
            //TSP = (((22.482*U)+42.977)*0.15)+(((-5.4109*M)+274.36)*0.39)+(((-0.4051*L)+57.109)*0.45);
        }
        else if(T == "Inceptisol" )
        {
            Df = (((30.71*Math.pow(U,2))-(47.6*U)+23.7)*0.3)+(((1.089*M)+34.9)*0.28)+(((0.006*Math.pow(L^2))-(0.4754*L)+12.64)*0.41);
            //TSP = (((90.49*U)+30.75)*0.3)+(((-19.78*M)+731.8)*0.29)+(((-2.325*L)+134.4)*0.41);
        }
        else if(T == "Ultisol" )
        {
            Df = (((125.8*Math.pow(U,2))-(213.4*U)+95.1)*0.34)+(((1.434*Math.pow(M,2))-(74.24*M)+964.1)*0.33)+(((-0.037*L)+23)*0.33);
            //TSP = (((133.1*U)-31.99)*0.35)+(((-13.19*M)+504.9)*0.3)+(((-2.105*L)+159.1)*0.35);
        }
        else if(T == "Andisol" )
        {
            Df = (((184.9*Math.pow(U,2))-(333.3*U)+152.6)*0.35)+(((1.174*Math.pow(M,2))-(62.21*M)+827.4)*0.3)+(((0.03*Math.pow(L,2))-(2.123*L)+55.65)*0.35);
            //TSP = (((1970 * U) - 1617) * 0.27) + (((-128.1 * M) + 4497) * 0.34) + (((-27.83 * L) + 1145) * 0.39);
        }
        else if(T == "Entisol" )
        {
            Df = (((146.9*Math.pow(U,2))-(258.5*U)+120.5)*0.33)+(((-3.751*M)+110.6)*0.27)+(((0.003*Math.pow(L,2))-(0.2069*L)+8.714)*0.39);
            //TSP = (((104.3 * U) + 74.85) * 0.31) + (((-18.64 * M) + 765.4) * 0.3) + (((-1.741 * L) + 171.3) * 0.39);
        }
        else if(T == "Vertisol" )
        {
            Df = (((13.04* Math.pow(U,2))-(18.72*U)+14.88)*0.34)+(((0.1067*Math.pow(M,2))-(7.92*M)+154.9)*0.29)+(((-0.073*L)+4.98)*0.37);
            //TSP = (((129.8 * U) - 62.84) * 0.29) + (((-16.57 * M) + 667) * 0.32) + (((-1.679 * L) + 176.3) * 0.4);
        }
        //Df = 1000;
        return Math.round(Df);
    }

    function CountTSP(T, M, L, U){
        if(T == "Aluvial") 
        {        
            // Df = (((146.94*Math.pow(U,2))-(258.54*U)+120.54)*0.37)+(((-2.6242*M)+81.227)*0.19)+(((-0.0023*Math.pow(L,2))+(0.0535*L)+5.725)*0.43);
            TSP = (((103.77*U) + 75.615)*0.32)+(((-18.646*M)+765.44)*0.32)+(((-1.104*L)+152.19)*0.36);
        }    
        else if(T == "Andosol")
        {
            // Df = ((3.77*Math.exp(0.069*U))*0.26) + ((8.19*Math.exp(-0.02*M))*0.34) + ((6.25*Math.exp(-0.014*L))*0.41);
            TSP = (((28.6*Math.log(U))+76.29)*0.09) + (((-56.42*Math.log(M))+311.75)*0.38)+(((-6.844*Math.log(L))+107.3)*0.53);
        } 
        else if(T == "Grumosol" )
        {
            // Df = (((11.019*Math.pow(U,2))-(15.518*U)+13.776)*0.25)+(((0.1098 *M^2)-(8.1174*M)+157.95)*0.34)+(((-0.082*L)+5.25)*0.41);
            TSP = (((128.17*U)-60.984)*0.29)+(((-16.579*M)+667.44)*0.32)+(((-1.5339*L)+171.91)*0.39);
        }    
        else if(T == "Latosol" )
        {
            // Df = (((30.714*Math.pow(U,2))-(47.595*U)+23.697)*0.31)+(((-1.0888*M)+34.902)*0.29)+(((0.0005*Math.pow(L,2))-(0.163*L)+9.05)*0.41);
            TSP = (((90.376*U)+30.894)*0.3)+(((-19.793*M)+732.02)*0.3)+(((-1.5871*L)+114.29)*0.41);
        }
        else if(T == "Mediteran" )
        {
            // Df = ((0.52*Math.exp(4.16*U))*0.29)+((210.74*Math.exp(-0.18*M))*0.34)+((1.82*Math.exp(-0.02*L))*0.38);
            TSP = ((32.02*Math.exp(1.37*U))*0.31)+((178.07*Math.exp(-0.04*M))*0.27)+((123.75*Math.exp(-0.02*L))*0.42);
        }
        else if(T == "Regosol" )
        {
            // Df = ((4.127*Math.exp(1.5825*U))*0.33)+((23.987*Math.exp(-0.043*M))*0.27)+((98.968*Math.exp(-0.136*L))*0.4);
            TSP = ((39.592*Math.exp(-1.0942*M))*0.25)+((157.12*Math.exp(0.028*U))*0.34)+((110.42*Math.exp(-0.024*L))*0.4);
        }
        else if(T == "Podsolik Merah Kuning" )
        {
            // Df = (((15.97*U)-1.556)*0.25)+(((-2.3285*M)+102.04)*0.33)+(((-0.1009*L)+7.3034)*0.42);
            TSP = (((6.7703*U)+14.442)*0.06)+(((-5.7413*M)+240.9)*0.43)+(((-0.1701*L)+10.7)*0.51);
        }
        else if(T == "Kompleks Mediteran Merah Kuning dan Grumosol" )
        {
            // Df = ((4.4*Math.exp(1.19*U))*0.39)+((645.62*Math.exp(-0.1*M))*0.19)+((15.65*Math.exp(-0.02*L))*0.42);
            TSP = ((27*Math.exp(1.22*U))*0.4)+((72.48*Math.exp(0.003*M))*0.17)+((66.04*Math.exp(-0.01*L))*0.43);
        }
        else if(T == "Kompleks Podsolik Merah Kuning Latosol Litosol" )
        {
            // Df = (((4.6063*U)+2.9387)*0.11)+(((-1.6677*M)+72.057)*0.42)+(((-0.0445*L)+4.3014)*0.48);
            TSP = (((22.482*U)+42.977)*0.15)+(((-5.4109*M)+274.36)*0.39)+(((-0.4051*L)+57.109)*0.45);
        }
        else if(T == "Inceptisol" )
        {
            // Df = (((30.71*Math.pow(U,2))-(47.6*U)+23.7)*0.3)+(((1.089*M)+34.9)*0.28)+(((0.006*Math.pow(L^2))-(0.4754*L)+12.64)*0.41);
            TSP = (((90.49*U)+30.75)*0.3)+(((-19.78*M)+731.8)*0.29)+(((-2.325*L)+134.4)*0.41);
        }
        else if(T == "Ultisol" )
        {
            // Df = (((125.8*Math.pow(U,2))-(213.4*U)+95.1)*0.34)+(((1.434*Math.pow(M,2))-(74.24*M)+964.1)*0.33)+(((-0.037*L)+23)*0.33);
            TSP = (((133.1*U)-31.99)*0.35)+(((-13.19*M)+504.9)*0.3)+(((-2.105*L)+159.1)*0.35);
        }
        else if(T == "Andisol" )
        {
            // Df = (((184.9*Math.pow(U,2))-(333.3*U)+152.6)*0.35)+(((1.174*Math.pow(M,2))-(62.21*M)+827.4)*0.3)+(((0.03*Math.pow(L,2))-(2.123*L)+55.65)*0.35);
            TSP = (((1970*U)-1617)*0.27)+(((-128.1*M)+4497)*0.34)+(((-27.83*L)+1145)*0.39);
        }
        else if(T == "Entisol" )
        {
            // Df = (((146.9*Math.pow(U,2))-(258.5*U)+120.5)*0.33)+(((-3.751*M)+110.6)*0.27)+(((0.003*Math.pow(L,2))-(0.2069*L)+8.714)*0.39);
            TSP = (((104.3*U)+74.85)*0.31)+(((-18.64*M)+765.4)*0.3)+(((-1.741*L)+171.3)*0.39);
        }
        else if(T == "Vertisol" )
        {
            // Df = (((13.04* Math.pow(U,2))-(18.72*U)+14.88)*0.34)+(((0.1067*Math.pow(M,2))-(7.92*M)+154.9)*0.29)+(((-0.073*L)+4.98)*0.37);
            TSP = (((129.8*U)-62.84)*0.29)+(((-16.57*M)+667)*0.32)+(((-1.679*L)+176.3)*0.4);
        }
        //Df = 1000;
        return Math.round(TSP);
    }
    // document.getElementById("tombolDF").addEventListener("click", tanah());
    // document.getElementById("tombolTSP").addEventListener("click", tanah());
    // document.getElementById("Df").innerHTML = Df;
    // document.getElementById("TSP").innerHTML = TSP;


</script>

@endsection
