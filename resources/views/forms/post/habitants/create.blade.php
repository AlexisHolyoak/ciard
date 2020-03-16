@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Registrar habitante en la infraestructura: {{$infrastructure->urbanspace->zone->district->nombre}}, "{{$infrastructure->urbanspace->zone->name}}" {{$infrastructure->urbanspace->type}} {{$infrastructure->urbanspace->name}}-{{$infrastructure->number}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('post.habitants.store',$infrastructure)}}">
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
                                <label for="first_surname" class="col-md-4 col-form-label text-md-right">Primer Apellido</label>

                                <div class="col-md-6">
                                    <input id="first_surname" type="text" class="form-control @error('first_surname') is-invalid @enderror" name="first_surname" value="{{ old('first_surname') }}" required autocomplete="first_surname">

                                    @error('first_surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="second_surname" class="col-md-4 col-form-label text-md-right">Segundo Apellido</label>

                                <div class="col-md-6">
                                    <input id="second_surname" type="text" class="form-control @error('second_surname') is-invalid @enderror" name="second_surname" value="{{ old('second_surname') }}" required autocomplete="first_surname">

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
                                    <select name="sex" id="sex" class="form-control">
                                        <option value="MASCULINO">MASCULINO</option>
                                        <option value="FEMENINO">FEMENINO</option>
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
                                        <option value="1">D.N.I.</option>
                                        <option value="2">Pasaporte</option>
                                        <option value="3">Carnet de extranjeria</option>
                                        <option value="4">Otro documento</option>
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
                                <label for="pregnant" class="col-md-4 col-form-label text-md-right">Gestante (semanas)</label>

                                <div class="col-md-6">
                                    <input id="pregnant" type="number" class="form-control @error('pregnant') is-invalid @enderror" name="pregnant" value="{{ old('pregnant') }}" autocomplete="pregnant" autofocus placeholder="Dejar en blanco si no aplica">
                                    @error('pregnant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="disability" class="col-md-4 col-form-label text-md-right">Discapacidad</label>

                                <div class="col-md-6">
                                    <select id="disability" class="custom-select"  name="disability" required>
                                        <option value="0">NO POSEE</option>
                                        <option value="1">MOVERSE O CAMINAR</option>
                                        <option value="2">VER</option>
                                        <option value="3">OÍR</option>
                                        <option value="4">HABLAR</option>
                                        <option value="5">MENTAL</option>
                                        <option value="6">OTRO TIPO DE DISCAPACIDAD</option>
                                    </select>
                                    @error('document_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="chronic_disease" class="col-md-4 col-form-label text-md-right">Enfermedad crónica</label>

                                <div class="col-md-6">
                                    <select id="chronic_disease" class="custom-select"  name="chronic_disease" required>
                                        <option value="0">NO POSEE</option>
                                        <option value="1">ANEMIA</option>
                                        <option value="2">ARRITMIAS CARDIACAS</option>
                                        <option value="3">ASMA BRONQUIAL</option>
                                        <option value="4">DESNUTRICIÓN</option>
                                        <option value="5">DIABETES</option>
                                        <option value="6">DISLIPMIAS</option>
                                        <option value="7">ARTRITIS, ARTROSIS, LUPS</option>
                                        <option value="8">ENFERMEDAD PSIQUIATRICA GRAVE</option>
                                        <option value="9">EPILEPSIA</option>
                                        <option value="10">ESQUIZOFRENIA</option>
                                        <option value="11">GLAUCOMA</option>
                                        <option value="12">HEPATITIS</option>
                                        <option value="13">HIPERTENSION ARTERIAL</option>
                                        <option value="14">HIPERTIROIDISMO - HIPOTIROIDISMO</option>
                                        <option value="15">HIPERTROFIA PROSTÁTICA BENIGNA</option>
                                        <option value="16">HIPERUCIREMIA GOTA</option>
                                        <option value="17">INSUFICIENCIA CARDIACA</option>
                                        <option value="18">INSUFICIENCIA CORONARIA</option>
                                        <option value="19">INSUFICIENCIA RENAL CRÓNICA</option>
                                        <option value="20">NEUROPATIAS DESMIELIZANTES</option>
                                        <option value="21">OSTEOPOROSIS Y DESCALSIFICACIÓN GENERAL</option>
                                        <option value="22">PARKINSON</option>
                                        <option value="23">TUBERCULOSIS</option>
                                        <option value="24">VIH</option>
                                        <option value="25">OTRAS</option>

                                    </select>
                                    @error('chronic_disease')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Añadir habitante
                                    </button>
                                    <a href="{{route('post.habitants.index',$infrastructure)}}" class="btn btn-secondary">Ver lista de habitantes</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
