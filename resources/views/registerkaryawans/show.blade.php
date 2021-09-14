@extends('layouts.admin')
@section('title') Profile Pelamar @endsection
@section('content')

<div class="row">
    <div class="col-md-3">
        <div class="card-header">
            @include('partials.flash-message')
        </div>

      <!-- Profile Image -->
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <h3 class="profile-username text-center">{{$registerkaryawan->nama}}</h3>
          <p class="text-muted text-center">
              {{$registerkaryawan->posisi}}
          </p>
          <p class="text-muted text-center">
              {{$registerkaryawan->tempat}}
          </p>
          <a href="{{route('registerkaryawans.edit', $registerkaryawan->id)}}" class="btn btn-primary btn-block"><b>Edit</b></a>
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
            <li class="nav-item"><a class="nav-link active" href="#biodata" data-toggle="tab">Biodata</a></li>
            <li class="nav-item"><a class="nav-link" href="#uploads" data-toggle="tab">Attachments</a></li>
            <li class="nav-item"><a class="nav-link" href="#status" data-toggle="tab">Status</a></li>
          </ul>
        </div><!-- /.card-header -->
        <div class="card-body">
          <div class="tab-content">
            <div class="tab-pane active" id="biodata">
              <!-- Post -->
              <form class="form-horizontal">
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama Lengkap</label>
                  <div class="col-sm-10">
                    <input type="email" value="{{ $registerkaryawan->nama }}" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="Email" class="col-sm-2 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" value="{{ $registerkaryawan->email }}" class="form-control" id="inputEmail" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputName2" class="col-sm-2 col-form-label">Alamat</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{ $registerkaryawan->alamat }}" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputExperience" class="col-sm-2 col-form-label">Nomor Telepon Aktif</label>
                  <div class="col-sm-10">
                      <input type="text" value="{{ $registerkaryawan->notelp }}" class="form-control" disabled>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="pend_terakhir" class="col-sm-2 col-form-label">Pendidikan Terakhir</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{ $registerkaryawan->pend_terakhir }}"  disabled>
                  </div>
                </div>
            </form>
            </div>
            <!-- /.tab-pane -->
            <div class="tab-pane" id="uploads">
              <!-- The timeline -->
              <div class="row mb-3">
                <div class="col-sm-6">
                  <img class="img-fluid" src="{{asset('storage/' . $registerkaryawan->filepdf)}}" alt="Photo" width="500px" height="500px">
                </div>
                <!-- /.col -->
                <div class="col-sm-6">
                    <img class="img-fluid" src="{{asset('storage/' . $registerkaryawan->screenshot)}}" alt="Photo" width="500px" height="500px">
                  <!-- /.row -->
                </div>
                <!-- /.col -->
              </div>
              <p>Klik kanan gambar untuk fullscreen.</p>
            </div>
            <!-- /.tab-pane -->

            <div class="tab-pane" id="status">
              <form class="form-horizontal">
                <div class="form-group row">
                  <label for="bio" class="col-sm-2 col-form-label">Biografi Singkat</label>
                  <div class="col-sm-10">
                    <input type="email" value="{{$registerkaryawan->bio}}" class="form-control" id="inputName" placeholder="Name" disabled>
                  </div>
                </div>
                <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Dapat Informasi</label>
                    <div class="col-sm-10">
                      <input type="email" value="{{$registerkaryawan->dapatinformasi}}" class="form-control" id="inputName" placeholder="Name" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label">Penempatan</label>
                    <div class="col-sm-10">
                      <input type="email" class="form-control" value="{{$registerkaryawan->tempat}}" id="inputName" placeholder="Name" disabled>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="diterima" class="col-sm-2 col-form-label">Diterima(?)</label>
                    <div class="col-sm-10">
                        <input value="{{$registerkaryawan->diterima}}" type="text" name="diterima" id="diterima" class="form-control" disabled>
                    </div>
                  </div>
              </form>
            </div>
            <!-- /.tab-pane -->
          </div>
          <!-- /.tab-content -->
        </div><!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>

@endsection
