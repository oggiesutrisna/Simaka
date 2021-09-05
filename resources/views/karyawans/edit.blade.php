@extends('layouts.admin')
@section('title') Tambah Data Karyawan @endsection

@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <form action="{{ route('karyawans.store') }}" method="POST">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" value="{{ $karyawan->name }}" name="name" class="form-control" placeholder="ex : Rahmat Letsgo">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tempat, Tanggal Lahir</label>
                        <input type="text" name="ttl" value="{{$karyawan->ttl}}" class="form-control" placeholder="Tempat, DD/MM/YYYY">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Jabatan</label>
                        <select class="form-control" name="posisi">
                            <option value="Dokter" {{$karyawan->posisi === 'Dokter' ? 'selected' : ''}}>Dokter</option>
                            <option value="Perawat" {{$karyawan->posisi === 'Perawat' ? 'selected' : ''}}>Perawat</option>
                            <option value="Finance" {{$karyawan->posisi === 'Finance' ? 'selected' : ''}}>Finance</option>
                            <option value="Cleaning Service" {{$karyawan->posisi === 'Cleaning Service' ? 'selected' : ''}}>Cleaning Service</option>
                            <option value="Call Center" {{$karyawan->posisi === 'Call Center' ? 'selected' : ''}}>Call Center</option>
                            <option value="Marketing" {{$karyawan->posisi === 'Marketing' ? 'selected' : ''}}>Marketing</option>
                            <option value="Technician" {{$karyawan->posisi === 'Technician' ? 'selected' : ''}}>Teknisi</option>
                            <option value="Designer Grafis" {{$karyawan->posisi === 'Designer Grafis' ? 'selected' : ''}}>Designer Grafis</option>
                            <option value="Programmer" {{$karyawan->posisi === 'Programmer' ? 'selected' : ''}}>Programmer</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="gender">
                            <option value="Laki-Laki" {{$karyawan->gender === 'Laki-Laki' ? 'selected' : ''}}>Laki-Laki</option>
                            <option value="Perempuan" {{$karyawan->gender === 'Perempuan' ? 'selected' : ''}}>Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Posisi</label>
                        <select class="form-control" name="tempat">
                            <option value="Hydro Canggu {{$karyawan->tempat === 'Hydro Canggu' ? 'selected' : ''}}">Hydromedical Canggu</option>
                            <option value="Hydro Batubelig Baru {{$karyawan->tempat === 'Hydro Batubelig Baru' ? 'selected' : ''}}">Hydromedical Batubelig Baru</option>
                            <option value="Unicare Uluwatu {{$karyawan->tempat === 'Unicare Uluwatu' ? 'selected' : ''}}">Unicare Uluwatu</option>
                            <option value="Unicare Ubud {{$karyawan->tempat === 'Unicare Ubud' ? 'selected' : ''}}">Unicare Ubud</option>
                            <option value="Head Office {{$karyawan->tempat === 'Head Office' ? 'selected' : ''}}">Head Office Hydro & Unicare </option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <input type="text" name="alamat" class="form-control" placeholder="ex: Los Angeles, CA">
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('karyawans.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn bg-gradient-primary">Buat Data Pasien</button>
        </div>
        <!-- input states -->
</div>
@endsection
