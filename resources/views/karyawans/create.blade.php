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
                <input type="text" name="name" class="form-control" placeholder="ex : Rahmat Letsgo">
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tempat, Tanggal Lahir</label>
                        <input type="text" name="ttl" class="form-control" placeholder="Tempat, DD/MM/YYYY">
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Posisi Melamar</label>
                        <select class="form-control" name="posisi">
                            <option value="Dokter">Dokter</option>
                            <option value="Perawat">Perawat</option>
                            <option value="Finance">Finance</option>
                            <option value="Cleaning Service">Cleaning Service</option>
                            <option value="Call Center">Call Center</option>
                            <option value="Marketing">Marketing</option>
                            <option value="Technician">Teknisi</option>
                            <option value="Designer Grafis">Designer Grafis</option>
                            <option value="Programmer">Programmer</option>
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
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No Telepon / No Whatsapp Aktif</label>
                        <input type="text" name="notelp" class="form-control" placeholder="Nomor Whatsapp Aktif">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <select class="form-control" name="pend_terakhir" id="pend_terakhir">
                            <option value="SMP"> SMP </option>
                            <option value="SMA"> SMA </option>
                            <option value="SMK"> SMK </option>
                            <option value="Diploma 1"> Diploma 1 </option>
                            <option value="Diploma 2"> Diploma 2 </option>
                            <option value="Diploma 3"> Diploma 3 </option>
                            <option value="Sarjana 1"> Sarjana 1 </option>
                            <option value="Sarjana 2"> Sarjana 2 </option>
                            <option value="Sarjana 3"> Sarjana 3 </option>
                            <option value="Dokter"> Dokter </option>
                            <option value="Professor"> Professor </option>
                            <option value="Doktor"> Doktor </option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Posisi</label>
                        <select class="form-control" name="tempat">
                            <option value="Hydro Canggu">Hydromedical Canggu</option>
                            <option value="Hydro Batubelig Baru">Hydromedical Batubelig Baru</option>
                            <option value="Unicare Uluwatu">Unicare Uluwatu</option>
                            <option value="Unicare Ubud">Unicare Ubud</option>
                            <option value="Head Office">Head Office Hydro & Unicare </option>
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
