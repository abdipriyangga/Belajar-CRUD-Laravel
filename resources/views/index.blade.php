@extends('/layouts/master')

@section('content')
<div class="row">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">
            <h5 class="card-title">Vacancies Report</h5>
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
                    <table id="example1" class="table table-bordered">
                        <thead>                  
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Lokasi</th>
                                <th scope="col">Type</th>
                                <th scope="col">Durasi</th>
                                <th scope="col">Rentang Gaji</th>
                                <th scope="col">Requirement Skill</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_vacancies as $x)
                            <tr>
                                <td scope="row">{{ $loop -> iteration }}</td>
                                <td>{{ $x -> lokasi }}</td>
                                <td>{{ $x -> type }}</td>
                                <td>{{ $x -> durasi }}</td>
                                <td>{{ $x -> rentangGaji }}</td>
                                <td>{{ $x -> requirementSkill }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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

@section('contentSkills')
<!-- Skill -->
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
                    <table id="example1" class="table table-bordered">
                        <thead>                  
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Bahasa Pemrograman</th>
                                <th scope="col">Framework</th>
                                <th scope="col">Level</th>
                                <th scope="col">Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data_skills as $y)
                            <tr>
                                <td scope="row">{{ $loop -> iteration }}</td>
                                <td>{{ $y -> bhsPemrograman }}</td>
                                <td>{{ $y -> framework }}</td>
                                <td>{{ $y -> level }}</td>
                                <td>{{ $y -> waktu }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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
<script src="{!! asset('asset/plugins/datatables/jquery.dataTables.js')!!}"></script>
<script src="{!! asset('asset/plugins/datatables-bs4/js/dataTables.bootstrap4.js')!!}"></script>
<script>
  $(function () {
    $("#example1").DataTable();
  });
</script>
@endpush