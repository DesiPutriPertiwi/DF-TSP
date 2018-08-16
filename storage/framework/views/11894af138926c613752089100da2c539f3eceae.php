<?php $__env->startSection('content'); ?>

<div class="limiter">
		<div class="container-table100">
            <div class="row justify-content-center col-md-12" >
                <h3 >Tutupan Lahan di Indonesia</h3>
            </div>
    		<div class="wrap-table100 col-md-12" style="padding-top:20px">
				<div class="table100 ver1">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 text-center" rowspan="2" width="5%">No.</th>
									<th class="cell100 text-center" rowspan="2" width="20%">Daerah</th>
									<th class="cell100 text-center" colspan="14">Tutupan Lahan (%)</th>
                                </tr>
								<tr>
									<th colspan="3" width="10">Hutan Primer</th>
									<th colspan="3" width="10">Hutan Sekunder</th>
									<th colspan="3" width="10">Hutan Tanaman</th>
									<th colspan="3" width="10">Total Hutan</th>
									<th colspan="3" width="10">Non Hutan</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body">
						<table>
							<tbody>
								<?php $__currentLoopData = $tutupan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $tutupans): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<?php if(!is_null($tutupans->daerah)): ?>
										<tr class="row100 body">
											<td class="cell100 text-center " width="5%"><?php echo e($index+1); ?></td>
											<td class="cell100 text-left " width="10%"><?php echo e($tutupans->daerah); ?></td>
											<td class="cell100 text-right " width="10%"><?php echo e($tutupans->h_primer); ?></td>
											<td class="cell100 text-right " width="10%"><?php echo e($tutupans->h_skunder); ?></td>
											<td class="cell100 text-right " width="10%"><?php echo e($tutupans->h_tanaman); ?></td>
											<td class="cell100 text-right " width="10%"><?php echo e($tutupans->hutan); ?></td>
											<td class="cell100 text-right " width="10%"><?php echo e($tutupans->non_hutan); ?></td>
										</tr>
									<?php endif; ?>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							</tbody>
						</table>
						
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('user.layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>