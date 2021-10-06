@extends('admin.partials.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Historial de Vacaciones</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/calendar">Home</a></li>
                            <li class="breadcrumb-item active">Vacaciones</li>
                            <li class="breadcrumb-item active">Historial</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                @include('admin.partials.session-flash-status')
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-secondary">
                            <div class="card-header border-0">
                                <h3 class="card-title">Vacaciones</h3>
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
                                <table class="table table-striped table-valign-middle">
                                    <thead>
                                        <tr>
                                            <th>Empleado</th>
                                            <th>Correo electrónico</th>
                                            <th>Razón Solicitud</th>
                                            <th>Inicio Vacaciones</th>
                                            <th>Fin Vacaciones</th>
                                            <th>Estado Solicitud</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!auth()->user()->is_admin)
                                            @foreach (auth()->user()->holidays as $holiday)
                                                <tr>
                                                    <td>{{ $holiday->name }}</td>
                                                    <td>{{ $holiday->email }}</td>
                                                    <td>{{ $holiday->reason }}</td>
                                                    <td>{{ $holiday->beginning }}</td>
                                                    <td>{{ $holiday->finished }}</td>
                                                    <td>
                                                        @if ($holiday->status == 'Esperando')
                                                            <span class="badge badge-secondary">Esperando</span>
                                                        @elseif( $holiday->status == 'Aprobadas' )
                                                            <span class="badge badge-success">Aprobadas</span>
                                                        @else
                                                            <span class="badge badge-danger">Denegadas</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            @foreach ($holidays as $holiday)
                                                <tr>
                                                    <td>{{ $holiday->name }}</td>
                                                    <td>{{ $holiday->email }}</td>
                                                    <td>{{ $holiday->reason }}</td>
                                                    <td>{{ $holiday->beginning }}</td>
                                                    <td>{{ $holiday->finished }}</td>
                                                    <td>
                                                        @if ($holiday->status == 'Esperando')
                                                            <span class="badge badge-secondary">Esperando</span>
                                                        @elseif( $holiday->status == 'Aprobadas' )
                                                            <span class="badge badge-success">Aprobadas</span>
                                                        @else
                                                            <span class="badge badge-danger">Denegadas</span>
                                                        @endif
                                                    </td>
                                                    <td class="float-right d-flex mx-1">
                                                        <a class="btn btn-primary btn-sm"
                                                            href="{{ route('holiday.show', $holiday) }}">
                                                            <i class="fas fa-folder"></i>
                                                            Ver
                                                        </a>
                                                        <a class="btn btn-info btn-sm mx-1"
                                                            href="{{ route('holiday.edit', $holiday) }}">
                                                            <i class="fas fa-pencil-alt"></i>
                                                            Editar
                                                        </a>
                                                        <button data-toggle="modal" data-target="#deleteModal"
                                                            data-id="{{ $holiday->id }}" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash"></i>
                                                            Borrar
                                                        </button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{ $holidays->links() }}

                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Seguro desea borrar el registro selecccionado?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">
                                            Cerrar
                                        </button>
                                        <form id="formDelete" data-action="{{ route('holiday.destroy', 0) }}"
                                            method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" class="btn btn-danger btn-sm">
                                                <i class="fas fa-trash"></i>
                                                Borrar
                                            </button>
                                        </form>
                                    </div>
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

    <script>
        window.onload = function() {
            $('#deleteModal').on('show.bs.modal', function(event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                action = $('#formDelete').attr('data-action').slice(0, -
                    1) // Elimina la ultima posicion del http, en este caso el 0 pasado como parametro.
                action += id
                console.log(action)
                $('#formDelete').attr('action', action)

                var modal = $(this)
                modal.find('.modal-title').text('Vas a borrar la Solicitud: ' + id)
            });
        };
    </script>

@endsection
