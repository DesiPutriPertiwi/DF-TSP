@extends('admin.layouts.master')

@section('content')

<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Deskripsi Penelitian
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Infomasi Tambahan</a></li>
                <li class="active">Deskripsi Penelitian</li>
            </ol>
        </section>

    <!--Main Content-->
       <section class="content">
        <div class="box">
            <div class="container">
                <div class="row"> 
                    <form class="form-horizontal" role="form" method="POST" action="" style="margin-top:100px" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <!--Collector-->
                        <div class="form-group{{ $errors->has('judul') ? ' has-error' : '' }}" >
                            <label for="judul" class="col-md-2 col-md-offset-1" style="text-align= left ">Judul Penelitian</label>
                            <div class="col-md-6">
                                @foreach()
                                    <input id="judul" type="text" class="form-control" placeholder="Judul" name="judul" value="">
                                @if ($errors->has('judul'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('judul') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('deskripsi') ? ' has-error' : '' }}" >
                            <label for="deskripsi" class="col-md-2 col-md-offset-1" style="text-align:left">Deskripsi Penelitian</label>
                            <div class="col-md-6">
                                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                                <textarea id="deskripsi" row="7" cols="5" oneKeyPress placeholder="Deskripsi Pelatiahan" class="form-control my-editor" name="deskripsi"></textarea>
                                @if ($errors->has('deskripsi'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('deskripsi') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="form-group" >
                                <label for="picture" class="col-md-2 col-md-offset-1" style="text-align:left">File</label>
                                <div class="col-md-7 col-md-offset-3">
                                    <div class="col-md-6">
                                        <input type="file" name="file" id="file" accept="file/*" value="" disabled>
                                    </div>
                                </div>
                            </div>           
                        </div>

                        <div class="form-group" >
                            <div class="col-md-12 col-md-offset-6 text-right" style="margin-top:100px">
                                <button type="submit" class="col-md-2 btn btn-primary"  >Save</button>
                                <button type="button" class="col-md-2 btn btn-danger" style="margin-left:10px" onclick="window.location='{{}}'" >Cancel</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
 
</div>
@endsection