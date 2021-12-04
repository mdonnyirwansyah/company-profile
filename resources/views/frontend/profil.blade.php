@extends('layouts.frontend')

@section('content')
<div class="row"></div>
<div class="container my-3 my-md-5">
    <div class="row">
        @foreach ($profil as $item)
            <div class="col-12">
                <h3 class="mb-3 mb-md-5 font-weight-bold text-center">Profil</h3>
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        <h5 class="mb-3 font-weight-bold">Tentang</h5>
                        <div class="text-justify">
                            {!! $item->tentang !!}
                        </div>
                    </div>
                    <div class="col-md-7 border-top">
                        <h5 class="mb-3 font-weight-bold">Tugas Pokok</h5>
                        <div class="text-justify">
                            {!! $item->tugas_pokok !!}
                        </div>
                    </div>
                    <div class="col-md-7 border-top">
                        <h5 class="mb-3 font-weight-bold">Fungsi</h5>
                        <div class="text-justify">
                            {!! $item->fungsi !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="row"></div>
@endsection
