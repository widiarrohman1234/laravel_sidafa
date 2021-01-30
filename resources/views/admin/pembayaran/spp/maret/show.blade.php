@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP maret
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$maret->santri->id_santri}}-{{$maret->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$maret->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($maret->nominal)}} | <br>
								Waktu : {{$maret->waktu}} | <br>
								Status : {{$maret->status}} | <br>
								Admin : {{$maret->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$maret->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/maret/kwitansiThermo', $maret->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/maret/kwitansiTinta', $maret->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection