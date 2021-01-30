@extends('admin.template.base')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 mt-5">
			<div class="card">
				<div class="card-header">
					Tambah Data Absen MWS
				</div>
				<div class="card-body">
					<form action="{{url('admin/mws')}}" method="post">
						@csrf
						<div class="form-group">
		                  <label >ID Santri</label>
		                  <select name="id_santri" class="form-control select2" style="width: 100%;">
		                  		<option value="">-ABSEN MWS-</option>
		                  	@foreach($list_absenmws as $absenmws)
			                    <option value="{{$absenmws->id}}">{{$absenmws->id_santri}}-{{$absenmws->nama_santri}}</option>
		                    @endforeach
		                  </select>
		                </div>

		        			<div class="row">
									  <label for="inputName" class="col-sm-2 col-form-label">Waktu</label>
	                    			<div class="form-group row">
									  <div class="col-sm-12">
									    <input type="date" name="waktu" class="form-control" value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("Y-m-d"); ?>">
									  </div>
									</div>


										<label for="inputName" class="col-sm-2 col-form-label">Bulan</label>
	                    			<div class="form-group row">
									  <div class="col-sm-12">
									    <!-- <input type="name" name="bln" class="form-control" value=""> -->
									    <select name="bln" class="form-control">
									    	<option value="<?php date_default_timezone_set('Asia/Pontianak'); echo date("m"); ?>"><?php date_default_timezone_set('Asia/Pontianak'); echo date("m"); ?></option>
									    	<option value="01">01-januari</option>
									    	<option value="02">02-februari</option>
									    	<option value="03">03-maret</option>
									    	<option value="04">04-april</option>
									    	<option value="05">05-mei</option>
									    	<option value="06">06-juni</option>
									    	<option value="07">07-juli</option>
									    	<option value="08">08-agustus</option>
									    	<option value="09">09-september</option>
									    	<option value="10">10-oktober</option>
									    	<option value="11">11-november</option>
									    	<option value="12">12-desember</option>
									    </select>
									  </div>
									</div>


									  <label for="inputName" class="col-sm-2 col-form-label">Status</label>
	                    			<div class="form-group row">
									  <div class="col-sm-12">
									    <select name="status" class="form-control col-sm-12">
								          <option type="select" value="hadir" selected>HADIR</option>
								          <option type="select" value="tidak hadir">TIDAK HADIR</option>
								        </select>
									  </div>
									</div>
	                    	</div>

					<div class="form-group">
						<label for="" class="control-label">Keterangan</label>
						<textarea type="text" name="ket" class="form-control"></textarea> 
					</div>
					<button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button>
					<a type="button" href="{{url('admin/mws')}}" class="btn btn-with float-right"><i class="fa fa-backward"></i> Kembali</a>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection