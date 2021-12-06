@extends('layouts.frontend')

@section('scripts')
    <script>
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');

        $(document).ready(function() {
            $('#search').select2({  
                theme: 'bootstrap4',
                placeholder: 'Tulis kata kunci mu disini',
                ajax: {
                    url: "{{ route('unit-usaha.search') }}",
                    type: 'POST',
                    dataType: 'json',
                    delay: 250,
                    data: function(params) {
                        return{
                            _token: CSRF_TOKEN,
                            search: params.term
                        }
                    },
                    processResults: function(response) {
                        return{
                            results: response
                        }
                    },
                    cache: true
                }
            });
            $('#search').change(function (e) {
                let search = $('#search').val();
                $.ajax({
                    url: "{{ route('unit-usaha.find') }}",
                    type: "POST",
                    data: {
                        search
                    },
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (response) {
                        if(response.success){
                            window.location.href = response.success;
                        }
                    },
                    error: function(xhr, ajaxOptions, thrownError) {
                        console.log(xhr.status + '\n' + xhr.responseText + '\n' + thrownError);
                    }
                });
            });
        });
    </script>
@endsection

@section('content')
<div class="row justify-content-center align-items-center bg-success" style="height: 90vh; @isset($background) background: url({{ asset('storage/'.$background->gambar) }}) @endisset no-repeat center center fixed; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover; background-size: cover;">
    <div class="col-10 col-md-6">
        <h1 class="font-weight-bold" style="text-shadow: 2px 2px 2px rgb(90, 90, 90);">Selamat Datang di Website</h1>
        <h3 class="mb-3 font-weight-bold" style="text-shadow: 2px 2px 2px rgb(90, 90, 90);">Pusat Pengembangan Bisnis (P2B) Universitas Islam Negeri Sultan Syarif Kasim Riau</h3>
        <p  style="text-shadow: 2px 2px 2px rgb(90, 90, 90);">Temukan apa yang kamu butuhkan disini</p>
        <div class="input-group">
            <select type="search" id="search" class="form-control form-control-lg" style="width: 90%"></select>
            <div class="input-group-append" style="width: 10%">
                <button class="btn btn-default disable">
                    <i class="fa fa-search text-success"></i>
                </button>
            </div>
        </div>
    </div>
</div>
<div class="container my-3 my-md-5">
    <div class="row">
        <div class="col-12">
            <h5 class="text-secondary text-center mb-0">Sering dikunjungi</h5>
            <h3 class="mb-3 font-weight-bold text-center mt-0">Unit Usaha</h3>
        </div>
        @foreach ($unit_usaha as $item)
            <div class="col-md-4">
                <a href="{{ route('unit-usaha', $item) }}">
                    <div class="card card-widget widget-user shadow-sm">
                        <div class="widget-user-header text-white"
                            style="background: url({{ asset('storage/'.$item->gambar) }}) center center; background-size: cover;">
                            <h5 class="widget-user-desc text-right font-weight-bold" style="text-shadow: 2px 2px 2px rgb(90, 90, 90);">{{ $item->nama }}</h5>
                        </div>
                        <div class="card-footer text-justify text-secondary">
                            {!! substr($item->keterangan, 0, 100) !!}...
                        </div>
                    </div>
                    <!-- /.widget-user -->
                </a>
            </div>
            <!-- /.col -->
        @endforeach
    </div>
    <!-- /.row -->
</div>
<div class="row"></div>
@endsection
