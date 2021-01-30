@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data administrasi santri baru
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$administrasisantribaru->santri->id_santri}}-{{$administrasisantribaru->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$administrasisantribaru->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($administrasisantribaru->nominal)}} | <br>
								Waktu : {{$administrasisantribaru->waktu}} | <br>
								Status : {{$administrasisantribaru->status}} | <br>
								Admin : {{$administrasisantribaru->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$administrasisantribaru->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/administrasisantribaru/kwitansiThermo', $administrasisantribaru->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/administrasisantribaru/kwitansiTinta', $administrasisantribaru->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection