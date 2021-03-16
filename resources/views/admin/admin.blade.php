@extends('admin.partials.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Vacation History</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/calendar">Home</a></li>
                            <li class="breadcrumb-item active">Holidays</li>
                            <li class="breadcrumb-item active">Vacation History</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header border-0">
                                <h3 class="card-title">Vacaciones</h3>
                                <div class="card-tools">
                                    <a href="#" class="btn btn-tool btn-sm">
                                        <i class="fas fa-download"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                    <tr>
                                        <th>Empleado</th>
                                        <th>Correo electrónico</th>
                                        <th>Razón Solicitud</th>
                                        <th>Inicio Vacaciones</th>
                                        <th>Fin Vacaciones</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($holidays as $holiday)
                                        <tr>
                                            <td>{{ $holiday->name }}</td>
                                            <td>{{ $holiday->email  }}</td>
                                            <td>{{ $holiday->reason }}</td>
                                            <td>{{ $holiday->beginning }}</td>
                                            <td>{{ $holiday->finished }}</td>
                                            <td>
                                                <form action="{{ route('holiday.destroy', $holiday) }}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <a href="" class="btn btn-primary mt-2 mb-2">Ver</a>
                                                    <a href="" class="btn btn-success mt-2 mb-2">Actualizar</a>
                                                    <button type="submit" class="btn btn-danger">Borrar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    {{ $holidays->links() }}
                    <!-- /.card -->
                    </div>
                    <!-- /.col-md-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
