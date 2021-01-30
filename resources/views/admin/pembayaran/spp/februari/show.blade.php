@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP februari
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$februari->santri->id_santri}}-{{$februari->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$februari->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($februari->nominal)}} | <br>
								Waktu : {{$februari->waktu}} | <br>
								Status : {{$februari->status}} | <br>
								Admin : {{$februari->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$februari->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/februari/kwitansiThermo', $februari->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/februari/kwitansiTinta', $februari->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection