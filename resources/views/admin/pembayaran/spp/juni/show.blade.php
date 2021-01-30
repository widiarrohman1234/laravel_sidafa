@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP juni
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$juni->santri->id_santri}}-{{$juni->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$juni->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($juni->nominal)}} | <br>
								Waktu : {{$juni->waktu}} | <br>
								Status : {{$juni->status}} | <br>
								Admin : {{$juni->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$juni->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/juni/kwitansiThermo', $juni->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/juni/kwitansiTinta', $juni->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection