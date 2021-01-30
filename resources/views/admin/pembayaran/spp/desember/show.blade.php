@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Detail Data SPP desember
				</div>
				<div class="card-body">
					<table class="table">
						<tbody>

							<h3>{{$desember->santri->id_santri}}-{{$desember->santri->nama_santri}}</h3>
							<hr>
							<p> Administrasi : {{$desember->administrasi->nama_administrasi}} | <br>
								Nominal : Rp.{{number_format($desember->nominal)}} | <br>
								Waktu : {{$desember->waktu}} | <br>
								Status : {{$desember->status}} | <br>
								Admin : {{$desember->user->username}} | <br>
							</p>
							<p>
								Keterangan : {{$desember->keterangan}}
							</p>
						</tbody>
						<a href="{{url('admin/desember/kwitansiThermo', $desember->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Thermo</a>

						<a href="{{url('admin/desember/kwitansiTinta', $desember->id)}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Tinta</a>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection