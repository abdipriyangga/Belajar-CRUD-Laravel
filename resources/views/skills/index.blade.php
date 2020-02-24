@extends('layouts.master')

@section('content')
<div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h5 class="card-title">Skills Report</h5>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                    <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                    <a href="#" class="dropdown-item">Something else here</a>
                    <a class="dropdown-divider"></a>
                    <a href="#" class="dropdown-item">Separated link</a>
                </div>
                </div>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <div class="row">
                <div class="col-md-10">
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif
                    <table class="table table-bordered">
                        <thead>                  
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Bahasa Pemrograman</th>
                                <th scope="col">Framework</th>
                                <th scope="col">Level</th>
                                <th scope="col">Waktu</th>
                                <th scope="col">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_skills as $x)
                            <tr>
                                <td scope="row">{{ $loop -> iteration }}</td>
                                <td>{{ $x -> bhsPemrograman }}</td>
                                <td>{{ $x -> framework }}</td>
                                <td>{{ $x -> level }}</td>
                                <td>{{ $x -> waktu }}</td>
                                <td>
                                    <a href="" class="badge badge-success">Edit</a>
                                    <a href="" class="badge badge-danger">Hapus</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ url('skills/create') }}" class="badge badge-success">Tambah Data</a>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            </div>
            <!-- ./card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
</div>
@endsection

@push('script')
<script src="{!! asset('../asset/plugins/datatables/jquery.dataTables.js')!!}"></script>
<script src="{!! asset('../asset/plugins/datatables-bs4/js/dataTables.bootstrap4.js')!!}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush