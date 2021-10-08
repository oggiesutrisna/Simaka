<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hirings Section</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/css/adminlte.min.css')}}">
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
        <p class="login-box-msg"><strong>Pastikan data yang anda masukkan sudah benar dan so pasti!</strong></p>
        <!-- /.card-header -->
        <form action="{{ route('registerkaryawans.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Email *</label>
                            <input type="email" name="email" class="form-control @if($errors->has('email')) is-invalid @endif " placeholder="namaemail@domain.com" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Nama Lengkap *</label>
                            <input type="text" name="nama" class="form-control @if($errors->has('nama')) is-invalid @endif" placeholder="ex : Rahmat Letsgo" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Tempat, Tanggal Lahir *</label>
                            <input type="text" name="ttl" class="form-control @if($errors->has('ttl')) is-invalid @endif" placeholder="Tempat, DD/MM/YYYY" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Posisi Melamar *</label>
                            <select class="form-control @if($errors->has('email')) is-invalid @endif" name="posisi" id="posisi">
                                <option value="Admin">Admin</option>
                                <option value="Accounting">Accounting</option>
                                <option value="Apoteker">Apoteker</option>
                                <option value="Asisten Apoteker">Asisten Apoteker</option>
                                <option value="Business Development">Business Development</option>
                                <option value="Call Center">Call Center</option>
                                <option value="Cleaning Service">Cleaning Service</option>
                                <option value="Designer Grafis">Designer Grafis</option>
                                <option value="Driver">Driver</option>
                                <option value="Dokter">Dokter</option>
                                <option value="Food & Beverages">Food & Beverages</option>
                                <option value="Finance">Finance</option>
                                <option value="Front Office">Front Office</option>
                                <option value="Marketing Offline">Marketing Offline</option>
                                <option value="Marketing Online">Marketing Online</option>
                                <option value="Perawat">Perawat</option>
                                <option value="Programmer">Programmer / Developer</option>
                                <option value="Technician">Technician</option>
                                <option value="Videography">Videography</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Jenis Kelamin *</label>
                            <select class="form-control @if($errors->has('gender')) is-invalid @endif" name="gender" required>
                                <option value="Laki-Laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>No Telepon / No Whatsapp Aktif *</label>
                            <input type="text" name="notelp" class="form-control @if($errors->has('notelp')) is-invalid @endif" placeholder="Nomor Whatsapp Aktif" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pendidikan Terakhir *</label>
                            <select class="form-control @if($errors->has('pend_terakhir')) is-invalid @endif" name="pend_terakhir" id="pend_terakhir" required>
                                <option value="SD"> SD </option>
                                <option value="SMP"> SMP </option>
                                <option value="SMA"> SMA </option>
                                <option value="SMK"> SMK </option>
                                <option value="Diploma 1"> Diploma 1 </option>
                                <option value="Diploma 2"> Diploma 2 </option>
                                <option value="Diploma 3"> Diploma 3 </option>
                                <option value="Sarjana 1"> Sarjana 1 </option>
                                <option value="Sarjana 2"> Sarjana 2 </option>
                                <option value="Sarjana 3"> Sarjana 3 </option>
                                <option value="Doktor"> Doktor </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Deskripsikan diri anda secara singkat *</label>
                            <input type="text" class="form-control @if($errors->has('pend_terakhir')) is-invalid @endif" name="bio" placeholder="tell your story" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <label>Alamat Lengkap Tempat Tinggal Sekarang *</label>
                        <input type="text" name="alamat" class="form-control @if($errors->has('alamat')) is-invalid @endif" placeholder="ex: Los Angeles, CA" required>
                    </div>
                    <div class="col-sm-6">
                        <label>Upload file CV & Portfolio / STR berupa .jpg atau .pdf *</label>
                        <input type="file" name="filepdf" accept="image/jpg, image/jpeg, image/png, application/pdf" class="form-control @if($errors->has('filepdf')) is-invalid @endif" id="filepdf" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Dapat informasi dari mana? *</label>
                            <select class="form-control @if($errors->has('dapat_informasi')) is-invalid @endif" name="dapatinformasi" id="dapatinformasi" required>
                                <option value="Loker Bali"> Iklan Instagram Loker Bali </option>
                                <option value="Dapat dari teman"> Dapat informasi dari Teman </option>
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
                            <label>Upload screenshot informasi yang anda dapat*</label>
                            <input type="file" accept="image/*" id="screenshot" name="screenshot" class="form-control @if($errors->has('screenshot')) is-invalid @endif" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Pilihan Waktu Bekerja*</label>
                            <select name="waktu" class="form-control @if($errors->has('waktu')) is-invalid @endif" id="waktu" required>
                                <option value="Bekerja Penuh Waktu">Penuh Waktu</option>
                                <option value="Magang">Magang</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Upload Foto Diri*</label>
                            <input type="file" name="fotodiri" class="form-control @if($errors->has('fotodiri')) is-invalid @endif" accept="image/*" id="fotodiri" required>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label>Expectate Salary *</label>
                            <select name="salary" id="salary" class="form-control @if($errors->has('salary')) is-invalid @endif" required>
                                <option value="Rp. 1.000.000">Rp. 1.000.000,-</option>
                                <option value="Rp. 1.500.000">Rp. 1.500.000,-</option>
                                <option value="Rp. 2.000.000">Rp. 2.000.000,-</option>
                                <option value="Rp. 2.500.000">Rp. 2.500.000,-</option>
                                <option value="Rp. 3.000.000">Rp. 3.000.000,-</option>
                                <option value="Rp. 3.500.000">Rp. 3.500.000,-</option>
                                <option value="Rp. 4.000.000">Rp. 4.000.000,-</option>
                                <option value="Rp. 4.500.000">Rp. 4.500.000,-</option>
                                <option value="Rp. 5.000.000">Rp. 5.000.000,-</option>
                                <option value="Lebih dari Rp. 5.000.000">Lebih dari Rp. 5.000.000,-</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="button" data-toggle="modal" data-target="#modal-default" class="btn bg-gradient-primary">Submit Lamaran Anda</button>
            </div>
        </div> <br />
        <p>Copyright &copy; 2021 <a href="https://www.unicare-clinic.com">Syntak by Unicare</a> | Built with 💖 by <a href="https://twitter.com/@oggiesutrisna">Oggie Sutrisna</a></p>

        <div class="modal fade" id="modal-default" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title">Decorous</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Sebelum anda mensubmit, ada baiknya anda membaca ketentuan dari kami terlebih dahulu</p>
                  <p>1. Aplikasi ini adalah resmi dari <b>Syntak</b> oleh Unicare Clinic dibuat oleh <a href="https://twitter.com/@oggiesutrisna">Oggie Sutrisna </a>Siapapun yang meniru, mengambil, mencuri, hacking, atau bypass yang membuat merugikan, kami tidak segan melapor ke pihak berwajib.</p>
                  <p>2. Semua file yang anda ajukan atau unggah ke aplikasi kami dijamin 100% aman dan telah di enkripsi. Kami pastikan data anda terjamin dan kami tidak akan mendistribusikan semua file apapun yang anda submit di aplikasi kami kemanapun. Karena data anda adalah data privacy.</p>
                  <p>3. Pastikan data yang diperlukan sudah lengkap agar anda cepat mudah mendapatkan interview.</p>
                  <p>4. Pastikan di bagian <b>no telepon aktif</b>, gunakan <b>+628</b> diawal saat anda mencantumkan nomor telepon aktif anda.</p>
                </div>
                <div class="modal-footer justify-content-between">
                  <button type="submit" aria-label="close" class="btn btn-primary">Submit Lamaran Anda</button>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>

        <!-- jQuery -->
        <script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap 4 -->
        <script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('assets/js/adminlte.min.js')}}"></script>
        <script src="{{asset('assets/js/script.js')}}"></script>
        <script src="{{ asset('assets/plugins/dropzone/dropzone.js')}}"></script>
        <script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>

        {{-- Modals --}}
    </body>
    </html>
