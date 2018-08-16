@extends('user.layouts.app')

@section('content')
	<div class="limiter">
		<div class="container-table100">
            <div class="row justify-content-center">
                <h3>Klasifikasi Tanah</h3>
            </div>
    		<div class="wrap-table100" style="margin-top:50px">
				<div class="table100 ver1">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 text-center" width="10%"> No.</th>
									<th class="cell100 text-center" width="20%" >Sistem Dudol-Soepraptohardjo <br> (1957-1961)</th>
									<th class="cell100 text-center" width="20%" >Modifikasi (1978/1982) <br> (PPT)</th>
									<th class="cell100 text-center" width="20%" >FAO/UNESCO <br> (1974`)</th>
									<th class="cell100 text-center" width="20%">USDA Soil Taxonomy <br> (1975-1990)</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
						<table>
							<tbody>
								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">1.</td>
									<td class="cell100 text-left" width="20%">Tanah Aluvial</td>
									<td class="cell100 text-left" width="20%">Tanah Aluvial</td>
									<td class="cell100 text-left" width="20%">Fluvisol</td>
									<td class="cell100 text-left" width="20%">
										<ul style="fa-ul">
											<li style="fa-li fa fa-check-square">Entisol</li>
											<li style="fa-li fa fa-check-square">Inceptisol</li>
										</ul>
									</td>
								</tr>
								
								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">2.</td>
									<td class="cell100 text-left" width="20%">Andosol</td>
									<td class="cell100 text-left" width="20%">Andosol</td>
									<td class="cell100 text-left" width="20%">Andosol</td>
									<td class="cell100 text-left" width="20%">Andisol</td>
								</tr>
								
								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">3.</td>
									<td class="cell100 text-left" width="20%">Brown Forest Soil</td>
									<td class="cell100 text-left" width="20%">Kambisol</td>
									<td class="cell100 text-left" width="20%">Cambisol</td>
									<td class="cell100 text-left" width="20%">Inceptisol</td>
								</tr>
								
								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">4.</td>
									<td class="cell100 text-left" width="20%">Grumosol</td>
									<td class="cell100 text-left" width="20%">Grumosol</td>
									<td class="cell100 text-left" width="20%">Vertisol</td>
									<td class="cell100 text-left" width="20%">Vertisol</td>
								</tr>
								
								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">5.</td>
									<td class="cell100 text-left" width="20%">Latosol</td>
									<td class="cell100 text-left" width="20%">
										<ul style="fa-ul">
											<li style="fa-li fa fa-check-square">Kambisol</li>
											<li style="fa-li fa fa-check-square">Latosol</li>
											<li style="fa-li fa fa-check-square">Lateritik</li>
										</ul>
									</td>
									<td class="cell100 text-left" width="20%">
										<ul style="fa-ul">
											<li style="fa-li fa fa-check-square">Cambisol</li>
											<li style="fa-li fa fa-check-square">Nitosol</li>
											<li style="fa-li fa fa-check-square">Ferralsol</li>
										</ul>
									</td>
									<td class="cell100 text-left" width="20%">
										<ul style="fa-ul">
											<li style="fa-li fa fa-check-square">Inceptisol</li>
											<li style="fa-li fa fa-check-square">Ultisol</li>
											<li style="fa-li fa fa-check-square">Oxisol</li>
										</ul>
									</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">6.</td>
									<td class="cell100 text-left" width="20%">Litosol</td>
									<td class="cell100 text-left" width="20%">Litosol</td>
									<td class="cell100 text-left" width="20%">Litosol</td>
									<td class="cell100 text-left" width="20%">Entisol (lithic Subgrup)</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">7.</td>
									<td class="cell100 text-left" width="20%">Mediteran</td>
									<td class="cell100 text-left" width="20%">Mediteran</td>
									<td class="cell100 text-left" width="20%">Luvisol</td>
									<td class="cell100 text-left" width="20%">Alfisol/Inceptisol</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">8.</td>
									<td class="cell100 text-left" width="20%">Organosol</td>
									<td class="cell100 text-left" width="20%">Organosol</td>
									<td class="cell100 text-left" width="20%">Histosol</td>
									<td class="cell100 text-left" width="20%">Histosol</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">9.</td>
									<td class="cell100 text-left" width="20%">Podsol</td>
									<td class="cell100 text-left" width="20%">Podsol</td>
									<td class="cell100 text-left" width="20%">Podsol</td>
									<td class="cell100 text-left" width="20%">Spodosol</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">10.</td>
									<td class="cell100 text-left" width="20%">Podsolik Merah Kuning</td>
									<td class="cell100 text-left" width="20%">Podsolik</td>
									<td class="cell100 text-left" width="20%">Acrisol</td>
									<td class="cell100 text-left" width="20%">Ultisol</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">11.</td>
									<td class="cell100 text-left" width="20%">Podsolik Coklat</td>
									<td class="cell100 text-left" width="20%">Kambisol</td>
									<td class="cell100 text-left" width="20%">Cambisol</td>
									<td class="cell100 text-left" width="20%">Inceptisol</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">12.</td>
									<td class="cell100 text-left" width="20%">Podsolik Coklat Kelabu</td>
									<td class="cell100 text-left" width="20%">Podsolik</td>
									<td class="cell100 text-left" width="20%">Acrisol</td>
									<td class="cell100 text-left" width="20%">Ultisol</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">13.</td>
									<td class="cell100 text-left" width="20%">Regosol</td>
									<td class="cell100 text-left" width="20%">Regosol</td>
									<td class="cell100 text-left" width="20%">Regosol</td>
									<td class="cell100 text-left" width="20%">Entisol/Inceptisol</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">14.</td>
									<td class="cell100 text-left" width="20%">Renzina</td>
									<td class="cell100 text-left" width="20%">Renzina</td>
									<td class="cell100 text-left" width="20%">Renzina</td>
									<td class="cell100 text-left" width="20%">Rendoll</td>
								</tr>

								<tr class="row100 body">
									<td class="cell100 text-center" width="10%">15.</td>
									<td class="cell100 text-left" width="20%">-</td>
									<td class="cell100 text-left" width="20%">Ranker</td>
									<td class="cell100 text-left" width="20%">Ranker</td>
									<td class="cell100 text-left" width="20%">-</td>
								</tr>
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
@endsection