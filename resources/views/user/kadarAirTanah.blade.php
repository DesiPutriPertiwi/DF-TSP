@extends('user.layouts.app')

@section('content')
	<div class="limiter">
		<div class="container-table100">
            <div class="row justify-content-center col-md-12">
                <h3>Kadar Air Tanah</h3>
            </div>
    		<div class="wrap-table100 col-md-5">
				<div class="table100 ver1">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 text-center" width="10%">No.</th>
									<th class="cell100 text-center" width="30%">Jenis Tanah</th>
									<th class="cell100 text-center" width="30%">Kadar Air Tanah</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 text-center " width="10%">1.</td>
									<td class="cell100 text-left " width="30%">Inceptisol</td>
									<td class="cell100 text-center " width="30%">26.7</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center " width="10%">2.</td>
									<td class="cell100 text-left " width="30%">Ultisol</td>
									<td class="cell100 text-center " width="30%">28.0</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center " width="10%">3.</td>
									<td class="cell100 text-left " width="30%">Andisol</td>
									<td class="cell100 text-center " width="30%">27.2</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center " width="10%">4.</td>
									<td class="cell100 text-left " width="30%">Entisol</td>
									<td class="cell100 text-center " width="30%">27.6</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center " width="10%">5.</td>
									<td class="cell100 text-left " width="30%">Ventisol</td>
									<td class="cell100 text-center " width="30%">33.4</td>
								</tr>
							</tbody>
						</table>
						<div class="panel-footer">
							<div class="col-lg-12"  style="margin-top:10px">
								<p class="muted pull-right"><strong>Sumber : Yuwono <i>et all.</i> (2015)</strong></p>
							</div>
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
@endsection