@extends('layouts.admin')
@section('title') Data Karyawan @endsection
@section('content')
<div class="card">
    <div class="card-header">
        @include('partials.flash-message')
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>#</th>
            <th>Nama Karyawan</th>
            <th>Tempat, Tanggal Lahir</th>
            <th>Jenis Kelamin</th>
            <th>Nomor Whatsapp Aktif</th>
            <th>Pendidikan Terakhir</th>
            <th>Posisi</th>
            <th>Alamat</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @forelse($karyawans as $karyawan)
          <tr>
              <td>{{ $karyawan->id }}</td>
              <td>{{ $karyawan->name }}</td>
              <td>{{ $karyawan->ttl }}</td>
              <td>{{ $karyawan->gender }}</td>
              <td>{{ $karyawan->notelp}}</td>
              <td>{{ $karyawan->pend_terakhir}}</td>
              <td>{{ $karyawan->posisi }}</td>
              <td>{{ $karyawan->alamat }}</td>
              <form action="{{route('karyawans.destroy', $karyawan->id )}}" method="POST" id="form">
                @csrf
                @method('DELETE')
              <td>
                  <div class="btn-group-vertical">
                      <a href="{{route('karyawans.show', $karyawan->id )}}" type="button" class="btn btn-primary">
                        <i class="fas fa-search"></i>
                        <a href="{{route('karyawans.edit', $karyawan->id )}}" type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger delete-button">
                            <i class="fas fa-trash"></i>
                        </button>
                  </div>
                </td>
              </form>
          </tr>
          @empty
          <tr class="expandable-body">
            <td colspan="11">
              <p align="center">
                Data Karyawan belum ada, mungkin belum dibuat hehe.
            </p>
            </td>
          </tr>
        @endforelse
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
