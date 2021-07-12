@extends('admin.partials.layout')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Empleados</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin/calendar">Home</a></li>
                            <li class="breadcrumb-item active">Empleados</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <a class="btn btn-success btn-sm mb-3 ml-3"  href="{{url('/admin/user/create')}}">
            <i class="fas fa-user-alt"></i>
            Crear
        </a>

    @include('admin.partials.session-flash-status')

    <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-secondary">
                            <div class="card-header border-0">
                                <h3 class="card-title">Empleados</h3>
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
                                        <th>Nombre</th>
                                        <th>Correo Electrónico</th>
                                        <th>Rol</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name  }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>
                                                @if($user->is_admin == 1)
                                                    Administrador
                                                @else
                                                    Empleado
                                                @endif
                                            </td>
                                            <td class="float-right d-flex">
                                                <a class="btn btn-info btn-sm mx-1"
                                                    href="{{ route('user.edit', $user) }}">
                                                    <i class="fas fa-pencil-alt"></i>
                                                    Editar
                                                </a>
                                                <button data-toggle="modal" data-target="#deleteModal"
                                                    data-id="{{ $user->id }}" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                    Borrar
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        {{ $users->links() }}

                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                             aria-labelledby="exampleModalLabel"
                             aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalLabel"></h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
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
                                        <form id="formDelete" data-action="{{ route('user.destroy', 0) }}"
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
        window.onload = function () {
            $('#deleteModal').on('show.bs.modal', function (event) {
                var button = $(event.relatedTarget) // Button that triggered the modal
                var id = button.data('id') // Extract info from data-* attributes
                // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
                // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
                action = $('#formDelete').attr('data-action').slice(0, -1) // Elimina la ultima posicion del http, en este caso el 0 pasado como parametro.
                action += id
                console.log(action)
                $('#formDelete').attr('action', action)

                var modal = $(this)
                modal.find('.modal-title').text('Vas a borrar el Usuario: ' + id)
            });
        };
    </script>

@endsection
