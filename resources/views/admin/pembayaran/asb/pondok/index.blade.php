@extends('admin.template.base')

@section('content')
<div class="container">
<p class="h1" align="center">SPP-administrasisantribaru</p>
<div class="row">

@if ((request()->user()->level1) == 'putra')
<div class="col-md-12 mt-5">
<div class="card">
	<nav>
		<div class="nav nav-tabs" id="nav-tab" role="tablist">
			<a class="nav-item nav-link btn btn-success active" id="nav-index-tab" data-toggle="tab" href="#nav-index" role="tab" aria-controls="nav-index" aria-selected="true">INDEX</a>
		</div>
	</nav>
<div class="card-body">
<!-- index -->
<div class="tab-content" id="nav-tabContent">

	<button type="button" class="btn btn-success">Data administrasi santri baru Index</button>
	<a href="{{url('admin/administrasisantribarupondok/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
	<div class="card-body">
	<table class="table table-datatable">
		<thead>
			<th>No</th>
			<th>Aksi</th>
			<th>ID Santri</th>
			<th>Nama Santri</th>
			<th>Nama Administrasi</th>
			<th>Nominal</th>
			<th>Waktu</th>
			<th>Status</th>
			<th>Admin</th>
			<th>Keterangan</th>
		</thead>
		<tbody>
		@foreach($list_administrasi_santri_baru as $administrasisantribaru)
		 <tr>
			<td>{{$loop->iteration}}</td>
			<td>

			<div class="btn-group" role="group" aria-label="Button group with nested dropdown">
			  <div class="btn-group" role="group">
			    <button id="btnGroupDrop1" type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			      Print Data
			    </button>
			    <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
			      <a class="dropdown-item" href="{{url('admin/administrasisantribarupondok/kwitansiThermo', $administrasisantribaru->id)}}">Print Thermo (58mm)</a>
			      <a class="dropdown-item" href="#" >Print Thermo (80mm)</a>
			      <a class="dropdown-item" href="{{url('admin/administrasisantribarupondok/kwitansiTinta', $administrasisantribaru->id)}}" >Print Tinta</a>
			    </div>
			  </div>
			</div>

			<div class="btn-group">
			<a href="{{url('admin/administrasisantribarupondok', $administrasisantribaru->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
			<a href="{{url('admin/administrasisantribarupondok', $administrasisantribaru->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
			@include('admin.template.utils.delete', ['url' => url('admin/administrasisantribarupondok', $administrasisantribaru->id)])
			</div>
			</td>
			<td>{{$administrasisantribaru->id_santri}}</td>
			<td>{{$administrasisantribaru->nama_santri}}</td>
			<td>{{$administrasisantribaru->nama_administrasi}}</td>
			<td>Rp.{{number_format($administrasisantribaru->nominal)}}</td>
			<td>{{$administrasisantribaru->waktu}}</td>
			<td>@if($administrasisantribaru->status == 'lunas')
			<button type="button" class="btn btn-success">{{$administrasisantribaru->status}}</button>
			@else
			<button type="button" class="btn btn-danger">belum lunas</button>
			@endif
			</td>
			<td>{{$administrasisantribaru->username}}</td>
			<td>{{$administrasisantribaru->keterangan}}</td>
		 </tr>
		@endforeach
		</tbody>
	</table>
	</div>
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