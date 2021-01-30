@extends('admin.template.base')

@section('content')

@if ((request()->user()->level1) == 'putra')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link btn btn-success active" id="nav-index-tab" data-toggle="tab" href="#nav-index" role="tab" aria-controls="nav-index" aria-selected="true">INDEX</a>
						<a class="nav-item nav-link btn btn-warning" id="nav-laporan-tab" data-toggle="tab" href="#nav-laporan" role="tab" aria-controls="nav-laporan" aria-selected="false">LAPORAN</a>
					</div>
				</nav>
				<!-- index -->
<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-index" role="tabpanel" aria-labelledby="nav-index-tab">
<!-- index -->

				<div class="card-header">
					<button class="btn btn-success">Data Absen MWS</button>
					<a href="{{url('admin/mws/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>ID Santri</th>
							<th>Nama Santri</th>
							<th>JK</th>
							<th>Bulan</th>
							<th>Waktu</th>
							<th>Status</th>
							<th>Ket</th>
						</thead>
						<tbody>
							@foreach($list_absenmws_putra as $absenmws)
						 <tr>
							<td>{{$loop->iteration}}</td>
							<td>
								<div class="btn-group">
								<a href="{{url('admin/mws', $absenmws->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
								<a href="{{url('admin/mws', $absenmws->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
								@include('admin.template.utils.delete', ['url' => url('admin/mws', $absenmws->id)])
								</div>
							</td>
							<td>{{$absenmws->id_santri}}</td>
							<td>{{$absenmws->nama_santri}}</td>
							<td>{{$absenmws->jk}}</td>
							<td>{{$absenmws->bln}}</td>
							<td>{{$absenmws->waktu}}</td>
							<td>{{$absenmws->status}}</td>
							<td>{{$absenmws->ket}}</td>

						 </tr>
						 	@endforeach
						</tbody>
					</table>
				</div>
	</div>
	<!-- laporan -->
	<div class="tab-pane fade show" id="nav-laporan" role="tabpanel" aria-labelledby="nav-laporan-tab">

	<div class="card-body">
		<div class="card-header">
					<button class="btn btn-warning">Data Laporan Absen MWS</button>
					<a href="{{url('admin/mws/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>ID Santri</th>
							<th>Nama Santri</th>
							<th>jan</th>
							<th>feb</th>
							<th>mar</th>
							<th>apr</th>
							<th>mei</th>
							<th>jun</th>
							<th>jul</th>
							<th>agu</th>
							<th>sep</th>
							<th>okt</th>
							<th>nov</th>
							<th>des</th>
							<th>Count</th>

						</thead>
						<tbody>
							@foreach($laporan_a as $absenmws)
						 <tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$absenmws->id_santri}}</td>
							<td>{{$absenmws->nama_santri}}</td>
							<td><!-- jan -->
								@if($absenmws->jan == 'hadir')
								<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->jan == '0')
								<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- feb -->
								@if($absenmws->feb == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->feb == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
									
								@endif
							</td>
							<td><!-- mar -->
								@if($absenmws->mar == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->mar == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- apr -->
								@if($absenmws->apr == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->apr == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- mei -->
								@if($absenmws->mei == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->mei == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jun -->
								@if($absenmws->jun == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->jun == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jul -->
								@if($absenmws->jul == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->jul == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- agu -->
								@if($absenmws->agu == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->agu == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- sep -->
								@if($absenmws->sep == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->sep == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- okt -->
								@if($absenmws->okt == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->okt == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- nov -->
								@if($absenmws->nov == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->nov == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- des -->
								@if($absenmws->des == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->des == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- count -->
								{{$absenmws->acount}}/12
							</td>
						 </tr>
						 	@endforeach
						</tbody>
					</table>
				</div>
	</div>
	</div>
			</div>

			</div>
		</div>
	</div>

</div>

@elseif((request()->user()->level1) == 'putri')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<nav>
					<div class="nav nav-tabs" id="nav-tab" role="tablist">
						<a class="nav-item nav-link btn btn-success active" id="nav-index-tab" data-toggle="tab" href="#nav-index" role="tab" aria-controls="nav-index" aria-selected="true">INDEX</a>
						<a class="nav-item nav-link btn btn-warning" id="nav-laporan-tab" data-toggle="tab" href="#nav-laporan" role="tab" aria-controls="nav-laporan" aria-selected="false">LAPORAN</a>
					</div>
				</nav>
				<!-- index -->
<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-index" role="tabpanel" aria-labelledby="nav-index-tab">
<!-- index -->

				<div class="card-header">
					<button class="btn btn-success">Data Absen MWS</button>
					<a href="{{url('admin/mws/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>ID Santri</th>
							<th>Nama Santri</th>
							<th>JK</th>
							<th>Bulan</th>
							<th>Waktu</th>
							<th>Status</th>
							<th>Ket</th>
						</thead>
						<tbody>
							@foreach($list_absenmws_putri as $absenmws)
						 <tr>
							<td>{{$loop->iteration}}</td>
							<td>
								<div class="btn-group">
								<a href="{{url('admin/mws', $absenmws->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
								<a href="{{url('admin/mws', $absenmws->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
								@include('admin.template.utils.delete', ['url' => url('admin/mws', $absenmws->id)])
								</div>
							</td>
							<td>{{$absenmws->id_santri}}</td>
							<td>{{$absenmws->nama_santri}}</td>
							<td>{{$absenmws->jk}}</td>
							<td>{{$absenmws->bln}}</td>
							<td>{{$absenmws->waktu}}</td>
							<td>{{$absenmws->status}}</td>
							<td>{{$absenmws->ket}}</td>

						 </tr>
						 	@endforeach
						</tbody>
					</table>
				</div>
	</div>
	<!-- laporan -->
	<div class="tab-pane fade show" id="nav-laporan" role="tabpanel" aria-labelledby="nav-laporan-tab">

	<div class="card-body">
		<div class="card-header">
					<button class="btn btn-warning">Data Laporan Absen MWS</button>
					<a href="{{url('admin/mws/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>ID Santri</th>
							<th>Nama Santri</th>
							<th>jan</th>
							<th>feb</th>
							<th>mar</th>
							<th>apr</th>
							<th>mei</th>
							<th>jun</th>
							<th>jul</th>
							<th>agu</th>
							<th>sep</th>
							<th>okt</th>
							<th>nov</th>
							<th>des</th>
							<th>Count</th>
						</thead>
						<tbody>
							@foreach($laporan_i as $absenmws)
						 <tr>
							<td>{{$loop->iteration}}</td>
							<td>{{$absenmws->id_santri}}</td>
							<td>{{$absenmws->nama_santri}}</td>
							<td><!-- jan -->
								@if($absenmws->jan == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->jan == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- feb -->
								@if($absenmws->feb == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></button>
								@elseif($absenmws->feb == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
									
								@endif
							</td>
							<td><!-- mar -->
								@if($absenmws->mar == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->mar == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- apr -->
								@if($absenmws->apr == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->apr == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- mei -->
								@if($absenmws->mei == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->mei == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jun -->
								@if($absenmws->jun == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->jun == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- jul -->
								@if($absenmws->jul == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->jul == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- agu -->
								@if($absenmws->agu == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->agu == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- sep -->
								@if($absenmws->sep == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->sep == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- okt -->
								@if($absenmws->okt == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->okt == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- nov -->
								@if($absenmws->nov == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->nov == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- des -->
								@if($absenmws->des == 'hadir')
									<button class="btn btn-success"><i class="fa fa-check"></i></button>
								@elseif($absenmws->des == '0')
									<button class="btn btn-danger"><i class="fa fa-times"></i></button>
								@endif
							</td>
							<td><!-- count -->
								{{$absenmws->acount}}/12
							</td>
						 </tr>
						 	@endforeach
						</tbody>
					</table>
				</div>
	</div>
	</div>
			</div>

			</div>
		</div>
	</div>

</div>
@endif


@endsection