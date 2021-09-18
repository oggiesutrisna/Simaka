<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
      Success!
</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400&display=swap" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/css/adminlte.min.css')}}">
  <link rel="stylesheet" href="{{asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}">
</head>
<body class="register-page">
    <img src="{{asset('assets-dj/img/unicare.png')}}" width="100px" height="100px"> <br />
    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="https://www.unicare-clinic.com" class="h1">
                    Success
                </a>
            </div>
            <div class="card-body">
                <p>
                    You're now have one step ahead to be our Family
                </p>
                <p>
                    Pastikan nomor whatsapp anda sudah aktif.
                </p>
                <p>
                    Agar kami bisa menghubungi anda untuk interview :)
                </p>
                <div class="social-auth-links text-center">
                    <a href="{{route('registerkaryawans.create')}}" class="btn btn-block btn-success">
                        Daftar lagi
                    </a>
                </div>
                <div class="social-auth-links text-center">
                    <a href="/" class="btn btn-block btn-secondary">
                        Kembali ke Home
                    </a>
                </div>
            </div>
        </div>
    </div>

</body>
<!-- jQuery -->
<script src="{{asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets/js/adminlte.min.js')}}"></script>
<script src="{{asset('assets/js/script.js')}}"></script>
<script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('assets/plugins/dropzone/dropzone.js')}}"></script>
</body>
</html>
