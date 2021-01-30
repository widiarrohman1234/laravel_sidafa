@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data User
				</div>
				<div class="card-body">
					<form action="{{url('admin/user')}}" method="post">
						@csrf
					<div class="form-group">
						<label for="" class="control-label">Nama </label>
						<input type="text" name="username" class="form-control">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Email </label>
						<input type="text" name="email" class="form-control">
					</div>

					<div class="form-group">
						<label for="" class="control-label">Password </label>
						<input type="password" name="password" class="form-control">
					</div>

						<div class="form-group">
							<label for="" class="control-label">Level 1</label>
							<!-- <input type="text" name="level1" class="form-control"> -->
							<select class="form-control" name="level1">
								<option value="">-LEVEL1-</option>
								@foreach($level1 as $data)
								<option value="{{$data->level1}}">{{$data->level1}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="" class="control-label">Level 2</label>
							<!-- <input type="text" name="level2" class="form-control"> -->
							<select class="form-control" name="level2">
								<option value="">-LEVEL2-</option>
								@foreach($level2 as $data)
								<option value="{{$data->level2}}">{{$data->level2}}</option>
								@endforeach
							</select>
						</div>	

					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection