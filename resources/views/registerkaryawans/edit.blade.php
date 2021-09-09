@extends('layouts.admin')
@section('title') Edit Calon Karyawan @endsection
@section('content')
<div class="card card-primary">
    <!-- /.card-header -->
    <form action="{{ route('registerkaryawans.update', $registerkaryawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label>Nama Karyawan</label>
                <input type="text" name="nama" value="{{$registerkaryawan->nama}}" class="form-control" disabled>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Tempat, Tanggal Lahir</label>
                        <input type="text" name="ttl" class="form-control" placeholder="Tempat, DD/MM/YYYY" value="{{$registerkaryawan->ttl}}" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                        <label>Posisi Melamar</label>
                        <select class="form-control" name="posisi" disabled>
                            <option value="Dokter {{ $registerkaryawan->posisi === 'Dokter' ? 'selected' : ''}}">Dokter</option>
                            <option value="Perawat" {{ $registerkaryawan->posisi === 'Perawat' ? 'selected' : ''}}>Perawat</option>
                            <option value="Finance" {{ $registerkaryawan->posisi === 'Finance' ? 'selected' : ''}}>Finance</option>
                            <option value="Cleaning Service" {{ $registerkaryawan->posisi === 'Cleaning Service' ? 'selected' : ''}}>Cleaning Service</option>
                            <option value="Call Center" {{ $registerkaryawan->posisi === 'Call Center' ? 'selected' : ''}}>Call Center</option>
                            <option value="Marketing" {{ $registerkaryawan->posisi === 'Marketing' ? 'selected' : ''}}>Marketing</option>
                            <option value="Technician" {{ $registerkaryawan->posisi === 'Technician' ? 'selected' : ''}}>Teknisi</option>
                            <option value="Designer Grafis" {{ $registerkaryawan->posisi === 'Designer Grafis' ? 'selected' : ''}}>Designer Grafis</option>
                            <option value="Programmer" {{ $registerkaryawan->posisi === 'Programmer' ? 'selected' : ''}}>Programmer</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <select class="form-control" name="gender" disabled>
                            <option value="Laki-Laki" {{ $registerkaryawan->gender === 'Laki-Laki' ? 'selected' : ''}}>Laki-Laki</option>
                            <option value="Perempuan" {{ $registerkaryawan->posisi === 'Dokter' ? 'selected' : ''}} >Perempuan</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>No Telepon / No Whatsapp Aktif</label>
                        <input type="text" name="notelp" class="form-control" placeholder="Nomor Whatsapp Aktif" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Pendidikan Terakhir</label>
                        <select class="form-control" name="pend_terakhir" id="pend_terakhir" disabled>
                            <option value="SMP" {{ $registerkaryawan->pend_terakhir === 'SMP' ? 'selected' : ''}}> SMP </option>
                            <option value="SMA" {{ $registerkaryawan->pend_terakhir === 'SMA' ? 'selected' : ''}}> SMA </option>
                            <option value="SMK"{{ $registerkaryawan->pend_terakhir === 'SMK' ? 'selected' : ''}}> SMK </option>
                            <option value="Diploma 1" {{ $registerkaryawan->pend_terakhir === 'Diploma 1' ? 'selected' : ''}}> Diploma 1 </option>
                            <option value="Diploma 2" {{ $registerkaryawan->pend_terakhir === 'Diploma 2' ? 'selected' : ''}}> Diploma 2 </option>
                            <option value="Diploma 3" {{ $registerkaryawan->pend_terakhir === 'Diploma 3' ? 'selected' : ''}}> Diploma 3 </option>
                            <option value="Sarjana 1" {{ $registerkaryawan->pend_terakhir === 'Sarjana 1' ? 'selected' : ''}}> Sarjana 1 </option>
                            <option value="Sarjana 2" {{ $registerkaryawan->pend_terakhir === 'Sarjana 2' ? 'selected' : ''}}> Sarjana 2 </option>
                            <option value="Sarjana 3" {{ $registerkaryawan->pend_terakhir === 'Sarjana 3' ? 'selected' : ''}}> Sarjana 3 </option>
                            <option value="Dokter" {{ $registerkaryawan->pend_terakhir === 'Dokter' ? 'selected' : ''}}> Dokter </option>
                            <option value="Professor" {{ $registerkaryawan->pend_terakhir === 'Professor' ? 'selected' : ''}}> Professor </option>
                            <option value="Doktor" {{ $registerkaryawan->pend_terakhir === 'Doktor' ? 'selected' : ''}}> Doktor </option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Penempatan</label>
                        <select class="form-control" name="tempat">
                            <option value="Hydro Canggu">Hydromedical Canggu</option>
                            <option value="Hydro Batubelig Baru">Hydromedical Batubelig Baru</option>
                            <option value="Hydro Batubelig Lama">Unicare Tambolaka</option>
                            <option value="Unicare Uluwatu">Unicare Uluwatu</option>
                            <option value="Unicare Ubud">Unicare Ubud</option>
                            <option value="Unicare Tambolaka">Unicare Tambolaka</option>
                            <option value="Unicare Kupang">Unicare Kupang</option>
                            <option value="Head Office">Head Office Hydro & Unicare </option>
                            <option value="Drive-Thru Kuta">Drive Thru Kuta </option>
                            <option value="Drive-Thru Ramada">Drive Thru Ramada</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Dapat Informasi</label>
                        <input type="text" name="dapatinformasi" value="{{$registerkaryawan->dapatinformasi}}" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                        <label>Diterima ?</label>
                        <select name="diterima" value="diterima" class="form-control">
                            <option value="1">Diterima</option>
                            <option value="0">Tidak Diterima</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Alamat Lengkap</label>
                <input type="text" name="alamat" value="{{$registerkaryawan->alamat}}" class="form-control" placeholder="ex: Hehe" disabled>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('registerkaryawans.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn bg-gradient-primary">Update Data Calon Karyawan</button>
        </div>
        <!-- input states -->
</div>

@endsection
