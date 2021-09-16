@extends('layouts.admin')
@section('title') Buat Postingan Lowongan @endsection
@section('content')
<div class="card card-primary">
<form action="{{route('postings.store')}}" method="POST">
    @csrf
<div class="card-body">
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" id="judul" class="form-control">
    </div>
    <div class="form-group">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control summernote"></textarea>
    </div>
    <div class="form-group">
        <label>Tempat</label>
        <select class="form-control" name="tempat">
            <option value="Hydromedical Canggu">Hydromedical Canggu</option>
            <option value="Hydro Batubelig Baru">Hydromedical Batubelig Baru</option>
            <option value="Hydro Batubelig Lama">Hydromedical Batubelig Lama</option>
            <option value="Unicare Uluwatu">Unicare Uluwatu</option>
            <option value="Unicare Ubud">Unicare Ubud</option>
            <option value="Unicare Kupang">Unicare Kupang</option>
            <option value="Head Office">Head Office Hydro & Unicare</option>
            <option value="Drive-Thru Kuta">Drive Thru Kuta</option>
            <option value="Drive-Thru Ramada">Drive Thru Ramada</option>
        </select>
    </div>
    <div class="form-group">
        <label>Kategori</label>
        <input type="text" class="form-control" name="kategori">
    </div>
    <div class="form-group">
        <label for="photo" name="photo">Gambar</label>
        <input class="form-control" type="file" name="photo" id="photo">
    </div>
</div>
<div class="card-footer">
    <a href="{{route('postings.index')}}" class="btn bg-gradient-secondary">Kembali</a>
    <button type="submit" class="btn bg-gradient-success">Buat Posting Lowongan</button>
</div>
</div>
</form>

@endsection
