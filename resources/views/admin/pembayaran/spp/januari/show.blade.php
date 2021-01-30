@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP Januari
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$januari->santri->id_santri}}-{{$januari->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$januari->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($januari->nominal)}} | <br>
								Waktu : {{$januari->waktu}} | <br>
								Status : {{$januari->status}} | <br>
								Admin : {{$januari->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$januari->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/januari/kwitansiThermo', $januari->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/januari/kwitansiTinta', $januari->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection