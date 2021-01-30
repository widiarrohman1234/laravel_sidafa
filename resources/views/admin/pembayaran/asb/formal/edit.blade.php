@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Edit Data SPP administrasisantribaru
				</div>
				<div class="card-body">
					<form action="{{url('admin/administrasisantribaru',$administrasisantribaru->id)}}" method="post">
						@csrf
						@method("PUT")
					<div class="form-row">	
						<div class="form-group col-md-6">
		                  <label for="" class="control-label">ID Santri </label>
						<input type="text" name="id_santri" class="form-control" value="{{$administrasisantribaru->id_santri}}" readonly="">
		                </div>		

		                <div class="form-group col-md-6">
							<label for="" class="control-label">Nominal</label>
							<input type="text" name="nominal" class="form-control" value="{{$administrasisantribaru->nominal}}">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="" class="control-label">ID Administrasi </label>
							<input type="text" name="id_administrasi" class="form-control" value="{{$administrasisantribaru->id_administrasi}}" readonly="">
						</div>	
						
					    <div class="form-group col-md-6">
							<label for="" class="control-label">Waktu</label>
							<input type="date" name="waktu" class="form-control" value="{{$administrasisantribaru->waktu}}">
						</div>
					</div>

					<div class="form-row">
						<div class="form-group col-md-6">
							<label for="" class="control-label">Status</label>
							<select name="status" class="col-sm-12 form-control">
					          <option type="select" value="{{$administrasisantribaru->status}}" selected>--{{$administrasisantribaru->status}}--</option>
					          <option type="select" value="lunas">LUNAS</option>

					          <option type="select" value="belum lunas">BELUM LUNAS</option>
					        </select>
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