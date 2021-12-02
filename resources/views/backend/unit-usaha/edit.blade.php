@extends('layouts.app')

@section('scripts')
    <script>
        ClassicEditor
        .create( document.querySelector( '#keterangan' ), {
            toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        } )
        .catch( error => {
            console.log( error );
        } );
    </script>
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Edit Unit Usaha') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <!-- Horizontal Form -->
                        <form class="form-horizontal" method="POST" action="{{ route('unit-usaha.update', $unit_usaha) }}" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                @include('backend.unit-usaha.partials.form')
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Simpan Perubahan</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
