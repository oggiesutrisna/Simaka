@extends('layouts.admin')
@section('title') Data Calon Karyawan @endsection
@section('content')
<div class="card">
  <div class="card-header">
      {{-- fungsi untuk menampilkan flash message jika terjadi error pada input --}}
    @include('partials.flash-message')
    {{-- end fungsi untuk menampilkan flash message jika terjadi error pada input --}}
    <a href="{{route('registerkaryawans.create')}}" class="btn btn-block btn-primary">Tambah Data Pelamar</a>
    <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
        </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-stripped text-nowrap">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Karyawan</th>
          <th>Date Of Birth</th>
          <th>Email</th>
          <th>Penempatan</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
          {{-- isi dari tabel --}}
        @forelse($registerkaryawans as $rk)
        <tr>
          <td>{{ $rk->id }}</td>
          <td>{{ $rk->nama }}</td>
          <td>{{ $rk->ttl }}</td>
          <td>{{ $rk->email}} </td>
          <td>{{ $rk->tempat }}</td>
          {{-- end isi dari tabel  --}}
          {{-- fungsi actions --}}
          <td>
              <span class="badge badge-{{ $rk->diterima === 'belum diterima' ? 'danger' : 'success'}} px-3 py-3" data-toggle="tooltip" data-placement="top" title="{{ $rk->diterima }}">
                <i class="fas {{ $rk->diterima === 'belum diterima' ? 'fa-minus-circle' : 'fa-minus-circle'}}">
                </i>
            </span>
          </td>
          {{-- fungsi delete tabel --}}
          <form action="{{route('registerkaryawans.destroy', $rk->id )}}" method="POST" id="form">
            @csrf
            @method('DELETE')
            <td>
              <div class="btn-group">
                <a href="{{ route('registerkaryawans.show', $rk->id) }}" type="button" class="btn btn-primary">
                  <i class="fas fa-search"></i></a>
                  <button type="submit" class="btn btn-danger delete-button">
                    <i class="fas fa-trash"></i>
                  </button>
                </div>
              </td>
            </form>
          </tr>
          @empty
          <tr class="expandable-body">
            <td colspan="8">
              <p align="center">
                Data pelamar belum ada, mungkin belum dibuat atau calon karyawan belum ada yang tertarik
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
