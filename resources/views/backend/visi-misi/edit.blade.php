@extends('layouts.app')

@section('scripts')
    <script>
        ClassicEditor
        .create( document.querySelector( '#visi' ), {
            toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        } )
        .catch( error => {
            console.log( error );
        } );


        ClassicEditor
        .create( document.querySelector( '#misi' ), {
            toolbar: [ 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
        } )
        .catch( error => {
            console.log( error );
        } );
    </script>
    @if ($message = Session::get('success'))
    <script>
        toastr.success('{{ $message }}', 'Pemberitahuan,')
    </script>
    @endif
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Visi Misi') }}</h1>
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
                        <form class="form-horizontal" method="POST" action="{{ route('tentang.visi-misi.update', $visi_misi) }}">
                            @method('PUT')
                            @csrf
                            <div class="card-body">
                                @include('backend.visi-misi.partials.form')
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
