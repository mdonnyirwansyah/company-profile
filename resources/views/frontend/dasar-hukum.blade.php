@extends('layouts.frontend')

@section('content')
<div class="row"></div>
<div class="container my-3 my-md-5">
    <div class="row">
        @foreach ($dasar_hukum as $item)
            <div class="col-12">
                <h3 class="mb-3 mb-md-5 font-weight-bold text-center">Dasar Hukum</h3>
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="mb-3 font-weight-bold">Landasan Hukum</h5>
                        <div class="text-justify">
                            {!! $item->landasan_hukum !!}
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="row"></div>
@endsection
