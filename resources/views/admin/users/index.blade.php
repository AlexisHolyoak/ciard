@extends('admin.layout')
@section('admin')
    <div class="col-md-12 mb-4">
        <button class="btn btn-success">Nuevo Usuario</button>
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
                            <th data-priority="2">N° documento</th>

                            <th data-priority="1">Nombre</th>
                            <th>Rol</th>
                            <th>Permisos</th>
                            <th>Correo electrónico</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($people as $person)
                        <tr>
                            <td>@if($person->document_type==1)
                                    D.N.I.
                                @elseif($person->document_type==2)
                                    Pasaporte
                                @elseif($person->document_type==3)
                                    Carnet de extranjeria
                                @elseif($person->document_type==4)
                                    Otro documento
                                @endif
                            </td>
                            <td>{{$person->document_number}}</td>
                            <td>{{$person->name}} {{$person->first_surname}} {{$person->second_surname}}</td>
                            <td>@foreach($person->user->roles as $role) {{$role->display_name}} @endforeach</td>
                            <td>@foreach($person->user->permissions as $permission)
                                {{$permission->display_name}}
                                @endforeach</td>
                            <td>{{$person->user->email}}</td>
                            <td>
                                <a href="" class="btn btn-primary">Editar</a>
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
                responsive: true
            });
        } );
    </script>
@endsection
