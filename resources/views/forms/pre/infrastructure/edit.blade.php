@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Actualizar la infraestructura {{$infrastructure->urbanspace->zone->district->nombre}}, "{{$infrastructure->urbanspace->zone->name}}" {{$infrastructure->urbanspace->type}} {{$infrastructure->urbanspace->name}}-{{$infrastructure->number}}
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="form-group row">
                                <label for="number" class="col-md-4 col-form-label text-md-right">Número o lote</label>

                                <div class="col-md-6">
                                    <input id="number" type="text" class="form-control @error('number') is-invalid @enderror" name="number" value="{{ old('number') }}" required autocomplete="number">

                                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tenencia" class="col-md-4 col-form-label text-md-right">Tenecia propia</label>

                                <div class="col-md-6">
                                    <select name="tenencia" id="tenencia" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>

                                    @error('tenencia')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="usage_condition" class="col-md-4 col-form-label text-md-right">Condición de uso de la instalación</label>

                                <div class="col-md-6">
                                    <select name="usage_condition" id="usage_condition" class="form-control">
                                        <option value="VIVIENDA">VIVIENDA</option>
                                        <option value="MEDIOS DE VIDA">MEDIOS DE VIDA</option>
                                    </select>

                                    @error('usage_condition')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="infrastructure_type" class="col-md-4 col-form-label text-md-right">Especificación de condición de uso</label>

                                <div class="col-md-6">
                                    <select id="infrastructure_type" class="custom-select"  name="infrastructure_type" required>
                                        @foreach($types as $type)
                                            <option value="{{$type->id}}">{{$type->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('infrastructure_type')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="roof" class="col-md-4 col-form-label text-md-right">Condición del techo</label>

                                <div class="col-md-6">
                                    <select name="roof" id="roof" class="form-control">
                                        <option value="1">CONCRETO ARMADO</option>
                                        <option value="2">MADERA</option>
                                        <option value="3">TEJAS</option>
                                        <option value="4">PLANCHA DE CALAMINA</option>
                                        <option value="5">CAÑA O ESTERA CON TORTA DE BARRO</option>
                                        <option value="6">ESTERA</option>
                                        <option value="7">PAJA, HOJAS DE PALMERA</option>
                                        <option value="8">OTRO MATERIAL</option>
                                    </select>

                                    @error('roof')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="wall" class="col-md-4 col-form-label text-md-right">Condición de las paredes</label>

                                <div class="col-md-6">
                                    <select name="wall" id="wall" class="form-control">
                                        <option value="1">LADRILLO O BLOQUE DE CEMENTO</option>
                                        <option value="2">PIEDRA O SILLAR CON CAL O CEMENTE</option>
                                        <option value="3">ADOBE O TAPIAL</option>
                                        <option value="4">QUINCHE (CAÑA CON BARRO)</option>
                                        <option value="5">PIEDRA CON BARRO (PIRCA)</option>
                                        <option value="6">MADERA</option>
                                        <option value="7">ESTERA</option>
                                        <option value="8">OTRO MATERIAL</option>
                                    </select>

                                    @error('wall')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="floor" class="col-md-4 col-form-label text-md-right">Condición del piso</label>

                                <div class="col-md-6">
                                    <select name="floor" id="floor" class="form-control">
                                        <option value="1">PARQUET O MADERA PULIDA</option>
                                        <option value="2">LÁMINAS ASFÁLTICAS, VINILOS O SIMILARES</option>
                                        <option value="3">LOSETA, TERRAZOS, CERÁMICOS</option>
                                        <option value="4">MADERA</option>
                                        <option value="5">CEMENTO</option>
                                        <option value="6">TIERRA</option>
                                        <option value="7">OTRO MATERIAL</option>
                                    </select>

                                    @error('floor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="floor_number" class="col-md-4 col-form-label text-md-right">Número de pisos</label>

                                <div class="col-md-6">
                                    <input id="floor_number" type="number" class="form-control @error('floor_number') is-invalid @enderror" name="floor_number" value="{{ old('floor_number') }}" required autocomplete="number">

                                    @error('floor_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <hr>
                            Continuemos preguntando sobre el estado de sus servicios básicos
                            <div class="form-group row">
                                <label for="water" class="col-md-4 col-form-label text-md-right">Agua</label>

                                <div class="col-md-6">
                                    <select name="water" id="water" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>

                                    @error('water')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="sewerage" class="col-md-4 col-form-label text-md-right">Desague</label>

                                <div class="col-md-6">
                                    <select name="sewerage" id="sewerage" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>

                                    @error('sewerage')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lights" class="col-md-4 col-form-label text-md-right">Electricidad</label>

                                <div class="col-md-6">
                                    <select name="lights" id="lights" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>

                                    @error('lights')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="natural_gas" class="col-md-4 col-form-label text-md-right">Gas natural</label>

                                <div class="col-md-6">
                                    <select name="natural_gas" id="natural_gas" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>

                                    @error('water')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="public_transport" class="col-md-4 col-form-label text-md-right">Transporte público</label>

                                <div class="col-md-6">
                                    <select name="public_transport" id="public_transport" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>

                                    @error('water')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="telecomunications" class="col-md-4 col-form-label text-md-right">Telecomunicaciones (señal celular)</label>

                                <div class="col-md-6">
                                    <select name="telecomunications" id="telecomunications" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>

                                    @error('telecomunications')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar y censar habitantes
                                    </button>
                                    <a href="{{route('forms.pre.index')}}" class="btn btn-secondary">Atras</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
