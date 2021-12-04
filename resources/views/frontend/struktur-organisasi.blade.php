@extends('layouts.frontend')

@section('content')
<div class="row"></div>
<div class="container my-3 my-md-5">
    <div class="row">
        @foreach ($struktur_organisasi as $item)
            <div class="col-12">
                <h3 class="mb-3 mb-md-5 font-weight-bold text-center">Struktur Organisasi</h3>
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8">
                        <div class="d-flex flex-column justify-content-center">
                            <img src="{{ asset('storage/'.$item->gambar) }}" alt="{{ $item->nama }}" class="img-fluid">
                            <h6 class="mt-3 text-center mb-3">{{ $item->nama }}</h6>
                        </div>
                        <div class="text-justify">
                            {!! $item->keterangan !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="row"></div>
@endsection
