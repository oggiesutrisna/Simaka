@extends('layouts.admin')
@section('title') Data Calon Karyawan @endsection
@section('content')
<div class="card">
  <div class="card-header">
    @include('partials.flash-message')
    <div class="card-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
            <form action="{{route('registerkaryawans.index')}}" method="GET" role="search">
            <input type="text" name="search" class="form-control float-right" placeholder="Cari">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
        </form>
          </div>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body table-responsive p-0">
    <table class="table table-bordered table-hover text-nowrap">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Karyawan</th>
          <th>Date Of Birth</th>
          <th>Biografi Singkat</th>
          <th>Penempatan</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        @forelse($registerkaryawans as $rk)
        <tr>
          <td>{{ $rk->id }}</td>
          <td>{{ $rk->nama }}</td>
          <td>{{ $rk->ttl }}</td>
          <td>{{ $rk->bio }}</td>
          <td>{{ $rk->tempat }}</td>
          <td>
              <span class="badge badge-{{ $rk->diterima === 'belum diterima' ? 'danger' : 'success'}} px-3 py-3" data-toggle="tooltip" data-placement="top" title="{{ $rk->diterima }}">
                <i class="fas {{ $rk->diterima === 'belum diterima' ? 'fa-minus-circle' : 'fa-minus-circle'}}">
                </i>
            </span>
          </td>
          <form action="{{route('registerkaryawans.destroy', $rk->id )}}" method="POST" id="form">
            @csrf
            @method('DELETE')
            <td>
              <div class="btn-group">
                <a href="{{ route('registerkaryawans.show', $rk->id) }}" type="button" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                  <a href="{{ route('registerkaryawans.edit', $rk->id ) }}" type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
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
                Data pelamar belum ada, mungkin belum dibuat atau calon karyawan belum ada yang tertarik :(
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
