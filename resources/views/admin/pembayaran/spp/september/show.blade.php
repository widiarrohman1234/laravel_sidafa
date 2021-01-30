@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP september
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$september->santri->id_santri}}-{{$september->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$september->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($september->nominal)}} | <br>
								Waktu : {{$september->waktu}} | <br>
								Status : {{$september->status}} | <br>
								Admin : {{$september->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$september->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/september/kwitansiThermo', $september->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/september/kwitansiTinta', $september->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection