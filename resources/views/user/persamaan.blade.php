@extends('user.layouts.app')
@section('content')

<div class="limiter">
		<div class="container-table100">
            <div class="row justify-content-center col-md-12">
                <h3>Persamaan Perhitungan Faktor Emisi Debu Jahuh dan TSP</h3>
            </div>
    		<div class="wrap-table100 col-md-12" style="padding-top:20px">
				<div class="table100 ver1">
					<div class="table100-head">
						<table>
							<thead>
								<tr class="row100 head">
									<th class="cell100 text-center" width="5%">No.</th>
									<th class="cell100 text-center" width="20%">Jenis Tanah</th>
									<th class="cell100 text-center" width="45%">Persamaan</th>
                                    <th class="cell100 text-center" width="30%">Asal Tanah</th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body">
						<table>
							<tbody>
                                @foreach($persamaan as $index => $persamaans)
								<tr class="row100 body">
									<td class="cell100 text-center " width="5%">{{$index+1}}</td>
									<td class="cell100 text-left " width="20%">{{$persamaans->nama_tanah}}</td>
									<td class="cell100 text-left " width="45%">
                                        <ul>
                                            <li>E DF ={{$persamaans->persamaan_DF}}</li>
                                            <li>E TSP ={{$persamaans->persamaan_TSP}}</li>
                                        </ul>
                                    </td>
									<td class="cell100 text-left " width="30%">{!!$persamaans->asal!!}</td>                                    
								</tr>
                                @endforeach
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