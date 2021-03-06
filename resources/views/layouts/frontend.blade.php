<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome.min.css') }}">
    <!-- Bootstrap 4 -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('css/adminlte.min.css') }}">
</head>
<body class="hold-transition layout-top-nav">
    <div class="wrapper">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
        <div class="container">
          <a href="#" class="navbar-brand">
            <img src="{{ asset('images/UIN-Suska-Riau.svg') }}" alt="Logo" class="brand-image">
            <span class="brand-text font-weight-bold text-success">{{ config('app.name', 'Laravel') }}</span>
          </a>

          <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse order-3" id="navbarCollapse">

          <!-- Right navbar links -->
          <ul class="order-1 order-md-3 navbar-nav ml-auto">
            <li class="nav-item">
              <a href="{{ route('beranda') }}" class="nav-link font-weight-bold">Beranda</a>
            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold dropdown-toggle">Tentang Kami</a>
              <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
                <li><a href="{{ route('profil') }}" class="dropdown-item">Profil</a></li>
                <li><a href="{{ route('visi-misi') }}" class="dropdown-item">Visi dan Misi</a></li>
                <li><a href="{{ route('struktur-organisasi') }}" class="dropdown-item">Struktur Organisasi</a></li>
                <li><a href="{{ route('dasar-hukum') }}" class="dropdown-item">Dasar Hukum</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a id="dropdownSubMenu2" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link font-weight-bold dropdown-toggle">Unit Usaha</a>
              <ul aria-labelledby="dropdownSubMenu2" class="dropdown-menu border-0 shadow">
                  @foreach (unit_usaha() as $item)
                    <li><a href="{{ route('unit-usaha', $item) }}" class="dropdown-item">{{ $item->nama }}</a></li>
                  @endforeach
              </ul>
            </li>
          </ul>
        </div>
      </nav>
      <!-- /.navbar -->

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper bg-white">
        <!-- Main content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <div class="container">
            <div class="row text-dark">
                <div class="col-md-4 mb-3">
                    <div class="d-flex align-items-center">
                      <img src="{{ asset('images/UIN-Suska-Riau.svg') }}" alt="Logo" class="brand-image" style="width: 100px; margin-left: -7px">
                      <span class="brand-text font-weight-bold text-success">Pusat Pengembangan Bisnis (P2B) Universitas Islam Negeri Sultan Syarif Kasim Riau</span>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <p class="mb-1 font-weight-bold">Media Sosial</p>
                    <a href="#" target="_blank" class="d-flex justify-content-start align-items-center">
                      <img src="{{ asset('images/facebook.svg') }}" alt="Logo" class="brand-image" style="width: 25px; margin-right: 15px;">
                      <p class="m-0 text-dark"><small>P2B UIN Suska Riau</small></p>
                    </a>
                    <a href="#" target="_blank" class="d-flex justify-content-start align-items-center">
                      <img src="{{ asset('images/instagram.svg') }}" alt="Logo" class="brand-image" style="width: 25px; margin-right: 15px;">
                      <p class="m-0 text-dark"><small>P2B UIN Suska Riau</small></p>
                    </a>
                </div>
                <div class="col-md-4">
                    <p class="mb-1 font-weight-bold">Kontak Kami</p>
                    @foreach (kontak() as $kontak)
                      <div class="d-flex justify-content-start align-items-center">
                          <i class="fas fa-map-marker-alt text-secondary" style="margin-right: 19px"></i>
                          <p class="m-0"><small>{{ $kontak->alamat }}</small></p>
                      </div>
                      <div class="d-flex justify-content-start align-items-center">
                          <i class="fas fa-envelope text-secondary" style="margin-right: 15px"></i>
                          <p class="m-0"><small>{{ $kontak->email }}</small></p>
                      </div>
                      <div class="d-flex justify-content-start align-items-center">
                          <i class="fas fa-clock text-secondary" style="margin-right: 15px"></i>
                          <p class="m-0"><small>{{ $kontak->jam_kerja }}</small></p>
                      </div>
                    @endforeach
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center border-top mt-2">
                <strong>Copyright &copy; 2021 <a href="#" class="text-success">{{ config('app.name', 'Laravel') }}</a></strong>
            </div>
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->

<!-- Bootstrap 4 -->
<script src="{{ asset('js/app.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('js/adminlte.min.js') }}"></script>

@yield('scripts')

</body>
</html>
