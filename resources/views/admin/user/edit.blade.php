@extends('admin.partials.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Editar Empleados</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/calendar">Home</a></li>
                            <li class="breadcrumb-item active">Empleados</li>
                            <li class="breadcrumb-item active">Editar</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        @include('admin.partials.session-flash-status')

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-secondary">
                            <div class="card-header border-0">
                                <h3 class="card-title">Actualizar Rol del Empleado</h3>
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
                                <form action="{{ route('user.update', $user->id) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                    <div class="form-group mb-3 mt-3 ml-3 row-cols-lg-3">
                                        <label for="name">Empleado:</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{ old('title', $user->name) }}" disabled>
                                    </div>
                                    <div class="form-group mb-3 mt-3 ml-3 row-cols-lg-3">
                                        <label for="email">Correo electrónico:</label>
                                        <input type="email" class="form-control" name="email" id="email" value="{{ old('title', $user->email) }}" disabled>
                                    </div>
                                    <div class="form-group mb-3 mt-3 ml-3 row-cols-lg-3">
                                        <label for="password">Contraseña:</label>
                                        <input type="text" class="form-control" name="password" id="password" value="{{ old('title', '********') }}" disabled>
                                    </div>
                                    <div class="form-group mb-3 mt-3 ml-3 row-cols-lg-3">
                                        <label for="is_admin">Rol del empleado</label>
                                        <select class="form-control" name="is_admin" id="is_admin">
                                            <option value="0">0</option>
                                            <option value="1" {{ $user->is_admin == 1 ? 'selected="selected"' : '' }}>1</option>
                                        </select>
                                    </div>
                                    <input type="submit"
                                           value="Actualizar Empleado"
                                           class="btn btn-success mb-3 mt-3 ml-3 row-cols-lg-3">
                                </form>
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
