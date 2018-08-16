@extends('user.layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center col-md-12" style="padding-top:30px">
            @foreach($deskripsi as $deskripsis)
                <h3><b>{{$deskripsis->judul}}</b></h3>
            @endforeach
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10" style="padding-bottom:50px; padding-top:25px">
                <div class="card" align="justify" style="padding-bottom:30px; padding-top:30px; padding-left:30px; padding-right:30px">
                    @foreach($deskripsi as $deskripsis)
                        <p>{!!$deskripsis->deskripsi!!}</p>
                    @endforeach 
                    
                    <p style="padding-top:20px"><b>Untuk Informasi lebih lengkap, Silahkan unduh file berikut.</b></p>
                    @foreach($deskripsi as $deskripsis)
                        <a href="{{asset('document/'.$deskripsis->file)}}">{{$deskripsis->file}}</a>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="row justify-content-left col-md-10">
                <h3><b>Daftar Pustaka</b></h3>
            </div>
            <div class="col-md-10" style="padding-bottom:100px; padding-top:25px">
                <div class="card" align="justify" style="padding-bottom:30px; padding-top:30px; padding-left:30px; padding-right:30px">
                    @foreach($dapus as $index => $dapusan)
                        @if(!is_null($dapusan->dapus))
                            <ul>    
                                <li>{{$index+1}}. {!!$dapusan->dapus!!}</li></br>
                            </ul>
                        @endif
                    @endforeach    
                </div>
            </div>
        </div>
    </div>
@endsection