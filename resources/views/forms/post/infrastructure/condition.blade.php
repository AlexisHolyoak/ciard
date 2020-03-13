@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Evaluación de la infraestructura   {{$infrastructure->urbanspace->zone->district->nombre}} "{{$infrastructure->urbanspace->zone->name}}" {{$infrastructure->urbanspace->type}} {{$infrastructure->urbanspace->name}}-{{$infrastructure->number}}
                </div>
                <div class="card-body">
                    <h6>A continuación evaluaremos la continuidad de sus servicios básicos</h6>
                    <form action="">
                        <div class="form-group row">
                            <label for="water" class="col-md-4 col-form-label text-md-right">Agua</label>

                            @if($infrastructure->water === 1 )
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
                            @else
                                <div class="col-md-6">
                                    <select name="water" id="water" class="form-control" disabled>
                                        <option value="3">NO APLICA EVALUACIÓN</option>
                                    </select>
                                </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="sewerage" class="col-md-4 col-form-label text-md-right">Desague</label>

                            @if($infrastructure->sewerage === 1 )
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
                            @else
                                <div class="col-md-6">
                                    <select name="sewerage" id="sewerage" class="form-control" disabled>
                                        <option value="3">NO APLICA EVALUACIÓN</option>
                                    </select>
                                </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="lights" class="col-md-4 col-form-label text-md-right">Electricidad</label>

                            @if($infrastructure->lights === 1 )
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
                            @else
                                <div class="col-md-6">
                                    <select name="lights" id="lights" class="form-control" disabled>
                                        <option value="3">NO APLICA EVALUACIÓN</option>
                                    </select>
                                </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="natural_gas" class="col-md-4 col-form-label text-md-right">Gas natural</label>

                            @if($infrastructure->natural_gas === 1 )
                                <div class="col-md-6">
                                    <select name="natural_gas" id="natural_gas" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>

                                    @error('natural_gas')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            @else
                                <div class="col-md-6">
                                    <select name="natural_gas" id="natural_gas" class="form-control" disabled>
                                        <option value="3">NO APLICA EVALUACIÓN</option>
                                    </select>
                                </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="public_transport" class="col-md-4 col-form-label text-md-right">Transporte público</label>

                            @if($infrastructure->public_transport === 1 )
                                <div class="col-md-6">
                                    <select name="public_transport" id="public_transport" class="form-control">
                                        <option value="1">SI</option>
                                        <option value="0">NO</option>
                                    </select>

                                    @error('public_transport')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            @else
                                <div class="col-md-6">
                                    <select name="public_transport" id="public_transport" class="form-control" disabled>
                                        <option value="3">NO APLICA EVALUACIÓN</option>
                                    </select>
                                </div>
                            @endif
                        </div>
                        <div class="form-group row">
                            <label for="telecomunications" class="col-md-4 col-form-label text-md-right">Telecomunicaciones (señal celular)</label>

                            @if($infrastructure->telecomunications === 1 )
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
                            @else
                                <div class="col-md-6">
                                    <select name="telecomunications" id="telecomunications" class="form-control" disabled>
                                        <option value="3">NO APLICA EVALUACIÓN</option>
                                    </select>
                                </div>
                            @endif
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar y censar habitantes
                                </button>
                                <a href="{{route('forms.post.infrastructure',$infrastructure->urbanspace)}}" class="btn btn-secondary">Atras</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
