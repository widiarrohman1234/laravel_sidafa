@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP november
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$november->santri->id_santri}}-{{$november->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$november->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($november->nominal)}} | <br>
								Waktu : {{$november->waktu}} | <br>
								Status : {{$november->status}} | <br>
								Admin : {{$november->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$november->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/november/kwitansiThermo', $november->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/november/kwitansiTinta', $november->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection