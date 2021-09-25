@extends('layouts.admin')
@section('title') Index Postingan Lowongan @endsection
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
            <th>Judul Postingan</th>
            <th>Deskripsi Singkat</th>
            <th>Requirements</th>
            <th>Kategori</th>
            <th>Photo</th>
            <th>Actions</th>
          </tr>
        </thead>
    <tbody>
          @forelse($postings as $pst)
          <tr>
            <td>{{ $pst->id }}</td>
            <td>{{ $pst->judul }}</td>
            <td>{{ $pst->deskripsi }}</td>
            <td>{{ $pst->tempat }}</td>
            <td>{{ $pst->requirements }}</td>
            <td>{{ $pst->kategori }}</td>
            <td>{{ $pst->photo }}</td>
            <form action="{{route('registerkaryawans.destroy', $rk->id )}}" method="POST" id="form">
              @csrf
              @method('DELETE')
              <td>
                <div class="btn-group">
                  <a href="{{ route('postings.show', $pst->judul) }}" type="button" class="btn btn-primary">
                    <i class="fas fa-search"></i>
                    <a href="{{ route('postings.edit', $rk->judul ) }}" type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
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
                    Postingan belum ada, atau kamu belum buat :(
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
