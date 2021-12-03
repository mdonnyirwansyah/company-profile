@extends('layouts.frontend')

@section('content')
<div class="row d-flex justify-content-center align-items-center bg-success" style="height: 90vh; background: url({{ asset('images/background.jpg') }}) no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="col-10 col-md-6">
        <h1 class="font-weight-bold" style="text-shadow: 2px 2px 2px rgb(90, 90, 90);">Selamat Datang di Website</h1>
        <h3 class="mb-3 font-weight-bold" style="text-shadow: 2px 2px 2px rgb(90, 90, 90);">Pusat Pengembangan Bisnis (P2B) Universitas Islam Negeri Sultan Syarif Kasim Riau</h3>
        <p  style="text-shadow: 2px 2px 2px rgb(90, 90, 90);">Temukan apa yang kamu butuhkan disini</p>
        <form action="simple-results.html">
            <div class="input-group">
                <input type="search" class="form-control form-control-lg" placeholder="Tulis kata kunci mu disini">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-lg btn-default">
                        <i class="fa fa-search text-success"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <h5 class="text-secondary text-center mb-0">Sering dikunjungi</h5>
            <h3 class="mb-3 font-weight-bold text-center mt-0">Unit Usaha</h3>
        </div>
        <div class="col-md-4">
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user shadow-sm">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header text-white"
                   style="background: url({{ asset('images/background.jpg') }}) center center; background-size: cover;">
                <h5 class="widget-user-desc text-right font-weight-bold" style="text-shadow: 2px 2px 2px rgb(90, 90, 90);">Lorem, ipsum dolor.</h5>
              </div>
              <div class="card-footer">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum sunt doloremque a ipsa aliquid illo cumque expedita, maiores dicta quis?</p>
              </div>
            </div>
            <!-- /.widget-user -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</div>
@endsection
