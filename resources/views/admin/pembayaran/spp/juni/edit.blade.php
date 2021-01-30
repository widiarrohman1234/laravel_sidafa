@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Edit Data SPP juni
				</div>
				<div class="card-body">
					<form action="{{url('admin/juni', $juni->id)}}" method="post">
						@csrf
						@method("PUT")
					<div class="form-group">
						<label for="" class="control-label">ID Santri </label>
						<input type="text" name="id_santri" class="form-control" value="{{$juni->id_santri}}">
					</div>

					<div class="form-group">
						<label for="" class="control-label">ID Administrasi </label>
						<input type="text" name="id_administrasi" class="form-control" value="{{$juni->id_administrasi}}">
					</div>

					<div class="form-group">
						<label for="" class="control-label">ID Admin </label>
						<input type="text" name="id_user" class="form-control" value="{{$juni->id_user}}">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Nominal</label>
						<input type="text" name="nominal" class="form-control" value="{{$juni->nominal}}">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Waktu</label>
						<input type="date" name="waktu" class="form-control" value="{{$juni->waktu}}">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Status</label>
						<input type="text" name="status" class="form-control" value="{{$juni->status}}">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Keterangan</label>
						<input type="text" name="keterangan" class="form-control" value="{{$juni->keterangan}}">
					</div>

					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection