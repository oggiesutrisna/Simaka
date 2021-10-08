@extends('layouts.admin')
@section('title') Edit Calon Karyawan @endsection
@section('content')
<div class="card card-primary">
    <div class="card-header">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>
    <form action="{{ route('registerkaryawans.update', $registerkaryawan->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" value="{{ $registerkaryawan->email }}" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Nama Karyawan</label>
                        <input type="text" name="nama" value="{{ $registerkaryawan->nama }}" class="form-control" disabled>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Tempat, Tanggal Lahir</label>
                        <input type="text" name="ttl" class="form-control" placeholder="Tempat, DD/MM/YYYY" value="{{$registerkaryawan->ttl}}" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
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
                        <input type="text" value="{{ $registerkaryawan->notelp }}" name="notelp" class="form-control" placeholder="Nomor Whatsapp Aktif" disabled>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-whatsapp">
                            Whatsapp
                          </button>
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
                    <div class="form-group">
                        <label>Rencana Penempatan</label>
                        <select class="form-control" name="tempat">
                            <option value="Head Office">Head Office Hydro & Unicare </option>
                            <option value="Hydro Canggu">Klinik Hydromedical Canggu</option>
                            <option value="Hydro Batubelig Baru">Klinik Hydromedical Batubelig Baru</option>
                            <option value="Hydro Batubelig Lama">Klinik Unicare Tambolaka</option>
                            <option value="Unicare Uluwatu">Klinik Unicare Uluwatu</option>
                            <option value="Unicare Ubud">Klinik Unicare Ubud</option>
                            <option value="Unicare Tambolaka">Klinik Unicare Tambolaka</option>
                            <option value="Unicare Kupang">Klinik Unicare Kupang</option>
                            <option value="Drive-Thru Central Parkir Kuta">[Drive Thru] Central Parkir Kuta </option>
                            <option value="Unicare Ibis Petitenget">[Drive Thru] Unicare Drive Thru Ibis Petitenget</option>
                            <option value="Unicare New Kuta Golf">[Drive Thru] Unicare Drive Thru New Kuta Golf</option>
                            <option value="Unicare Villa Jerami">[Drive Thru] Unicare Drive Thru Villa Jerami</option>
                            <option value="Unicare Central Parkir">[Drive Thru] Unicare Drive Thru Central Parkir</option>
                            <option value="Unicare Drive Thru BSMC">[Drive Thru] Drive Thru BSMC </option>
                            <option value="Unicare Drive Thru CHIS">[Drive Thru] Drive Thru CHIS </option>
                            <option value="Unicare Drive Thru Padang Sambian">[Drive Thru] Drive Thru Padang Sambian </option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Dapat Informasi</label>
                        <input type="text" name="dapatinformasi" value="{{ $registerkaryawan->dapatinformasi}}" class="form-control" disabled>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Diterima ?</label>
                        <select name="diterima" value="diterima" class="form-control @if($errors->has('diterima')) is-invalid @endif">
                            <option value="Belum Diterima" selected>Belum Diterima</option>
                            <option value="Diterima">Diterima</option>
                            <option value="Tidak Diterima">Tidak Diterima</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label>Jadwal Interview</label>
                        <input type="date" value="{{ $registerkaryawan->jadwal }}" name="jadwal" class="form-control @if($errors->has('date')) is-invalid @endif">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Alamat Lengkap</label>
                            <input type="text" name="alamat" value="{{ $registerkaryawan->alamat }}" class="form-control" placeholder="ex: Hehe" disabled>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label>Alasan diterima/tidak diterima</label>
                <textarea type="text" value="{{ $registerkaryawan->alasan }}" name="alasan" class="form-control @if($errors->has('alasan')) is-invalid @endif" rows="4" cols="50"></textarea>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('registerkaryawans.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn bg-gradient-primary">Update Data Calon Karyawan</button>
        </div>
</div>

<div class="modal fade" id="modal-whatsapp" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Chat Generator</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
            <label>
                Salin quote dibawah ini
            </label>
          <textarea cols="54" rows="10">Selamat pagi, apakah benar dengan nama, {{$registerkaryawan->nama}}? Perkenalkan, saya Ari dari HRD di Unicare Clinic menginformasikan bahwa anda akan diinterview pada tanggal {{$registerkaryawan->jadwal}}, untuk mengkonfirmasi bisa bilang HADIR. Terimakasih.
          Regards
          -Ari Darma,
          Lead Human Resource Department @ Unicare Clinic-
          </textarea>
          <div class="form-group">
              <label>
                  Nomor Whatsapp Calon Kandidat
              </label>
              <input type="text" class="form-control form-control-border" id="exampleInputBorder" value="{{$registerkaryawan->notelp}}" placeholder="../../../" disabled>
          </div>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          <a href="https://api.whatsapp.com/send?phone={{$registerkaryawan->notelp}}" class="btn btn-success">Kirim Pesan</a>
        </div>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

@endsection
