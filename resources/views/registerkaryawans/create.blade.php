<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hirings Section</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}">
</head>
<body class="hold-transition register-page">
    <div class="register-logo"> <br/>
        <a href="{{route('home')}}"><b>Unicare</b> Hirings</a>
    </div>
    <div class="card card-body register-card-body card-outline card-primary">
        {{-- Error Span --}}
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        {{-- End Error Span --}}
        <p class="login-box-msg">nb : Pastikan data yang anda isi sudah <b>tepat dan benar.</b></p>
        <!-- /.card-header -->
        <form action="{{ route('registerkaryawans.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="namaemail@domain.com" required>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" name="nama" class="form-control" placeholder="ex : Rahmat Letsgo" required>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                            <label>Tempat, Tanggal Lahir</label>
                            <input type="text" name="ttl" class="form-control" placeholder="Tempat, DD/MM/YYYY" required>
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
                            <select class="form-control" name="gender" required>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>No Telepon / No Whatsapp Aktif</label>
                            <input type="text" name="notelp" class="form-control" placeholder="Nomor Whatsapp Aktif" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pendidikan Terakhir</label>
                            <select class="form-control" name="pend_terakhir" id="pend_terakhir" required>
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
                            <label>Deskripsikan diri anda secara singkat</label>
                            <input type="text" class="form-control" name="bio" placeholder="tell your story" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Alamat Lengkap Tempat Tinggal Sekarang</label>
                        <input type="text" name="alamat" class="form-control" placeholder="ex: Los Angeles, CA" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Upload file CV & Portfolio / STR berupa .jpg atau .pdf </label>
                        <input type="file" name="filepdf" accept="image/jpg, image/jpeg, image/png, application/pdf" class="form-control" id="filepdf" required>
                        <p>*maksimal ukuran file : 2 MB</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Dapat informasi dari mana?</label>
                            <select class="form-control" name="dapatinformasi" id="pend_terakhir" required>
                                <option value="Loker Bali"> Iklan Instagram Loker Bali </option>
                                <option value="Info Lowongan Bali"> Iklan Instagram Info Lowongan Bali </option>
                                <option value="Info Loker Bali"> Iklan Instagram Info Loker Bali </option>
                                <option value="Unicare Hirings"> Langsung dari Unicare Hiring </option>
                                <option value="Jobstreet">Iklan Jobstreet</option>
                                <option value="Jobs.id">Iklan Jobs.id</option>
                                <option value="Baliho">Baliho</option>
                                <option value="Videotron">Videotron</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Upload screenshot informasi yang anda dapat</label>
                            <input type="file" accept="image/*" id="screenshot" name="screenshot" class="form-control" required>
                            <p>*maksimal ukuran file : 2mb</p>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Upload Foto Diri</label>
                    <input type="file" name="fotodiri" class="form-control" accept="image/*" id="screenshot" required>
                    <p>*Maksimal ukuran file 2mb</p>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn bg-gradient-primary">Daftar!</button>
            </div>
            <!-- input states -->
        </div> <br />
        <p>Copyright &copy; 2021 <a href="https://www.unicare-clinic.com">Unicare Clinic</a> | Built with 💖 by <a href="https://twitter.com/@oggiesutrisna">Oggie Sutrisna</a></p>


        <!-- jQuery -->
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/js/adminlte.min.js')}}"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>
        <script src="{{ asset('assets/plugins/dropzone/dropzone.js')}}"></script>
        <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    </body>
    </html>
