@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP mei
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$mei->santri->id_santri}}-{{$mei->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$mei->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($mei->nominal)}} | <br>
								Waktu : {{$mei->waktu}} | <br>
								Status : {{$mei->status}} | <br>
								Admin : {{$mei->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$mei->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/mei/kwitansiThermo', $mei->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/mei/kwitansiTinta', $mei->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection