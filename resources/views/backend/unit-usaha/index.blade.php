@extends('layouts.app')

@section('scripts')
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
                    <h1 class="m-0">{{ __('Unit Usaha') }}</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-primary" href="{{ route('unit-usaha.create') }}">Tambah</a>
                        </div>
                        <div class="card-body table-responsive">
                            <table class="table table-hover text-wrap">
                                <thead>
                                    <tr>
                                        <th width="5%">No</th>
                                        <th>Nama</th>
                                        <th>Gambar</th>
                                        <th width="10%">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($unit_usaha as $index => $item)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->gambar }}</td>
                                            <td>
                                                <a class="btn btn-outline-info btn-xs" href="{{ route('unit-usaha.edit', $item) }}">
                                                    <i class="fa fa-pen"></i>
                                                </a>
                                                <form method="POST" action="{{ route('unit-usaha.destroy', $item) }}" style="display: inline-block">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a class="btn btn-outline-danger btn-xs" onclick="event.preventDefault(); this.closest('form').submit();">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
@endsection
