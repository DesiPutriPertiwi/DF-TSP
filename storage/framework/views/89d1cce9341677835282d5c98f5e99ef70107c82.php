<?php $__env->startSection('content'); ?>

  <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Daftar Pustaka
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i>Infomasi Tambahan</a></li>
                <li class="active">Daftar Pustaka</li>
            </ol>
        </section>

    <!--Main Content-->
    <section class="content">
        <div class="box">
            <div class="container">
                <div class="row"> 
                    <form class="form-horizontal" role="form" method="POST" action="" style="margin-top:100px" enctype="multipart/form-data">
                    <?php echo e(csrf_field()); ?>

                        <!--Collector-->
                        <div class="form-group<?php echo e($errors->has('deskripsi') ? ' has-error' : ''); ?>" >
                            <label for="deskripsi" class="col-md-2 col-md-offset-1" style="text-align:left">Daftar Pustaka</label>
                            <div class="col-md-6">
                                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                                <textarea id="deskripsi" row="7" cols="5" oneKeyPress placeholder="Deskripsi Pelatiahan" class="form-control my-editor" name="deskripsi" ></textarea>
                                <?php if($errors->has('deskripsi')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('deskripsi')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('sitasi') ? ' has-error' : ''); ?>" >
                            <label for="sitasi" class="col-md-2 col-md-offset-1" style="text-align= left ">Sitasi</label>
                            <div class="col-md-6">
                                <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
                                <textarea id="sitasi" row="7" cols="5" oneKeyPress placeholder="Sitasi" class="form-control my-editor" name="sitasi"></textarea>
                                <?php if($errors->has('sitasi')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('sitasi')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group<?php echo e($errors->has('tahun') ? ' has-error' : ''); ?>" >
                            <label for="tahun" class="col-md-2 col-md-offset-1" style="text-align= left ">Tahun</label>
                            <div class="col-md-6">
                                <input id="tahun" type="text" class="form-control" placeholder="Tahun" name="tahun" value="">
                                <?php if($errors->has('tahun')): ?>
                                    <span class="help-block">
                                        <strong><?php echo e($errors->first('tahun')); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="col-md-12 col-md-offset-6 text-right" style="margin-top:100px">
                                <button type="submit" class="col-md-2 btn btn-primary"  >Save</button>
                                <button type="button" class="col-md-2 btn btn-danger" style="margin-left:10px" onclick="window.location='<?php echo e(url('/blk/dokumentasi')); ?>'" >Cancel</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>