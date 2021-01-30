@php

function checkrouteactive($route){
  if(Route::current()->uri == $route) return 'active';
}
@endphp
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ url('dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SIDAFA</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('dist/img/avatar5.png')}}"class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{url('admin/beranda')}}" class="d-block">
            @if(Auth::check())
              {{request()->user()->username}}
            @else
              Silahkan Login
            @endif
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->

          <li class="nav-item">
            <a href="{{url('admin/dashboard')}}" class="nav-link {{checkrouteactive('admin/dashboard')}}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview ">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Santri
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('admin/santri')}}" class="nav-link {{checkrouteactive('admin/putra')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Putra</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('admin/santri')}}" class="nav-link {{checkrouteactive('admin/putri')}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Putri</p>
                </a>
              </li>
            </ul>
          </li>

<!-- pembayaran bendahara-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Pembayaran
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
  <!-- spp -->
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    SPP
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{url('admin')}}/<?php setlocale (LC_TIME, 'IND');$date = strftime ('%B',time());$lower = strtolower($date);echo $lower;?>" 
                      class="nav-link {{checkrouteactive('admin')}}/<?php setlocale (LC_TIME, 'IND');$date = strftime ('%B',time());$lower = strtolower($date);echo $lower;?>">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>QUICK ACCESS-
                        <?php setlocale (LC_TIME, 'IND');$date = strftime ('%B',time());$lower = strtolower($date);echo $lower;?>
                      </p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/januari')}}" class="nav-link {{checkrouteactive('admin/januari')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Januari</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/februari')}}" class="nav-link {{checkrouteactive('admin/februari')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Februari</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/maret')}}" class="nav-link {{checkrouteactive('admin/maret')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Maret</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/april')}}" class="nav-link {{checkrouteactive('admin/april')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>April</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/mei')}}" class="nav-link {{checkrouteactive('admin/mei')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Mei</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/juni')}}" class="nav-link {{checkrouteactive('admin/juni')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Juni</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/juli')}}" class="nav-link {{checkrouteactive('admin/juli')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Juli</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/agustus')}}" class="nav-link {{checkrouteactive('admin/agustus')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Agustus</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/september')}}" class="nav-link {{checkrouteactive('admin/september')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>September</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/oktober')}}" class="nav-link {{checkrouteactive('admin/oktober')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Oktober</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/november')}}" class="nav-link {{checkrouteactive('admin/november')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>November</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('admin/desember')}}" class="nav-link {{checkrouteactive('admin/desember')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Desember</p>
                    </a>
                  </li>

                </ul>
              </li>
            </ul>
  <!-- /spp -->

  <!-- asb -->
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Administrasi Santri Baru
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">

                  <li class="nav-item">
                    <a href="{{url('admin/administrasisantribaru')}}" class="nav-link {{checkrouteactive('admin/administrasisantribaru')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Pondok</p>
                    </a>
                  </li>

                  <li class="nav-item">
                    <a href="{{url('admin/administrasiformal')}}" class="nav-link {{checkrouteactive('admin/administrasiformal')}}">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Formal</p>
                    </a>
                  </li>

                </ul>
              </li>
            </ul>
  <!-- /asb -->
          </li>
<!-- /pembayaran bendahara-->

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>