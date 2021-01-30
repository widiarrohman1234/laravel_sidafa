@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP april
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$april->santri->id_santri}}-{{$april->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$april->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($april->nominal)}} | <br>
								Waktu : {{$april->waktu}} | <br>
								Status : {{$april->status}} | <br>
								Admin : {{$april->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$april->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/april/kwitansiThermo', $april->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/april/kwitansiTinta', $april->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection