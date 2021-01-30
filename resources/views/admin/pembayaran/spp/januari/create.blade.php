@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data SPP januari
				</div>
				<div class="card-body">
					<form action="{{url('admin/januari')}}" method="post">
						@csrf
					<div class="form-row">	
						<div class="form-group col-md-6">
		                  <label>ID Santri</label>
		                  <select name="id_santri" class="form-control select2" style="width: 100%;">
		                  	<option value="">Masukkan Data Santri</option>
								@if ((request()->user()->level1) == 'putra')
									@foreach($list_santri_a as $januari)
										<option value="{{$januari->id}}">{{$januari->id_santri}}-{{$januari->nama_santri}}-> {{$januari->sts_ads_spp}}
										</option>
									@endforeach
								@elseif((request()->user()->level1) == 'putri')
									
								@endif
		                  </select>
		                </div>		

		                <div class="form-group col-md-6">
							<label for="" class="control-label">Nominal</label>
							<input type="text" name="nominal" class="form-control">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="" class="control-label">Status</label>
							<select name="status"class="col-sm-12">
					          <option type="select" value="lunas" selected>LUNAS</option>
					          <option type="select" value="belum lunas">BELUM LUNAS</option>
					        </select>
					    </div>

					    <div class="form-group col-md-6">
							<label for="" class="control-label">Waktu</label>
							<input type="date" name="waktu" class="form-control" value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("Y-m-d"); ?>">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="" class="control-label">ID Administrasi </label>
							<input type="text" name="id_administrasi" class="form-control" value="1" readonly>
							<input type="text" name="" class="form-control" value="sppJanuari" readonly>
						</div>	

						<div class="form-group col-md-6">
							<label for="" class="control-label">ID Admin </label>
							<input type="text" name="id_user" class="form-control" value="{{request()->user()->id}}" readonly>
							<input type="text" name="" class="form-control" value="{{request()->user()->username}}"readonly>
						</div>
					</div>

					<div class="form-group">
						<label for="" class="control-label">Keterangan</label>
						<textarea type="text" name="keterangan" class="form-control"></textarea>
					</div>

					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>


@endsection