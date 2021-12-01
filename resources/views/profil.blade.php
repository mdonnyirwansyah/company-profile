@extends('layouts.app')

@push('scripts')
<script>
    ClassicEditor
    .create( document.querySelector( '#tentang' ), {
        toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
    } )
    .catch( error => {
        console.log( error );
    } );


    ClassicEditor
    .create( document.querySelector( '#tugas_pokok' ), {
        toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
    } )
    .catch( error => {
        console.log( error );
    } );

    ClassicEditor
    .create( document.querySelector( '#fungsi' ), {
        toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
    } )
    .catch( error => {
        console.log( error );
    } );
</script>
@endpush

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Profil') }}</h1>
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
                        <form class="form-horizontal">
                            <div class="card-body">
                                <div class="form-group row">
                                    <label for="tentang" class="col-sm-2 col-form-label">Tentang</label>
                                    <div class="col-sm-10">
                                        <textarea name="tentang" id="tentang" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tugas_pokok" class="col-sm-2 col-form-label">Tugas Pokok</label>
                                    <div class="col-sm-10">
                                        <textarea name="tugas_pokok" id="tugas_pokok" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="fungsi" class="col-sm-2 col-form-label">Fungsi</label>
                                    <div class="col-sm-10">
                                        <textarea name="fungsi" id="fungsi" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-info">Submit</button>
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
