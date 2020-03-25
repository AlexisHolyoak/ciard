@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Información pre EDAN de  la infraestructura
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <span  class="col-md-4 text-md-right font-weight-bold">Departamento:</span>
                            <div class="col-md-6">
                                <span>{{$infrastructure->precondition->urbanspace->zone->district->province->department->nombre}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Provincia: </span>
                            <div class="col-md-6">
                                <span>{{$infrastructure->precondition->urbanspace->zone->district->province->nombre}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span  class="col-md-4 text-md-right font-weight-bold">Distrito: </span>
                            <div class="col-md-6">
                                <span>{{$infrastructure->precondition->urbanspace->zone->district->nombre}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Zona: </span>
                            <div class="col-md-6">
                                <span>
                                    {{$infrastructure->precondition->urbanspace->zone->name}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Espacio urbano: </span>
                            <div class="col-md-6">
                                <span>{{$infrastructure->precondition->urbanspace->name}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Número o lote: </span>
                            <div class="col-md-6">
                                <span>{{$infrastructure->precondition->number}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Tenencia (propia): </span>
                            <div class="col-md-6">
                                <span>{{($infrastructure->precondition->tenencia==1)?'SI':'NO'}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span  class="col-md-4 text-md-right font-weight-bold">Condición de uso: </span>
                            <div class="col-md-6">
                                <span>
                                    {{$infrastructure->precondition->usage_condition}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Categoria de la infraestructura: </span>
                            <div class="col-md-6">
                                <span>
                                    {{$infrastructure->precondition->category->name}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Cantidad de pisos: </span>
                            <div class="col-md-6">
                                <span>
                                    {{$infrastructure->precondition->floors_number}}
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Material de construcción del techo: </span>
                            <div class="col-md-6">
                                <span>
                                     @switch($infrastructure->precondition->roof)
                                        @case(1)CONCRETO ARMADO @break
                                        @case(2)MADERA @break
                                        @case(3)TEJAS @break
                                        @case(4)PLANCHA DE CALAMINA @break
                                        @case(5)CAÑA O ESTERA CON TORTA DE BARRO@break
                                        @case(6)ESTERA @break
                                        @case(7)PAJA, HOJAS DE PALMERA @break
                                        @case(8)OTRO MATERIAL @break
                                    @endswitch
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Material de construcción de las paredes: </span>
                            <div class="col-md-6">
                                <span>
                                     @switch($infrastructure->precondition->wall)
                                        @case(1)LADRILLO O BLOQUE DE CEMENTO @break
                                        @case(2)PIEDRA O SILLAR CON CAL O CEMENTE @break
                                        @case(3)ADOBE O TAPIAL @break
                                        @case(4)QUINCHE (CAÑA CON BARRO) @break
                                        @case(5)PIEDRA CON BARRO (PIRCA) @break
                                        @case(6)MADERA @break
                                        @case(7)ESTERA @break
                                        @case(8)OTRO MATERIAL @break
                                    @endswitch
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Material de construcción del piso: </span>
                            <div class="col-md-6">
                                <span>
                                    @switch($infrastructure->precondition->floor)
                                        @case(1)PARQUET O MADERA PULIDA @break
                                        @case(2)LÁMINAS ASFÁLTICAS, VINILOS O SIMILARES @break
                                        @case(3)LOSETA, TERRAZOS, CERÁMICOS @break
                                        @case(4)MADERA @break
                                        @case(5)CEMENTO @break
                                        @case(6)TIERRA @break
                                        @case(7)OTRO MATERIAL @break
                                    @endswitch
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Servicios básicos: </span>
                            <div class="col-md-6">
                                <span>
                                     @if($infrastructure->precondition->water==1)
                                        AGUA
                                    @endif
                                    @if($infrastructure->precondition->lights==1)
                                        ELECTRICIDAD
                                    @endif
                                    @if($infrastructure->precondition->natural_gas==1)
                                        GAS NATURAL
                                    @endif
                                    @if($infrastructure->precondition->public_transport==1)
                                        TRANSPORTE PÚBLICO
                                    @endif
                                    @if($infrastructure->precondition->telecomunications==1)
                                        TELECOMUNICACIONES
                                    @endif
                                    @if($infrastructure->precondition->sewerage==1)
                                        DESAGÜE
                                    @endif
                                    @if($infrastructure->precondition->water!=1 &&
                                        $infrastructure->precondition->lights!=1 &&
                                        $infrastructure->precondition->natural_gas!=1 &&
                                        $infrastructure->precondition->public_transport!=1 &&
                                        $infrastructure->precondition->telecomunications!=1 &&
                                        $infrastructure->precondition->sewerage!=1
                                        )
                                        NINGUNO
                                    @endif
                                </span>
                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ url()->previous() }}" class="btn btn-secondary">Atras</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
