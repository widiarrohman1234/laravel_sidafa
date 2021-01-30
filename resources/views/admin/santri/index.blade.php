@extends('admin.template.base')

@section('content')
@if ((request()->user()->level1) == 'putra')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link btn btn-success active" id="nav-aktif-tab" data-toggle="tab" href="#nav-aktif" role="tab" aria-controls="nav-aktif" aria-selected="true">AKTIF</a>
					<a class="nav-item nav-link btn btn-danger" id="nav-alumni-tab" data-toggle="tab" href="#nav-alumni" role="tab" aria-controls="nav-alumni" aria-selected="false">ALUMNI</a>
					<a class="nav-item nav-link btn btn-dark" id="nav-total-tab" data-toggle="tab" href="#nav-total" role="tab" aria-controls="nav-total" aria-selected="false">TOTAL</a>
				</div>
			</nav>
			<br>
		<div class="container-fluid">
			<div class="row">
	          <div class="col-lg-3 col-6">
	            <!-- small box -->
	            <div class="small-box bg-success">
	              <div class="inner">
	                <h3>{{$count_putra_aktif[0]->aktif}}</h3>

	                <p>Santri Aktif</p>
	              </div>
	              <div class="icon">
	                <i class="ion ion-bag"></i>
	              </div>
	              <a href="#" class="small-box-footer">More Aktif <i class="fas fa-arrow-circle-right"></i></a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-6">
	            <!-- small box -->
	            <div class="small-box bg-danger">
	              <div class="inner">
	                <h3>{{$count_putra_alumni[0]->alumni}}</h3>

	                <p>Santri Alumni</p>
	              </div>
	              <div class="icon">
	                <i class="ion ion-bag"></i>
	              </div>
	              <a href="#" class="small-box-footer">More alumni <i class="fas fa-arrow-circle-right"></i></a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-6">
	            <!-- small box -->
	            <div class="small-box bg-dark">
	              <div class="inner">
	                <h3>{{$count_putra_total[0]->total}}</h3>

	                <p>Santri Total</p>
	              </div>
	              <div class="icon">
	                <i class="ion ion-bag"></i>
	              </div>
	              <a href="#" class="small-box-footer">More total <i class="fas fa-arrow-circle-right"></i></a>
	            </div>
	          </div>
			</div>
		</div>

			<div class="tab-content" id="nav-tabContent">
			<!-- aktif -->
			<div class="tab-pane fade show active" id="nav-aktif" role="tabpanel" aria-labelledby="nav-aktif-tab">
				<div class="card-header">
						<button type="button" class="btn btn-success">Data Santri aktif</button>
						<a href="{{url('admin/santri/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Queri</th>
								<th>Nama</th>
								<th>JK</th>
								<th>Status</th>
								<th>Status SPP</th>
								<th>NO HP</th>

							</thead>
							<tbody>
								@foreach($putra_aktif as $santri)
							 <tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
									<a href="{{url('admin/santri', $santri->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
									<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
									@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
									</div>
								</td>
								<td>{{$santri->id_santri}}</td>
								<td>{{$santri->nama_santri}}</td>
								<td>{{$santri->jk}}</td>
								<td>{{$santri->sts_santri}}</td>
								<td>{{$santri->sts_ads_spp}}</td>
								<td>{{$santri->no_hp_ayah}}</td>

							 </tr>
							 	@endforeach
							</tbody>
						</table>
				</div>
			</div>

			<!-- total -->
			<div class="tab-pane fade show" id="nav-total" role="tabpanel" aria-labelledby="nav-total-tab">
				<div class="card-header">
						<button type="button" class="btn btn-dark">Data Santri total</button>
						<a href="{{url('admin/santri/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Queri</th>
								<th>Nama</th>
								<th>JK</th>
								<th>Status</th>
								<th>Status SPP</th>
								<th>NO HP</th>

							</thead>
							<tbody>
								@foreach($putra_total as $santri)
							 <tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
									<a href="{{url('admin/santri', $santri->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
									<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
									@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
									</div>
								</td>
								<td>{{$santri->id_santri}}</td>
								<td>{{$santri->nama_santri}}</td>
								<td>{{$santri->jk}}</td>
								<td>{{$santri->sts_santri}}</td>
								<td>{{$santri->sts_ads_spp}}</td>
								<td>{{$santri->no_hp_ayah}}</td>

							 </tr>
							 	@endforeach
							</tbody>
						</table>
				</div>
			</div>

			<!-- alumni -->
			<div class="tab-pane fade show" id="nav-alumni" role="tabpanel" aria-labelledby="nav-alumni-tab">
				<div class="card-header">
						<button type="button" class="btn btn-danger">Data Santri alumni</button>
						<a href="{{url('admin/santri/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Queri</th>
								<th>Nama</th>
								<th>JK</th>
								<th>Status</th>
								<th>Status SPP</th>
								<th>NO HP</th>

							</thead>
							<tbody>
								@foreach($putra_alumni as $santri)
							 <tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
									<a href="{{url('admin/santri', $santri->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
									<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
									@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
									</div>
								</td>
								<td>{{$santri->id_santri}}</td>
								<td>{{$santri->nama_santri}}</td>
								<td>{{$santri->jk}}</td>
								<td>{{$santri->sts_santri}}</td>
								<td>{{$santri->sts_ads_spp}}</td>
								<td>{{$santri->no_hp_ayah}}</td>

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
@elseif((request()->user()->level1) == 'putri')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
			<nav>
				<div class="nav nav-tabs" id="nav-tab" role="tablist">
					<a class="nav-item nav-link btn btn-success active" id="nav-aktif-tab" data-toggle="tab" href="#nav-aktif" role="tab" aria-controls="nav-aktif" aria-selected="true">AKTIF</a>
					<a class="nav-item nav-link btn btn-danger" id="nav-alumni-tab" data-toggle="tab" href="#nav-alumni" role="tab" aria-controls="nav-alumni" aria-selected="false">ALUMNI</a>
					<a class="nav-item nav-link btn btn-dark" id="nav-total-tab" data-toggle="tab" href="#nav-total" role="tab" aria-controls="nav-total" aria-selected="false">TOTAL</a>
				</div>
			</nav>
			<br>
		<div class="container-fluid">
			<div class="row">
	          <div class="col-lg-3 col-6">
	            <!-- small box -->
	            <div class="small-box bg-success">
	              <div class="inner">
	                <h3>{{$count_putri_aktif[0]->aktif}}</h3>

	                <p>Santri Aktif</p>
	              </div>
	              <div class="icon">
	                <i class="ion ion-bag"></i>
	              </div>
	              <a href="#" class="small-box-footer">More Aktif <i class="fas fa-arrow-circle-right"></i></a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-6">
	            <!-- small box -->
	            <div class="small-box bg-danger">
	              <div class="inner">
	                <h3>{{$count_putri_alumni[0]->alumni}}</h3>

	                <p>Santri Alumni</p>
	              </div>
	              <div class="icon">
	                <i class="ion ion-bag"></i>
	              </div>
	              <a href="#" class="small-box-footer">More alumni <i class="fas fa-arrow-circle-right"></i></a>
	            </div>
	          </div>

	          <div class="col-lg-3 col-6">
	            <!-- small box -->
	            <div class="small-box bg-dark">
	              <div class="inner">
	                <h3>{{$count_putri_total[0]->total}}</h3>

	                <p>Santri Total</p>
	              </div>
	              <div class="icon">
	                <i class="ion ion-bag"></i>
	              </div>
	              <a href="#" class="small-box-footer">More total <i class="fas fa-arrow-circle-right"></i></a>
	            </div>
	          </div>
			</div>
		</div>

			<div class="tab-content" id="nav-tabContent">
			<!-- aktif -->
			<div class="tab-pane fade show active" id="nav-aktif" role="tabpanel" aria-labelledby="nav-aktif-tab">
				<div class="card-header">
						<button type="button" class="btn btn-success">Data Santri aktif</button>
						<a href="{{url('admin/santri/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Queri</th>
								<th>Nama</th>
								<th>JK</th>
								<th>Status</th>
								<th>Status SPP</th>
								<th>NO HP</th>

							</thead>
							<tbody>
								@foreach($putri_aktif as $santri)
							 <tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
									<a href="{{url('admin/santri', $santri->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
									<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
									@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
									</div>
								</td>
								<td>{{$santri->id_santri}}</td>
								<td>{{$santri->nama_santri}}</td>
								<td>{{$santri->jk}}</td>
								<td>{{$santri->sts_santri}}</td>
								<td>{{$santri->sts_ads_spp}}</td>
								<td>{{$santri->no_hp_ayah}}</td>

							 </tr>
							 	@endforeach
							</tbody>
						</table>
				</div>
			</div>

			<!-- total -->
			<div class="tab-pane fade show" id="nav-total" role="tabpanel" aria-labelledby="nav-total-tab">
				<div class="card-header">
						<button type="button" class="btn btn-dark">Data Santri total</button>
						<a href="{{url('admin/santri/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Queri</th>
								<th>Nama</th>
								<th>JK</th>
								<th>Status</th>
								<th>Status SPP</th>
								<th>NO HP</th>

							</thead>
							<tbody>
								@foreach($putri_total as $santri)
							 <tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
									<a href="{{url('admin/santri', $santri->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
									<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
									@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
									</div>
								</td>
								<td>{{$santri->id_santri}}</td>
								<td>{{$santri->nama_santri}}</td>
								<td>{{$santri->jk}}</td>
								<td>{{$santri->sts_santri}}</td>
								<td>{{$santri->sts_ads_spp}}</td>
								<td>{{$santri->no_hp_ayah}}</td>

							 </tr>
							 	@endforeach
							</tbody>
						</table>
				</div>
			</div>

			<!-- alumni -->
			<div class="tab-pane fade show" id="nav-alumni" role="tabpanel" aria-labelledby="nav-alumni-tab">
				<div class="card-header">
						<button type="button" class="btn btn-danger">Data Santri alumni</button>
						<a href="{{url('admin/santri/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<th>No</th>
								<th>Aksi</th>
								<th>Queri</th>
								<th>Nama</th>
								<th>JK</th>
								<th>Status</th>
								<th>Status SPP</th>
								<th>NO HP</th>

							</thead>
							<tbody>
								@foreach($putri_alumni as $santri)
							 <tr>
								<td>{{$loop->iteration}}</td>
								<td>
									<div class="btn-group">
									<a href="{{url('admin/santri', $santri->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
									<a href="{{url('admin/santri', $santri->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
									@include('admin.template.utils.delete', ['url' => url('admin/santri', $santri->id)])
									</div>
								</td>
								<td>{{$santri->id_santri}}</td>
								<td>{{$santri->nama_santri}}</td>
								<td>{{$santri->jk}}</td>
								<td>{{$santri->sts_santri}}</td>
								<td>{{$santri->sts_ads_spp}}</td>
								<td>{{$santri->no_hp_ayah}}</td>

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
@endif


@endsection