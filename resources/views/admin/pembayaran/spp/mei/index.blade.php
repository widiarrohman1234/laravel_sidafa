@extends('admin.template.base')

@section('content')
<div class="container">
<p class="h1" align="center">SPP-mei</p>
<div class="row">

@if ((request()->user()->level1) == 'putra')
<div class="col-md-12 mt-5">
<div class="card">
	<nav>
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link btn btn-success active" id="nav-index-tab" data-toggle="tab" href="#nav-index" role="tab" aria-controls="nav-index" aria-selected="true">INDEX</a>
			<a class="nav-item nav-link btn btn-danger" id="nav-tunggakan-tab" data-toggle="tab" href="#nav-tunggakan" role="tab" aria-controls="nav-tunggakan" aria-selected="false">TUNGGAKAN</a>
			<a class="nav-item nav-link btn btn-warning" id="nav-laporan-tab" data-toggle="tab" href="#nav-laporan" role="tab" aria-controls="nav-laporan" aria-selected="false">LAPORAN</a>
		</div>
	</nav>
<div class="card-body">
<!-- index -->
<div class="tab-content" id="nav-tabContent">
	<div class="tab-pane fade show active" id="nav-index" role="tabpanel" aria-labelledby="nav-index-tab">
	<p>Taget = <button type="button" class="btn btn-dark">{{$target[0]->aktif}} orang</button></p>
	
	<p>Sudah = <button type="button" class="btn btn-success">{{$sudah}} orang</button></p>

	<p>Belum SPP50= <button type="button" class="btn btn-danger">{{$belumSpp50[0]->belumSpp50}} orang</button> x Rp.50.000 = <button type="button" class="btn btn-danger">Rp.{{number_format(($belumSpp50[0]->belumSpp50)*50000)}}</button></p>

	<p>Belum SPP250= <button type="button" class="btn btn-danger">{{$belumSpp300[0]->belumSpp300}} orang</button> x Rp.250.000 = <button type="button" class="btn btn-danger">Rp.{{number_format(($belumSpp300[0]->belumSpp300)*250000)}}</button></p>

	<hr>
	<button type="button" class="btn btn-success">Data SPP mei Index</button>
	<a href="{{url('admin/mei/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
	<div class="card-body">
	<table class="table table-datatable">
		<thead>
			<th>No</th>
			<th>Aksi</th>
			<th>ID Santri</th>
			<th>Nama Santri</th>
			<th>Komite</th>
			<th>Nominal</th>
			<th>Waktu</th>
			<th>Status</th>
			<th>Admin</th>
			<th>Keterangan</th>
		</thead>
		<tbody>
		@foreach($index as $mei)
		 <tr>
			<td>{{$loop->iteration}}</td>
			<td>

			<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			  <div class="btn-group" role="group">
			    <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			      Print Data
			    </button>
			    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
			      <a class="dropdown-item" href="{{url('admin/mei/kwitansiThermo', $mei->id)}}">Print Thermo (58mm)</a>
			      <a class="dropdown-item" href="#" >Print Thermo (80mm)</a>
			      <a class="dropdown-item" href="{{url('admin/mei/kwitansiTinta', $mei->id)}}" >Print Tinta</a>
			    </div>
			  </div>
			</div>

			<div class="btn-group">
			<a href="{{url('admin/mei', $mei->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
			<a href="{{url('admin/mei', $mei->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
			@include('admin.template.utils.delete', ['url' => url('admin/mei', $mei->id)])
			</div>
			</td>
			<td>{{$mei->id_santri}}</td>
			<td>{{$mei->nama_santri}}</td>
			<td>{{$mei->sts_ads_spp}}</td>
			<td>Rp.{{number_format($mei->nominal)}}</td>
			<td>{{$mei->waktu}}</td>
			<td>@if($mei->status == 'lunas')
			<button type="button" class="btn btn-success">{{$mei->status}}</button>
			@else
			<button type="button" class="btn btn-danger">belum lunas</button>
			@endif
			</td>
			<td>{{$mei->username}}</td>
			<td>{{$mei->keterangan}}</td>
		 </tr>
		@endforeach
		</tbody>
	</table>
	</div>
