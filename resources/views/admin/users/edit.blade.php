@extends('admin.layout')
@section('admin')
    <div class="col-md-12 mb-4">
        <a href="{{route('admin.user.create')}}" class="btn btn-success">Crear usuario</a>
    </div>
    <div class="col-md-4 mb-4">
        <div class="card">
            <div class="card-header">
                Accesos del usuario
            </div>
            <div class="card-body">
                <form action="{{route('admin.user.update.role',$usuario)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-form-label text-md-right" for="rol_name">Actualizar rol actual</label>
                        <select class="form-control" name="role_id" id="">
                            @foreach($roles as $role)
                                @if(!empty($usuario->roles->isNotEmpty()))
                                    <option {{($usuario->roles->first()->id == $role->id)? 'selected':'' }} value="{{$role->id}}">{{$role->display_name}}</option>
                                @else
                                    <option  value="{{$role->id}}">{{$role->display_name}}</option>
                                @endif
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Si deseas atualizar el rol selecciona uno distinto y luego has click en actualizar (Se asignaran los permisos por defecto de ese rol)</small>
                    </div>
                    <div class="form-group row justify-content-end">
                        <button type="submit" class="btn btn-info"> Actualizar rol</button>
                    </div>
                </form>
                <hr>
                <form action="{{route('admin.user.update.permission',$usuario)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label class="col-form-label text-md-right" for="rol_name">Modificar permisos actuales</label>
                        <select class="form-control selectpicker" name="permissions_id[]" id="" multiple>
                            @foreach($permissions as $permission)
                                <option value="{{$permission->id}}">{{$permission->display_name}}</option>
                            @endforeach
                        </select>
                        <small class="form-text text-muted">Si deseas atualizar los permisos por defecto selecciona uno o más distintos y luego has click en actualizar </small>
                    </div>
                    <div class="form-group row justify-content-end">
                        <button type="submit" class="btn btn-info"> Actualizar permisos</button>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Editar usuario
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.user.update',$usuario) }}">
                    {{ csrf_field() }}

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $usuario->person->name }}" required autocomplete="name" >

                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="first_surname" class="col-md-4 col-form-label text-md-right">Apellido paterno</label>

                        <div class="col-md-6">
                            <input id="first_surname" type="text" class="form-control @error('first_surname') is-invalid @enderror" name="first_surname" value="{{ $usuario->person->first_surname}}" required autocomplete="first_surname" >

                            @error('first_surname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="second_surname" class="col-md-4 col-form-label text-md-right">Apellido materno</label>

                        <div class="col-md-6">
                            <input id="second_surname" type="text" class="form-control @error('second_surname') is-invalid @enderror" name="second_surname" value="{{ $usuario->person->second_surname}}" required autocomplete="second_surname" >

                            @error('second_surname')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="birthday" class="col-md-4 col-form-label text-md-right">Fecha de nacimiento</label>

                        <div class="col-md-6">
                            <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{  $usuario->person->birthday }}" required autocomplete="birthday" >

                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="document_type" class="col-md-4 col-form-label text-md-right">Tipo de documento</label>

                        <div class="col-md-6">
                            <select id="document_type" class="custom-select"  name="document_type" required>
                                <option selected>Selecciona una opción...</option>
                                <option {{($usuario->person->document_type==1)?'selected':''}} value="1">D.N.I.</option>
                                <option {{($usuario->person->document_type==2)?'selected':''}} value="2">Pasaporte</option>
                                <option {{($usuario->person->document_type==3)?'selected':''}} value="3">Carnet de extranjeria</option>
                                <option {{($usuario->person->document_type==4)?'selected':''}} value="4">Otro documento</option>
                            </select>
                            @error('document_type')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="document_number" class="col-md-4 col-form-label text-md-right">Número de documento</label>

                        <div class="col-md-6">
                            <input id="document_number" type="number" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{ $usuario->person->document_number }}" required autocomplete="document_number">

                            @error('document_number')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">Correo electrónico</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $usuario->email }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar contraseña</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                Actualizar información de usuario
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link href="{{asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('script')
    <script src="{{asset('js/bootstrap-select.min.js') }}" ></script>
    <script>
        $('.selectpicker').selectpicker('val', {{$permissions_selected_id}});
    </script>
@endsection
