@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP agustus
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$agustus->santri->id_santri}}-{{$agustus->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$agustus->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($agustus->nominal)}} | <br>
								Waktu : {{$agustus->waktu}} | <br>
								Status : {{$agustus->status}} | <br>
								Admin : {{$agustus->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$agustus->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/agustus/kwitansiThermo', $agustus->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/agustus/kwitansiTinta', $agustus->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection