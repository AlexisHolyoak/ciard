@extends('admin.layout')
@section('admin')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Crear usuario
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.user.store') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

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
                            <input id="first_surname" type="text" class="form-control @error('first_surname') is-invalid @enderror" name="first_surname" value="{{ old('first_surname') }}" required autocomplete="first_surname" autofocus>

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
                            <input id="second_surname" type="text" class="form-control @error('second_surname') is-invalid @enderror" name="second_surname" value="{{ old('second_surname') }}" required autocomplete="second_surname" autofocus>

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
                            <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sex" class="col-md-4 col-form-label text-md-right">Sexo</label>

                        <div class="col-md-6">
                            <select id="sex" class="custom-select"  name="sex" required>
                                <option value="MASCULINO" {{old('sex')== 'MASCULINO' ?'selected':''}}>MASCULINO</option>
                                <option value="FEMENINO" {{old('sex')== 'FEMENINO' ?'selected':''}}>FEMENINO</option>                          
                            </select>
                            @error('sex')
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
                                <option value="1" {{old('document_type')== 1 ?'selected':''}}>D.N.I.</option>
                                <option value="2" {{old('document_type')== 2 ?'selected':''}}>Pasaporte</option>
                                <option value="3" {{old('document_type')== 3 ?'selected':''}}>Carnet de extranjeria</option>
                                <option value="4" {{old('document_type')== 4 ?'selected':''}}>Otro documento</option>
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
                            <input id="document_number" type="number" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{ old('document_number') }}" required autocomplete="document_number" autofocus>

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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-4 col-form-label text-md-right" for="display_name">Rol asignado</label>
                        <div class="col-md-6">
                            <select class="form-control selectpicker " name="role_id" required>
                                @foreach($roles as $role)
                                    <option value="{{$role->id}}">{{$role->display_name}}</option>
                                @endforeach
                            </select>
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
                                Registrar
                            </button>
                            <a href="{{route('admin.user.index')}}" class="btn btn-secondary">Cancelar</a>
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
@endsection