</div>
<!-- tunggakan -->
<div class="tab-pane fade" id="nav-tunggakan" role="tabpanel" aria-labelledby="nav-tunggakan-tab">
	<p>Taget = <button type="button" class="btn btn-dark">{{$target[0]->aktif}} orang </button></p>
	<p>Sudah = <button type="button" class="btn btn-success">{{$sudah}} orang</button></p>
	<p>Belum SPP50= <button type="button" class="btn btn-danger">{{$belumSpp50[0]->belumSpp50}} orang</button> x Rp.50.000 = <button type="button" class="btn btn-danger">Rp.{{number_format(($belumSpp50[0]->belumSpp50)*50000)}}</button></p>

	<p>Belum SPP250= <button type="button" class="btn btn-danger">{{$belumSpp300[0]->belumSpp300}} orang</button> x Rp.250.000 = <button type="button" class="btn btn-danger">Rp.{{number_format(($belumSpp300[0]->belumSpp300)*250000)}}</button></p>

	<br><hr>
	 <button type="button" class="btn btn-danger">Data SPP mei Tunggakan</button>
	<a href="{{url('admin/mei/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
	<div class="card-body">
		<table class="table table-datatable">
			<thead>
				<th>No</th>
				<th>ID Santri</th>
				<th>Nama Santri</th>
				<th>Komite</th>
				<th>Nominal</th>
				<th>Waktu</th>
				<th>Status</th>
				<th>Admin</th>
				<th>Keterangan</th>
			</thead>
			<tbody>
				@foreach($tunggakan as $mei)
				 <tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$mei->id_santri}}</td>
					<td>{{$mei->nama_santri}}</td>
					<td>{{$mei->sts_ads_spp}}</td>
					<td>Rp.{{number_format($mei->nominal)}}</td>
					<td>-</td>
					<td>@if($mei->status == 'lunas')
					<button type="button" class="btn btn-success">{{$mei->status}}</button>
					@elseif($mei->status == '')
					<button type="button" class="btn btn-danger">belum lunas</button>
					@endif
					</td>
					<td>-</td>
					<td>-</td>
				 </tr>
				 @endforeach
			</tbody>
		</table>
	</div>
</div>
<!-- laporan -->
<div class="tab-pane fade" id="nav-laporan" role="tabpanel" aria-labelledby="nav-laporan-tab">
	<p>Taget = 
		<button type="button" class="btn btn-dark">{{$target[0]->aktif}} orang </button></p>
	<p>Khidmad = <button type="button" class="btn btn-warning">{{$putra_khidmad[0]->khidmad_a}} orang </button></p>
	<p>SPP50 = <button type="button" class="btn btn-warning">{{$putra_spp50[0]->spp50_a}} orang </button></p>
	<p>SPP300 = <button type="button" class="btn btn-warning">{{$putra_spp300[0]->spp300_a}} orang </button></p>
	<p>Komite no spp = <button type="button" class="btn btn-success">{{$nospp[0]->nospp}} orang</button></p>
	<p>Komite spp50 = <button type="button" class="btn btn-success">{{$spp50[0]->spp50}} orang</button></p>
	<p>Komite spp100 = <button type="button" class="btn btn-success">{{$spp100[0]->spp100}} orang</button></p>
	<p>Komite spp150 = <button type="button" class="btn btn-success">{{$spp150[0]->spp150}} orang</button></p>
	<p>Komite spp200 = <button type="button" class="btn btn-success">{{$spp200[0]->spp200}} orang</button></p>
	<p>Komite spp250 = <button type="button" class="btn btn-success">{{$spp250[0]->spp250}} orang</button></p>
	<p>Komite spp300 = <button type="button" class="btn btn-success">{{$spp300[0]->spp300}} orang</button></p>
	<p>Komite spp350 = <button type="button" class="btn btn-success">{{$spp350[0]->spp350}} orang</button></p>
	<p>Komite spp400 = <button type="button" class="btn btn-success">{{$spp400[0]->spp400}} orang</button></p>
	<p>Komite spp450 = <button type="button" class="btn btn-success">{{$spp450[0]->spp450}} orang</button></p>
	<p>Komite spp500 = <button type="button" class="btn btn-success">{{$spp500[0]->spp500}} orang</button></p>
	<p>Komite spp550 = <button type="button" class="btn btn-success">{{$spp550[0]->spp550}} orang</button></p>
	<p>Komite spp600 = <button type="button" class="btn btn-success">{{$spp600[0]->spp600}} orang</button></p>

	<br><hr>
	<a href="{{url('admin/laporanDataKomite')}}" class="btn btn-dark float-right" target="_blank"><i class="fa fa-print"></i> Print Laporan Komite</a>
</div>

</div>
</div>
</div>
@elseif((request()->user()->level1) == 'putri')
<h3 align="center">SABAR YAA, MASIH DALAM TAHAP PEMBUATAN...</h3>
@endif
</div>
</div>
</div>
</div>

@endsection