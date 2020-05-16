@extends('layouts.app')
@section('content')
<div class="container-scroller" id="app">
  <!-- partial:partials/_navbar.html -->
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="navbar-brand-wrapper d-flex justify-content-center">
      <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">


        <router-link to="/" class="navbar-brand brand-logo">
          <img src="{{ asset('majestic/images/logo.svg') }}" alt="logo" />
        </router-link>

        <!-- <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('majestic/images/logo-mini.svg') }}" alt="logo" /></a> -->

        <router-link to="/" class="navbar-brand brand-logo-mini">
          <img src="{{ asset('majestic/images/logo-mini.svg') }}" alt="logo" />
        </router-link>
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-sort-variant"></span>
        </button>
      </div>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <ul class="navbar-nav mr-lg-4 w-100">
        <li class="nav-item nav-search d-none d-lg-block w-100">
          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text" id="search">
                <i class="mdi mdi-magnify"></i>
              </span>
            </div>
            <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
          </div>
        </li>
      </ul>
      <ul class="navbar-nav navbar-nav-right">

        <li class="nav-item dropdown mr-4">
          <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
            <i class="mdi mdi-bell mx-0"></i>
            <span class="count"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
            <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <div class="item-icon bg-success">
                  <i class="mdi mdi-information mx-0"></i>
                </div>
              </div>
              <div class="item-content">
                <h6 class="font-weight-normal">Application Error</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Just now
                </p>
              </div>
            </a>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <div class="item-icon bg-warning">
                  <i class="mdi mdi-settings mx-0"></i>
                </div>
              </div>
              <div class="item-content">
                <h6 class="font-weight-normal">Settings</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  Private message
                </p>
              </div>
            </a>
            <a class="dropdown-item">
              <div class="item-thumbnail">
                <div class="item-icon bg-info">
                  <i class="mdi mdi-account-box mx-0"></i>
                </div>
              </div>
              <div class="item-content">
                <h6 class="font-weight-normal">New user registration</h6>
                <p class="font-weight-light small-text mb-0 text-muted">
                  2 days ago
                </p>
              </div>
            </a>
          </div>
        </li>
        <li class="nav-item nav-profile dropdown ">
          <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
            <img src="{{ asset('majestic/images/faces/face5.jpg') }}" alt="profile" />
            <span class="nav-profile-name">Isnaeni</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
            <!-- <a class="dropdown-item"> -->
              <router-link to="/profile" class="dropdown-item">
              <i class="mdi mdi-settings text-primary"></i>
              Profile
            </router-link>
            <!-- </a> -->
            <a class="dropdown-item">
              <i class="mdi mdi-logout text-primary"></i>
              Logout
            </a>
          </div>



        </li>
      </ul>
      <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
        <span class="mdi mdi-menu"></span>
      </button>
    </div>
  </nav>
  <!-- partial -->
  <div class="container-fluid page-body-wrapper">
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item">
          <!-- <a class="nav-link" href="index.html">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Home</span>
          </a> -->
          <router-link to='/' class="nav-link">
            <i class="mdi mdi-home menu-icon"></i>
            <span class="menu-title">Home</span>
          </router-link>
        </li>



        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic" data-target="#ui-basic">
            <i class="mdi mdi-open-in-app menu-icon"></i>
            <span class="menu-title">Pendaftaran</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                <router-link to="/register" class="nav-link">
                  Daftar Baru
                </router-link>

              </li>
              <li class="nav-item">
                <router-link to="/heregister" class="nav-link">
                  Daftar Ulang
                </router-link>
              </li>
              <!-- <hr class="divider text-primary"> -->
              <div class="dropdown-divider"></div>
              <li class="nav-item">
                <router-link to="/students" class="nav-link">
                  Calon Siswa
                </router-link>
              </li>

            </ul>
          </div>
        </li>
        <li class="nav-item">
          <router-link to="/graduated" class="nav-link">

            <i class="mdi mdi-voice menu-icon"></i>
            <span class="menu-title">Pengumuman</span>
          </router-link>
        </li>

        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth" data-target="#auth">
            <i class="mdi mdi-checkbox-multiple-marked-outline menu-icon"></i>
            <span class="menu-title">Kelengkapan</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <!-- <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Jurusan </a></li> -->
              <!-- <router-link to='/department'> Jurusan</router-link> -->
              <li class="nav-item">
                <router-link to='/department' class="nav-link"> Jurusan </router-link>
              </li>
              <li class="nav-item">
                <router-link class="nav-link" to="/cash">
                  Uang Pendaftaran
                </router-link>
              </li>
              <li class="nav-item">
                <router-link to="/file" class="nav-link">
                  Berkas Pendaftaran
                </router-link>
              </li>

              <li class="nav-item">
                <router-link to="/period" class="nav-link">
                  Tahun Pelajaran
                </router-link>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="admin" data-target="#admin">
            <i class="mdi mdi-account-key menu-icon"></i>
            <span class="menu-title">Admin</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="admin">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item">
                
            <router-link to="/users" class="nav-link">
              Edit User
            </router-link>
            </li>
              <li class="nav-item"> 
                
              <router-link to="/school" class="nav-link">
                Profil Sekolah
              </router-link>
              </li>

            </ul>
          </div>
        </li>
      </ul>
    </nav>
    <!-- partial -->
    <!-- tempat komponen utama -->
    <div class="main-panel">
      <div class="content-wrapper" id="index">
        <router-view></router-view>

      </div>
    </div>
  </div>
  <!-- partial:partials/_footer.html -->
  <footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
      <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">
        Copyright © 2020
        <a href="https://www.urbanui.com/" target="_blank">freestudy.net</a>. All rights reserved.
      </span>
      <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">
        Hearing Tatu & Didi Kempot
        <i class="mdi mdi-heart text-danger"></i>
      </span>

    </div>
  </footer>
  <!-- page-body-wrapper ends -->
</div>
@endsection