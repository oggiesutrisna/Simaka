@extends('layouts.admin')
@section('title') Dashboard @endsection
@section('content')
<div class="row">
  <div class="col-lg-3 col-6">
    <div class="small-box bg-info">
      <div class="inner">
        <h3>{{$count = DB::table('karyawans')->count()}}</h3>
        <p>Total Karyawan</p>
      </div>
      <div class="icon">
        <i class="fas fa-users"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-success">
      <div class="inner">
        <h3>{{$count = DB::table('register_karyawans')->count()}}</h3>
        <p>Pelamar Baru</p>
      </div>
      <div class="icon">
        <i class="fas fa-user-tie"></i>
      </div>
    </div>
  </div>
  <!-- ./col -->
  <div class="col-lg-3 col-6">
    <!-- small box -->
    <div class="small-box bg-warning">
      <div class="inner">
        <h3>{{$count = DB::table('register_karyawans')->where('diterima', 'belum diterima')->count()}}</h3>
        <p>Karyawan belum diterima</p>
      </div>
      <div class="icon">
        <i class="fas fa-chart-line"></i>
      </div>
    </div>
  </div>
  <div class="col-lg-3 col-6">
    <div class="small-box bg-danger">
      <div class="inner">
        <h3>{{ $count = DB::table('register_karyawans')->where('diterima', 'diterima')->count()}}</h3>
        <p>Total Karyawan telah diterima</p>
      </div>
      <div class="icon">
        <i class="ion ion-pie-graph"></i>
      </div>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-header">
    <h3> Selamat Datang </h3>
  </div>
  <div class="card-body">
      Message from developers to Everyone <b> Experience is the name everyone gives to their mistakes.</b>
  </div>
</div>

@endsection
