<?php $__env->startSection('content'); ?>

    <div class="limiter">
		<div class="container-table100">
            <div class="row justify-content-center col-md-12">
                <h3>Contoh Perhitungan Bangkitan Debu Jatuh dan TSP sesuai dengan jenis Tanah</h3>
            </div>

            <!--data perhitungan df dan tsp-->
    		<div class="row justify-content-center" style="padding-top:50px">
                <div class="row justify-content-center col-md-12">
                    <h5>Data Perhitungan Bangkitan Debu Jatuh (DF) dan TSP</h5>
                </div>
                <div class="wrap-table100  col-md-5 " style="padding-top:20px">
                    <div class="table100 ver1">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 text-center" width="10%">No.</th>
                                        <th class="cell100 text-center" width="30%">Kecepatan Angin</th>
                                        <th class="cell100 text-center" width="30%">Kadar Air Tanah</th>
                                        <th class="cell100 text-center" width="30%">Tutupan Lahan</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="table100-body">
                            <table>
                                <tbody>
                                    <?php $__currentLoopData = $tutupanLahan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tutupans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="row100 body">
                                            <td class="cell100 text-center " width="10%"><?php echo e($index+1); ?></td>
                                            <td class="cell100 text-center " width="30%"><?php echo e($tutupans->kecepatan); ?></td>
                                            <td class="cell100 text-left " width="30%"><?php echo e($tutupans->kadarAir); ?></td>
                                            <td class="cell100 text-center " width="30%"><?php echo e($tutupans->hutan); ?></td>                                    
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!--perbedan bangkitan debu jatuh dengan jenis tanah-->
    		<div class="row" style="padding-top:50px">
                <div class="col-md-12">
                    <h5><b>A. Perbedaan Bangkitan Debu Jatuh sesuai dengan Jenis Tanah</b></h5>
                </div>
                <div class="wrap-table100 col-md-6 " align="left" style="padding-top:20px; padding-left:50px">
                    <div class="table100 ver1">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 text-center" width="10%">No.</th>
                                        <th class="cell100 text-center" width="50%">Jenis Tanah</th>
                                        <th class="cell100 text-center" width="30%">Debu Jatuh (ton/km<sup>2</sup>/bulan)</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="table100-body">
                            <table>
                                <tbody>
                                    <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $hasils): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr class="row100 body">                                
                                            <td class="cell100 text-center " width="10%"><?php echo e($index+1); ?></td>
                                            <td class="cell100 text-left " width="50%"><?php echo e($hasils->nama_tanah); ?></td>
                                            <td class="cell100 text-center " width="30%"><?php echo e($hasils->hasil_df); ?></td>      
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding-top:20px; padding-left:50px">
                    <div class="card ">
                        <div class="card-header">
                            <h3>Debu Jatuh</h3>
                        </div>
                        <div class="card-block">
                            <div id="chart1"></div>
                        </div>
                    </div>
                </div>
            </div>

             <!--perbedan bangkitan TSP dengan jenis tanah-->
    		<div class="row" style="padding-top:50px">
                <div class="col-md-12">
                    <h5><b> B.Perbedaan TSP Jatuh sesuai dengan Jenis Tanah</b></h5>
                </div>
                <div class="wrap-table100 col-md-6 " align="left" style="padding-top:20px; padding-left:50px">
                    <div class="table100 ver1">
                        <div class="table100-head">
                            <table>
                                <thead>
                                    <tr class="row100 head">
                                        <th class="cell100 text-center" width="10%">No.</th>
                                        <th class="cell100 text-center" width="50%">Jenis Tanah</th>
                                        <th class="cell100 text-center" width="30%">Debu Jatuh (&mu;/Nm<sup>3</sup>)</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>

                        <div class="table100-body">
                            <table>
                                <tbody>
                                    <?php $__currentLoopData = $hasil; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $hasils): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="cell100 text-center " width="10%"><?php echo e($index+1); ?></td>
                                            <td class="cell100 text-left " width="50%"><?php echo e($hasils->nama_tanah); ?></td>
                                            <td class="cell100 text-center " width="30%"><?php echo e($hasils->hasil_tsp); ?></td>      
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" style="padding-top:20px; padding-left:50px">
                    <div class="card ">
                        <div class="card-header">
                            <h3>TSP</h3>
                        </div>
                        <div class="card-block">
                            <div id="chart2"></div>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>

    <!--Script-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});		
	</script>
	<script src="js/main.js"></script>

    <!--Script Bar chart-->
    <link rel="stylesheet" type="text/css" href="http://www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="http://www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

    
    <script type="text/javascript">
        jQuery(function ($) {
            var data1 = [10,5,11,7,4,35,18,19,14];
            var data2 = [185,108,144,133,90,96,44,65,85];

                
            $("#chart1").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                axisY: {
                    title: {
                        text: "Kosentrasi Debu Jatuh"
                    }
                },
                dataSeries: [{
                    seriesType: "bar",
                    data: data1
                }]
            });

            $("#chart2").shieldChart({
                exportOptions: {
                    image: false,
                    print: false
                },
                axisY: {
                    title: {
                        text: "Kosentrasi TSP"
                    }
                },
                dataSeries: [{
                    seriesType: "bar",
                    data: data2
                }]
            });
        });
    </script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>