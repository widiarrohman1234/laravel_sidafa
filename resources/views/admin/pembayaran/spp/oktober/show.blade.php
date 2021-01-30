@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP oktober
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$oktober->santri->id_santri}}-{{$oktober->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$oktober->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($oktober->nominal)}} | <br>
								Waktu : {{$oktober->waktu}} | <br>
								Status : {{$oktober->status}} | <br>
								Admin : {{$oktober->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$oktober->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/oktober/kwitansiThermo', $oktober->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/oktober/kwitansiTinta', $oktober->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection