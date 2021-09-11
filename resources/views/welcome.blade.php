<!doctype html>
  <html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Oggie Sutrisna">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Unicare Hirings</title>

    <link rel="stylesheet" href="{{ asset('assets-dj/css/bootstrap.min.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <!-- Compiled and minified CSS -->

  </head>
  <body>

    <main>
      <header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-4">Unicare Hirings</span>
        </a>
      </header>

      <!-- Hero -->
      <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
          <div class="col-10 col-sm-8 col-lg-6">
            <img src="{{asset('assets-dj/img/h1h1.jpg')}}" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
          </div>
          <div class="col-lg-6">
            <h1 class="display-5 fw-bolder lh-1 mb-3">Come for the job, Stay for the Challenge.</h1>
            <p class="lead">Buat karir anda semakin maju dan berkembang bersama Unicare Clinic</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <a href="{{route('registerkaryawans.create')}}" class="btn btn-primary btn-lg px-4 me-md-2">Daftar Sekarang!</a>
          <a href="#loker" type="button" class="btn btn-outline-secondary btn-lg px-4">Cek bukaan terbaru</a>
        </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Hero -->


      <!-- Section 1 -->
      <div class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom"><b>Dapatkan Informasi Loker terbaru dari Unicare Clinic</b></h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
              <i class="fas fa-doctor"></i>
            </div>
            <div>
              <h2>Lihat Loker yang tersedia secara Real-Time</h2>
              <p>Anda melihat loker yang tersedia dan merasa anda qualified, langsung daftar!</p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
            </div>
            <div>
              <h2>Akses Sangat Mudah</h2>
              <p>Dengan akses yang sangat ramah untuk para calon pekerja yang akan bekerja di Unicare Clinic, menjadikan sebuah pengalaman bagi anda.</p>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
              <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
            </div>
            <div>
              <h2>Interview Offline dan Online</h2>
              <p>tim HRD kami akan memanggil anda setelah anda mengisi form yang sudah disediakan dan juga sudah memenuhi kriteria dan langsung di interview baik offline maupun online</p>
            </div>
          </div>
        </div>
      </div>

      <!-- Section 2 -->
      <div class="container px-4 py-1" id="loker">
      <h2 class="pb-2 border-bottom"><b>Posisi yang dibuka per hari ini</b></h2>
      <!-- Posts -->
      <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h4 class="mb-0"><b>Loker : Perawat</b></h4>
          <p class="card-text mb-auto">Merasa punya skill di bidang ini? yuk gabung bersama kami</p>
          <a href="#" class="stretched-link">Daftar Sekarang!</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://source.unsplash.com/random" width="200" height="250">

        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">Loker : Dokter</h3>
          <p class="mb-auto">Qualified? daftar sekarang juga</p>
          <a href="#" class="stretched-link">Daftar!</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <img src="https://source.unsplash.com/random" width="200" height="250">
        </div>
      </div>
    </div>
  </div>
      </div>

      <!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
      class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >
      <!-- Left -->
      <div class="me-5 d-none d-lg-block">
        <span>Pantengin terus sosial media kami. kabar loker di kami ya.</span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-google"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-instagram"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-linkedin"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="fab fa-github"></i>
        </a>
      </div>
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
            <!-- Content -->
            <h6 class="text-uppercase fw-bold mb-4">
              <i class="fas fa-gem me-3"></i>Company name
            </h6>
            <p>
              Here you can use rows and columns to organize your footer content. Lorem ipsum
              dolor sit amet, consectetur adipisicing elit.
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Products
            </h6>
            <p>
              <a href="#!" class="text-reset">Angular</a>
            </p>
            <p>
              <a href="#!" class="text-reset">React</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Vue</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Laravel</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Useful links
            </h6>
            <p>
              <a href="#!" class="text-reset">Pricing</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Settings</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Orders</a>
            </p>
            <p>
              <a href="#!" class="text-reset">Help</a>
            </p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <!-- Links -->
            <h6 class="text-uppercase fw-bold mb-4">
              Contact
            </h6>
            <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
            <p>
              <i class="fas fa-envelope me-3"></i>
              info@example.com
            </p>
            <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
            <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->

    <!-- Copyright -->
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
      © 2021 Unicare Clinic Built With 💖
      <a class="text-reset fw-bold" href="https://www.unicare-clinic.com/">By Oggie Sutrisna</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="{{asset('assets-dj/js/bootstrap.min.js')}}"></script>
  </body>
  </html>
