@extends('layouts.admin')
@section('title') Data Calon Karyawan @endsection
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
            <th>DateOfBirth</th>
            <th>Biografi Singkat</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
            @forelse($registerkaryawans as $rk)
            <tr>
                <td>{{ $rk->id }}</td>
                <td>{{ $rk->name }}</td>
                <td>{{ $rk->ttl }}</td>
                <td>{{ $rk->bio }}</td>
                <form action="{{route('registerkaryawans.destroy', $rk->id )}}" method="POST" id="form">
                  @csrf
                  @method('DELETE')
                <td>
                    <div class="btn-group-vertical">
                        <a href="{{route('registerkaryawans.show', $rk->id )}}" type="button" class="btn btn-primary">
                          <i class="fas fa-search"></i>
                          <a href="{{route('registerkaryawans.edit', $rk->id )}}" type="button" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                          <button type="submit" class="btn btn-danger delete-button">
                              <i class="fas fa-trash"></i>
                          </button>
                    </div>
                  </td>
                </form>
            </tr>
            @empty
            <tr class="expandable-body">
                <td colspan="5">
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
