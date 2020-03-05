@extends('admin.layout')
@section('admin')
    <div class="col-md-12 mb-4">
        <a href="{{route('admin.user.create')}}" class="btn btn-success">Crear usuario</a>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
               Usuarios
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered" id="users_table" style="width:100%">
                    <thead>
                        <tr>
                            <th>Tipo de documento</th>
                            <th>N° documento</th>

                            <th>Nombre</th>
                            <th>Rol</th>
                            <th class="none">Permisos</th>
                            <th>Correo electrónico</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>@if($user->person->document_type==1)
                                    D.N.I.
                                @elseif($user->person->document_type==2)
                                    Pasaporte
                                @elseif($user->person->document_type==3)
                                    Carnet de extranjeria
                                @elseif($user->person->document_type==4)
                                    Otro documento
                                @endif
                            </td>
                            <td>{{$user->person->document_number}}</td>
                            <td>{{$user->person->name}} {{$user->person->first_surname}} {{$user->person->second_surname}}</td>

                            <td>@foreach($user->roles as $role) {{$role->display_name}} @endforeach</td>
                            <td>@foreach($user->permissions as $permission)
                                {{$permission->display_name}},
                                @endforeach</td>
                            <td>{{$user->email}}</td>
                            <td>
                                <a href="{{route('admin.user.edit',['usuario'=>$user])}}" class="btn btn-primary">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link href="{{asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        #users_table{
            display:none
        }
    </style>
@endsection
@section('script')
    <script src="{{asset('js/jquery.dataTables.min.js') }}" ></script>
    <script src="{{asset('js/dataTables.responsive.min.js') }}" ></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js') }}" ></script>
    <script>
        $(document).ready(function() {
            $('#users_table').fadeIn();
            $('#users_table').DataTable({
                responsive: true,
                responsivePriority: 10001, targets: 4
            });
        } );
    </script>
@endsection
