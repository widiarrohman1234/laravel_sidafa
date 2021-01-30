@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Data User
					<a href="{{url('admin/user/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i> Tambah</a>
				</div>
				<div class="card-body">
					<table class="table table-datatable">
						<thead>
							<th>No</th>
							<th>Aksi</th>
							<th>username</th>
							<th>email</th>
							<th>Level1</th>
							<th>Level2</th>
						</thead>
						<tbody>
							@foreach($list_user as $user)
						 <tr>
							<td>{{$loop->iteration}}</td>
							<td>
								<div class="btn-group">
								<a href="{{url('admin/user', $user->id)}}" class="btn btn-dark float-right"><i class="fa fa-info"></i></a>
								<a href="{{url('admin/user', $user->id)}}/edit" class="btn btn-warning float-right"><i class="fa fa-edit"></i></a>
								@include('admin.template.utils.delete', ['url' => url('admin/user', $user->id)])
								</div>
							</td>
							<td>{{$user->username}}</td>
							<td>{{$user->email}}</td>
							<td>@if($user->level1 == 'putra')
								<button class="btn btn-danger">{{$user->level1}}</button>
								@elseif($user->level1)
								<button class="btn btn-success">{{$user->level1}}</button>
								@endif
							</td>
							<td>{{$user->level2}}</td>
						 </tr>
						 	@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection