@extends('admin.template.base')

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile Show</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ url('public/dist/img/avatar5.png')}}"
                       alt="User profile picture">
                </div>
                <h3 class="profile-username text-center">{{$santri->nama_santri}}</h3>
                <p class="text-muted text-center">Software Engineer</p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  B.S. in Computer Science from the University of Tennessee at Knoxville
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">Malibu, California</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">UI Design</span>
                  <span class="tag tag-success">Coding</span>
                  <span class="tag tag-info">Javascript</span>
                  <span class="tag tag-warning">PHP</span>
                  <span class="tag tag-primary">Node.js</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#santri" data-toggle="tab">Santri</a></li>
                  <li class="nav-item"><a class="nav-link" href="#administrasi" data-toggle="tab">Administrasi</a></li>
                  <li class="nav-item"><a class="nav-link" href="#ayah" data-toggle="tab">Ayah</a></li>
                  <li class="nav-item"><a class="nav-link" href="#ibu" data-toggle="tab">Ibu</a></li>
                  <li class="nav-item"><a class="nav-link" href="#wali" data-toggle="tab">Wali</a></li>

                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <!-- santri -->
                	<div class="active tab-pane" id="santri">
                  	Tambah Data Santri
	                <form action="{{url('admin/santri', $santri->id)}}" method="post">
						@csrf
						@method("PUT")
	                    	<div class="row">
									  <label for="inputName" class="col-sm-2 col-form-label">ID santri</label>
	                    			<div class="form-group row">
									  <div class="col-sm-12">
									    <input type="name" class="form-control" name="id_santri" value="{{$santri->id_santri}}">
									  </div>
									</div>

									  <label for="inputName" class="col-sm-2 col-form-label">No Pend</label>
	                    			<div class="form-group row">
									  <div class="col-sm-12">
									    <input type="name" class="form-control" name="no_pend" value="{{$santri->no_pend}}">
									  </div>
									</div>
	                    	</div>

	                    	<div class="row">
								  	<label for="inputName" class="col-sm-2 col-form-label">NIK Santri</label>
								<div class="form-group row">
								  <div class="col-sm-12">
									    <input type="name" class="form-control" name="nik" value="{{$santri->nik}}">
								  </div>
								</div>

								  	<label for="inputName" class="col-sm-2 col-form-label">No KK</label>
								<div class="form-group row">
								  <div class="col-sm-12">
								    <input type="name" class="form-control" name="no_kk" value="{{$santri->no_kk}}">
								  </div>
								</div>
	                    	</div>

	                      	<div class="form-group row">
							  <label for="inputName" class="col-sm-2 col-form-label">Nama Santri</label>
							  <div class="col-sm-10">
							    <input type="name" class="form-control" name="nama_santri" value="{{$santri->nama_santri}}">
							  </div>
							</div>

	                      	<div class="form-group row">
							  <label for="inputName" class="col-sm-2 col-form-label">Status Santri</label>
							  <div class="col-sm-10">
							    <!-- <input type="name" class="form-control" name="sts_santri"> -->
				                <input type="checkbox" name="sts_santri" value="{{$santri->sts_santri}}" checked data-bootstrap-switch data-off-color="danger" data-on-color="success">
							  </div>
							</div>

	                      	<div class="form-group row">
							  <label for="inputName" class="col-sm-2 col-form-label">Tanggal Masuk</label>
							  <div class="col-sm-3">
							    <input type="date" class="form-control" name="tgl_msk" value="{{$santri->tgl_msk}}">
							  </div>
							  <label for="inputName" class="col-sm-3 col-form-label">Tanggal Berhenti</label>
							  <div class="col-sm-3">
							    <input type="date" class="form-control" name="tgl_berhenti" value="{{$santri->tgl_berhenti}}">
							  </div>
							</div>

							<div class="form-group row">
							  <label for="inputName" class="col-sm-2 col-form-label">Formal</label>
							  <div class="col-sm-2">
							    <!-- <input type="name" class="form-control" name="frl"> -->
							    <select name="frl" class="form-control">
							    	<option value="{{$santri->frl}}">{{$santri->frl}}</option>
							    	<option value="paud">PAUD</option>
							    	<option value="tk">TK</option>
							    	<option value="sd">SD</option>
							    	<option value="smp">SMP</option>
							    	<option value="sma">SMA</option>
							    	<option value="smk">SMK</option>
							    	<option value="kuliah">KULIAH</option>
							    	<option value="nonfrl">NON-FORMAL</option>
							    </select>
							  </div>
							  <label for="inputName" class="col-sm-3 col-form-label">Tahun Angkatan</label>
							  <div class="col-sm-2">
							    <input type="name" class="form-control" name="ta" value="{{$santri->ta}}">
							  </div>
							  <label for="inputName" class="col-sm-1 col-form-label">Kamar</label>
							  <div class="col-sm-1">
							    <input type="name" class="form-control" name="kmr" value="{{$santri->kmr}}">
							  </div>
							</div>

							<div class="form-group row">
							  <label for="inputName" class="col-sm-2 col-form-label">Jenis Kelamin</label>
							  <div class="col-sm-2">
							    <!-- <input type="name" class="form-control" name="jk"> -->
							    <select class="form-control" name="jk">
							    	<option value="{{$santri->jk}}">{{$santri->jk}}</option>
							    	<option value="pria">PRIA</option>
							    	<option value="wanita">WANITA</option>
							    </select>
							  </div>
							</div>

							<div class="row">
		                      	<div class="form-group row">
								  <label for="inputName" class="col-sm-6 col-form-label">Tempat Lahir Santri</label>
								  <div class="col-sm-6">
								    <input type="name" class="form-control" name="tpt_lhr_santri" value="{{$santri->tpt_lhr_santri}}">
								  </div>
								</div>
									
		                      	<div class="form-group row">
								  <label for="inputName" class="col-sm-6 col-form-label">Tanggal Lahir Santri</label>
								  <div class="col-sm-6">
								    <input type="date" class="form-control" name="tgl_lhr_santri" value="{{$santri->tgl_lhr_santri}}">
								  </div>
								</div>
							</div>


							<div class="form-group row">
							  <label for="inputName" class="col-sm-2 col-form-label">Alamat</label>
							  <div class="col-sm-10">
							    <input type="name" class="form-control" name="alamat" value="{{$santri->alamat}}">
							  </div>
							</div>

							<div class="form-group row">
							  	<label for="inputName" class="col-sm-1 col-form-label">Rt</label>
							  <div class="col-sm-1">
							    <input type="name" class="form-control" name="rt" value="{{$santri->rt}}">
							  </div>
							  /
							  	<label for="inputName" class="col-sm-1 col-form-label">Rw</label>
							  <div class="col-sm-1">
							    <input type="name" class="form-control" name="rw" value="{{$santri->rw}}">
							  </div>
							</div>

							<div class="form-group row">
							  <label for="inputName" class="col-sm-2 col-form-label">Desa/Kelurahan</label>
							  <div class="col-sm-4">
							    <input type="name" class="form-control" name="des_kel" value="{{$santri->des_kel}}">
							  </div>

							  <label for="inputName" class="col-sm-2 col-form-label">Kecamatan</label>
							  <div class="col-sm-4">
							    <input type="name" class="form-control" name="kec" value="{{$santri->kec}}">
							  </div>
							</div>

							<div class="form-group row">
							  <label for="inputName" class="col-sm-2 col-form-label">Kab/Kota</label>
							  <div class="col-sm-3">
							    <input type="name" class="form-control" name="kab_kota" value="{{$santri->kab_kota}}">
							  </div>

							  <label for="inputName" class="col-sm-2 col-form-label">Provinsi</label>
							  <div class="col-sm-5">
							    <input type="name" class="form-control" name="prov" value="{{$santri->prov}}">
							  </div>
							</div>
	                  </div>
	                  <!-- /.tab-pane -->

	                <!-- administrasi -->
	                  <div class="tab-pane" id="administrasi">
	                  	Tambah Status Administrasi
	                   	<div class="row">
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Status SPP</label>
	                        <div class="col-sm-10">
	                          <!-- <input type="name" class="form-control" name="sts_ads_spp" > -->
	                          <select class="form-control" name="sts_ads_spp">
	                          	<option value="{{$santri->sts_ads_spp}}">{{$santri->sts_ads_spp}}</option>
	                          	<option value="nospp">nospp</option>
	                          	<option value="spp50">spp50</option>
	                          	<option value="spp100">spp100</option>
	                          	<option value="spp150">spp150</option>
	                          	<option value="spp200">spp200</option>
	                          	<option value="spp250">spp250</option>
	                          	<option value="spp300">spp300</option>
	                          	<option value="spp350">spp350</option>
	                          	<option value="spp400">spp400</option>
	                          	<option value="spp450">spp450</option>
	                          	<option value="spp500">spp500</option>
	                          	<option value="spp550">spp550</option>
	                          	<option value="spp600">spp600</option>
	                          </select>
	                        </div>
	                      </div>
	                   		
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Status Infaq Pembangunan</label>
	                        <div class="col-sm-10">
	                          <!-- <input type="name" class="form-control" name="sts_ads_ip"> -->
	                           <select class="form-control" name="sts_ads_ip">
	                          	<option value="{{$santri->sts_ads_ip}}">{{$santri->sts_ads_ip}}</option>
	                          	<option value="ya">ya</option>
	                          	<option value="tidak">tidak</option>
	                           </select>
	                        </div>
	                      </div>
	                   	</div>

	                   	<div class="row">
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Status Lemari</label>
	                        <div class="col-sm-10">
	                          <!-- <input type="name" class="form-control" name="sts_ads_lmr"> -->
	                          <select class="form-control" name="sts_ads_lmr">
	                          	<option value="{{$santri->sts_ads_lmr}}">{{$santri->sts_ads_lmr}}</option>
	                          	<option value="ya">ya</option>
	                          	<option value="tidak">tidak</option>
	                           </select>
	                        </div>
	                      </div>

	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Status Qur'an</label>
	                        <div class="col-sm-10">
	                         <!-- <input type="name" class="form-control" name="sts_ads_qrn"> -->
	                         <select class="form-control" name="sts_ads_qrn">
	                          	<option value="{{$santri->sts_ads_qrn}}">{{$santri->sts_ads_qrn}}</option>
	                          	<option value="ya">ya</option>
	                          	<option value="tidak">tidak</option>
	                         </select>
	                        </div>
	                      </div>
	                   	</div>

	                   	<div class="row">
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Status Seragam SMP</label>
	                        <div class="col-sm-10">
	                          <!-- <input type="name" class="form-control" name="sts_ads_ssmp"> -->
	                          <select class="form-control" name="sts_ads_ssmp">
	                          	<option value="{{$santri->sts_ads_ssmp}}">{{$santri->sts_ads_ssmp}}</option>
	                          	<option value="ya">ya</option>
	                          	<option value="tidak">tidak</option>
	                         </select>
	                        </div>
	                      </div>

	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Status Raport SMP</label>
	                        <div class="col-sm-10">
	                          <!-- <input type="name" class="form-control" name="sts_ads_rsmp"> -->
	                          <select class="form-control" name="sts_ads_rsmp">
	                          	<option value="{{$santri->sts_ads_rsmp}}">{{$santri->sts_ads_rsmp}}</option>
	                          	<option value="ya">ya</option>
	                          	<option value="tidak">tidak</option>
	                         </select>
	                        </div>
	                      </div>
	                   	</div>

	                   	<div class="row">
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Status Seragam SMA</label>
	                        <div class="col-sm-10">
	                          <!-- <input type="name" class="form-control" name="sts_ads_ssma"> -->
	                          <select class="form-control" name="sts_ads_ssma">
	                          	<option value="{{$santri->sts_ads_ssma}}">{{$santri->sts_ads_ssma}}</option>
	                          	<option value="ya">ya</option>
	                          	<option value="tidak">tidak</option>
	                         </select>
	                        </div>
	                      </div>

	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Status Raport SMA</label>
	                        <div class="col-sm-10">
	                          <!-- <input type="name" class="form-control" name="sts_ads_rsma"> -->
	                          <select class="form-control" name="sts_ads_rsma">
	                          	<option value="{{$santri->sts_ads_rsma}}">{{$santri->sts_ads_rsma}}</option>
	                          	<option value="ya">ya</option>
	                          	<option value="tidak">tidak</option>
	                         </select>
	                        </div>
	                      </div>
	                   	</div>

	                   	<div class="row">
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Status Seragam SMK</label>
	                        <div class="col-sm-10">
	                          <!-- <input type="name" class="form-control" name="sts_ads_ssmk"> -->
	                          <select class="form-control" name="sts_ads_ssmk">
	                          	<option value="{{$santri->sts_ads_ssmk}}">{{$santri->sts_ads_ssmk}}</option>
	                          	<option value="ya">ya</option>
	                          	<option value="tidak">tidak</option>
	                         </select>
	                        </div>
	                      </div>

	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Status Raport SMK</label>
	                        <div class="col-sm-10">
	                          <!-- <input type="name" class="form-control" name="sts_ads_rsmk"> -->
	                          <select class="form-control" name="sts_ads_rsmk">
	                          	<option value="{{$santri->sts_ads_rsmk}}">{{$santri->sts_ads_rsmk}}</option>
	                          	<option value="ya">ya</option>
	                          	<option value="tidak">tidak</option>
	                         </select>
	                        </div>
	                      </div>
	                   	</div>
	                  </div>

	                  <!-- ayah -->
	                  <div class="tab-pane" id="ayah">
	                  	Tambah data ayah
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-2 col-form-label">Nama ayah</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="nm_ayah" placeholder="Name" value="{{$santri->nm_ayah}}">
	                        </div>
	                      </div>

	                  	<div class="row">
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Tanggal Lahir ayah</label>
	                        <div class="col-sm-10">
	                          <input type="date" class="form-control" name="tgl_lhr_ayah" value="{{$santri->tgl_lhr_ayah}}">
	                        </div>
	                      </div>
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Tempat Lahir ayah</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="tpt_lhr_ayah" value="{{$santri->tpt_lhr_ayah}}">
	                        </div>
	                      </div>
	                  	</div>

	                    <div class="row">
	                    	<div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Alamat ayah</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="alamat_ayah" value="{{$santri->alamat_ayah}}">
	                        </div>
	                      </div>

	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">No HP ayah</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="no_hp_ayah" value="{{$santri->no_hp_ayah}}">
	                        </div>
	                      </div>
	                    </div>

	                      <div class="row">
	                      	<div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Pekerjaan ayah</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="pkj_ayah" value="{{$santri->pkj_ayah}}">
	                        </div>
	                      </div>

	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Penghasilan ayah</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="penghasilan_ayah" value="{{$santri->penghasilan_ayah}}">
	                        </div>
	                      </div>
	                      </div>
	                  </div>

	                  <!-- ibu -->
	                  <div class="tab-pane" id="ibu">
	                  	Tambah data ibu
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-2 col-form-label">Nama ibu</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="nm_ibu" placeholder="Name" value="{{$santri->nm_ibu}}">
	                        </div>
	                      </div>

	                  	<div class="row">
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Tanggal Lahir ibu</label>
	                        <div class="col-sm-10">
	                          <input type="date" class="form-control" name="tgl_lhr_ibu" value="{{$santri->tgl_lhr_ibu}}">
	                        </div>
	                      </div>
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Tempat Lahir ibu</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="tpt_lhr_ibu" value="{{$santri->tpt_lhr_ibu}}">
	                        </div>
	                      </div>
	                  	</div>

	                    <div class="row">
	                    	<div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Alamat ibu</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="alamat_ibu" value="{{$santri->alamat_ibu}}">
	                        </div>
	                      </div>

	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">No HP ibu</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="no_hp_ibu" value="{{$santri->no_hp_ibu}}">
	                        </div>
	                      </div>
	                    </div>

	                      <div class="row">
	                      	<div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Pekerjaan ibu</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="pkj_ibu" value="{{$santri->pkj_ibu}}">
	                        </div>
	                      </div>

	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Penghasilan ibu</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="penghasilan_ibu" value="{{$santri->penghasilan_ibu}}">
	                        </div>
	                      </div>
	                      </div>
	                  </div>

	                  <!-- wali -->
	                  <div class="tab-pane" id="wali">
	                  	Tambah data wali
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-2 col-form-label">Nama wali</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="nm_wali" placeholder="Name" value="{{$santri->nm_wali}}">
	                        </div>
	                      </div>

	                  	<div class="row">
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Tanggal Lahir wali</label>
	                        <div class="col-sm-10">
	                          <input type="date" class="form-control" name="tgl_lhr_wali" value="{{$santri->tgl_lhr_wali}}">
	                        </div>
	                      </div>
	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Tempat Lahir wali</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="tpt_lhr_wali" value="{{$santri->tpt_lhr_wali}}">
	                        </div>
	                      </div>
	                  	</div>

	                    <div class="row">
	                    	<div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Alamat wali</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="alamat_wali" value="{{$santri->alamat_wali}}">
	                        </div>
	                      </div>

	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">No HP wali</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="no_hp_wali" value="{{$santri->no_hp_wali}}">
	                        </div>
	                      </div>
	                    </div>

	                      <div class="row">
	                      	<div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Pekerjaan wali</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="pkj_wali" value="{{$santri->pkj_wali}}">
	                        </div>
	                      </div>

	                      <div class="form-group row">
	                        <label for="inputName" class="col-sm-10 col-form-label">Penghasilan wali</label>
	                        <div class="col-sm-10">
	                          <input type="name" class="form-control" name="penghasilan_wali" value="{{$santri->penghasilan_wali}}">
	                        </div>
	                      </div>
	                      </div>
	                  </div>

	                  <!-- <button type="submit" class="btn btn-dark float-right"><i class="fa fa-save"></i> Simpan</button> -->
	              	</form>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection