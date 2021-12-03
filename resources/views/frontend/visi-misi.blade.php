@extends('layouts.frontend')

@section('content')
<div class="row"></div>
<div class="container my-3 my-md-5">
    <div class="row">
        @foreach ($visi_misi as $item)
            <div class="col-12">
                <h3 class="mb-3 mb-md-5 font-weight-bold text-center">Visi dan Misi</h3>
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="mb-3 font-weight-bold">Visi</h5>
                        <div class="text-justify">
                            {!! $item->visi !!}
                        </div>
                    </div>
                    <div class="col-md-12 border-top">
                        <h5 class="mb-3 font-weight-bold">Misi</h5>
                        <div class="text-justify">
                            {!! $item->misi !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="row"></div>
@endsection
