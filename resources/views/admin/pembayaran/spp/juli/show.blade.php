@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP juli
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$juli->santri->id_santri}}-{{$juli->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$juli->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($juli->nominal)}} | <br>
								Waktu : {{$juli->waktu}} | <br>
								Status : {{$juli->status}} | <br>
								Admin : {{$juli->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$juli->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/juli/kwitansiThermo', $juli->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/juli/kwitansiTinta', $juli->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection