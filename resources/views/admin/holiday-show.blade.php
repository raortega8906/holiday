@extends('admin.partials.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Ver Vacaciones</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/calendar">Home</a></li>
                            <li class="breadcrumb-item active">Vacaciones</li>
                            <li class="breadcrumb-item active">Ver</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-secondary">
                            <div class="card-header border-0">
                                <h3 class="card-title">Datos de la Solicitud</h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            data-toggle="tooltip" title="Collapse">
                                        <i class="fas fa-minus"></i></button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove"
                                            data-toggle="tooltip" title="Remove">
                                        <i class="fas fa-times"></i></button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <div class="form-group mb-3 mt-3 ml-3 row-cols-lg-3">
                                    <label for="name">Empleado:</label>
                                    <input type="text" class="form-control" name="name" id="name" value="{{ old('title', $holiday->name) }}" disabled >
                                </div>
                                <div class="form-group mb-3 mt-3 ml-3 row-cols-lg-3">
                                    <label for="email">Correo electrónico:</label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ old('title', $holiday->email) }}" disabled>
                                </div>
                                <div class="form-group mb-3 mt-3 ml-3 row-cols-lg-3">
                                    <label for="reason">Razón de la solicitud:</label>
                                    <input type="text" class="form-control" name="reason" id="reason" value="{{ old('title', $holiday->reason) }}" disabled>
                                </div>
                                 <div class="form-group mb-3 mt-3 ml-3 row-cols-lg-3">
                                    <label for="beginning">Fecha Inicio</label>
                                    <input type="date" class="form-control" name="beginning" id="beginning"
                                           value="{{ old('title', $holiday->beginning) }}" disabled>
                                </div>
                                <div class="form-group mb-3 mt-3 ml-3 row-cols-lg-3">
                                    <label for="finished">Fecha Término</label>
                                    <input type="date" class="form-control" name="finished" id="finished"
                                           value="{{ old('title', $holiday->finished) }}" disabled>
                                </div>
                                <div class="form-group mb-3 mt-3 ml-3 row-cols-lg-3">
                                    <label for="status">Estado de la solicitud</label>
                                    <select class="form-control" name="status" id="status" value="" disabled>
                                        <option>Esperando</option>
                                        <option {{ $holiday->status == 'Aprobadas' ? 'selected="selected"' : '' }}>Aprobadas</option>
                                        <option {{ $holiday->status == 'Denegadas' ? 'selected="selected"' : '' }}>Denegadas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
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
