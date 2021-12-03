@extends('layouts.frontend')

@section('content')
<div class="row"></div>
<div class="container my-3 my-md-5">
    <div class="row">
        <div class="col-12">
            <h3 class="mb-3 mb-md-5 font-weight-bold">{{ $unit_usaha->nama }}</h3>
            <div class="row">
                <div class="col-md-4">
                    <img src="{{ asset('storage/'.$unit_usaha->gambar) }}" alt="{{ $unit_usaha->nama }}" class="img-fluid">
                </div>
                <div class="col-md-8 text-justify">
                    {!! $unit_usaha->keterangan !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row"></div>
@endsection
