<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="row justify-content-center col-md-12" style="padding-top:30px">
            <?php $__currentLoopData = $deskripsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deskripsis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <h3><b><?php echo e($deskripsis->judul); ?></b></h3>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-10" style="padding-bottom:50px; padding-top:25px">
                <div class="card" align="justify" style="padding-bottom:30px; padding-top:30px; padding-left:30px; padding-right:30px">
                    <?php $__currentLoopData = $deskripsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deskripsis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <p><?php echo $deskripsis->deskripsi; ?></p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
                    
                    <p style="padding-top:20px"><b>Untuk Informasi lebih lengkap, Silahkan unduh file berikut.</b></p>
                    <?php $__currentLoopData = $deskripsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $deskripsis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="<?php echo e(asset('document/'.$deskripsis->file)); ?>"><?php echo e($deskripsis->file); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="row justify-content-left col-md-10">
                <h3><b>Daftar Pustaka</b></h3>
            </div>
            <div class="col-md-10" style="padding-bottom:100px; padding-top:25px">
                <div class="card" align="justify" style="padding-bottom:30px; padding-top:30px; padding-left:30px; padding-right:30px">
                    <?php $__currentLoopData = $dapus; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $dapusan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if(!is_null($dapusan->dapus)): ?>
                            <ul>    
                                <li><?php echo e($index+1); ?>. <?php echo $dapusan->dapus; ?></li></br>
                            </ul>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>