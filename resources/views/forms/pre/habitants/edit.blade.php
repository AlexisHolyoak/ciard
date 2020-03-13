@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar habitante de {{$infrastructure->urbanspace->zone->district->nombre}}, "{{$infrastructure->urbanspace->zone->name}}" {{$infrastructure->urbanspace->type}} {{$infrastructure->urbanspace->name}}-{{$infrastructure->number}}
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{route('habitants.update',$habitant)}}">
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $habitant->person->name }}" required autocomplete="name" autofocus>

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
                                    <input id="first_surname" type="text" class="form-control @error('first_surname') is-invalid @enderror" name="first_surname" value="{{ $habitant->person->first_surname }}" required autocomplete="first_surname">

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
                                    <input id="second_surname" type="text" class="form-control @error('second_surname') is-invalid @enderror" name="second_surname" value="{{ $habitant->person->second_surname }}" required autocomplete="first_surname">

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
                                    <input id="birthday" type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ $habitant->person->birthday }}" required autocomplete="birthday" autofocus>

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
                                        <option {{($habitant->person->sex == "MASCULINO")? 'selected':''}} value="MASCULINO">MASCULINO</option>
                                        <option {{($habitant->person->sex == "FEMENINO")? 'selected':''}} value="FEMENINO">FEMENINO</option>
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
                                        <option {{($habitant->person->document_type == "1")? 'selected':''}} value="1">D.N.I.</option>
                                        <option {{($habitant->person->document_type == "2")? 'selected':''}} value="2">Pasaporte</option>
                                        <option {{($habitant->person->document_type == "3")? 'selected':''}} value="3">Carnet de extranjeria</option>
                                        <option {{($habitant->person->document_type == "4")? 'selected':''}} value="4">Otro documento</option>
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
                                    <input id="document_number" type="number" class="form-control @error('document_number') is-invalid @enderror" name="document_number" value="{{$habitant->person->document_number}}" required autocomplete="document_number" autofocus>

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
                                    <input id="pregnant" type="number" class="form-control @error('pregnant') is-invalid @enderror" name="pregnant" value="{{$habitant->pregnant}}" autocomplete="pregnant" autofocus placeholder="Dejar en blanco si no aplica">
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
                                        <option {{($habitant->disability == "0")? 'selected':''}} value="0">NO POSEE</option>
                                        <option {{($habitant->disability == "1")? 'selected':''}} value="1">MOVERSE O CAMINAR</option>
                                        <option {{($habitant->disability == "2")? 'selected':''}} value="2">VER</option>
                                        <option {{($habitant->disability == "3")? 'selected':''}} value="3">OÍR</option>
                                        <option {{($habitant->disability == "4")? 'selected':''}} value="4">HABLAR</option>
                                        <option {{($habitant->disability == "5")? 'selected':''}} value="5">MENTAL</option>
                                        <option {{($habitant->disability == "6")? 'selected':''}} value="6">OTRO TIPO DE DISCAPACIDAD</option>
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
                                        <option {{($habitant->chronic_disease == "0")? 'selected':''}} value="0">NO POSEE</option>
                                        <option {{($habitant->chronic_disease == "1")? 'selected':''}} value="1">ANEMIA</option>
                                        <option {{($habitant->chronic_disease == "2")? 'selected':''}} value="2">ARRITMIAS CARDIACAS</option>
                                        <option {{($habitant->chronic_disease == "3")? 'selected':''}} value="3">ASMA BRONQUIAL</option>
                                        <option {{($habitant->chronic_disease == "4")? 'selected':''}} value="4">DESNUTRICIÓN</option>
                                        <option {{($habitant->chronic_disease == "5")? 'selected':''}} value="5">DIABETES</option>
                                        <option {{($habitant->chronic_disease == "6")? 'selected':''}} value="6">DISLIPMIAS</option>
                                        <option {{($habitant->chronic_disease == "7")? 'selected':''}} value="7">ARTRITIS, ARTROSIS, LUPS</option>
                                        <option {{($habitant->chronic_disease == "8")? 'selected':''}} value="8">ENFERMEDAD PSIQUIATRICA GRAVE</option>
                                        <option {{($habitant->chronic_disease == "9")? 'selected':''}} value="9">EPILEPSIA</option>
                                        <option {{($habitant->chronic_disease == "10")? 'selected':''}} value="10">ESQUIZOFRENIA</option>
                                        <option {{($habitant->chronic_disease == "11")? 'selected':''}} value="11">GLAUCOMA</option>
                                        <option {{($habitant->chronic_disease == "12")? 'selected':''}} value="12">HEPATITIS</option>
                                        <option {{($habitant->chronic_disease == "13")? 'selected':''}} value="13">HIPERTENSION ARTERIAL</option>
                                        <option {{($habitant->chronic_disease == "14")? 'selected':''}} value="14">HIPERTIROIDISMO - HIPOTIROIDISMO</option>
                                        <option {{($habitant->chronic_disease == "15")? 'selected':''}} value="15">HIPERTROFIA PROSTÁTICA BENIGNA</option>
                                        <option {{($habitant->chronic_disease == "16")? 'selected':''}} value="16">HIPERUCIREMIA GOTA</option>
                                        <option {{($habitant->chronic_disease == "17")? 'selected':''}} value="17">INSUFICIENCIA CARDIACA</option>
                                        <option {{($habitant->chronic_disease == "18")? 'selected':''}} value="18">INSUFICIENCIA CORONARIA</option>
                                        <option {{($habitant->chronic_disease == "19")? 'selected':''}} value="19">INSUFICIENCIA RENAL CRÓNICA</option>
                                        <option {{($habitant->chronic_disease == "20")? 'selected':''}} value="20">NEUROPATIAS DESMIELIZANTES</option>
                                        <option {{($habitant->chronic_disease == "21")? 'selected':''}} value="21">OSTEOPOROSIS Y DESCALSIFICACIÓN GENERAL</option>
                                        <option {{($habitant->chronic_disease == "22")? 'selected':''}} value="22">PARKINSON</option>
                                        <option {{($habitant->chronic_disease == "23")? 'selected':''}} value="23">TUBERCULOSIS</option>
                                        <option {{($habitant->chronic_disease == "24")? 'selected':''}} value="24">VIH</option>
                                        <option {{($habitant->chronic_disease == "25")? 'selected':''}} value="25">OTRAS</option>

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
                                        Actualizar
                                    </button>
                                    <a href="{{route('habitants.index',$infrastructure)}}" class="btn btn-secondary">Ver lista de habitantes</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
