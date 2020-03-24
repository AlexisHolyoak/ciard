@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Desastre: {{$disaster->disastertype->name}} {{$disaster->urbanspace->zone->district->nombre}} "{{$disaster->urbanspace->zone->name}}" {{$disaster->urbanspace->type}} "{{$disaster->urbanspace->name}}" fecha: {{$disaster->date_time_disaster}}
                    </div>
                    <div class="card-body" id="report">
                        Desastre: {{$disaster->disastertype->danger->name}}
                        <br>
                        Especificación de desastre: {{$disaster->disastertype->name}}
                        <br>
                        Fecha y hora aproximada del desastre: {{$disaster->date_time_disaster}}
                        <br>
                        <hr>
                        <h5>Localización del desastre:</h5>
                        Departamento: {{$disaster->urbanspace->zone->district->province->department->nombre}}
                        <br>
                        Provincia: {{$disaster->urbanspace->zone->district->province->nombre}}
                        <br>
                        Distrito: {{$disaster->urbanspace->zone->district->nombre}}
                        <br>
                        Zona: {{$disaster->urbanspace->zone->type}} {{$disaster->urbanspace->zone->name}}
                        <br>
                        Espacio urbano: {{$disaster->urbanspace->type}} "{{$disaster->urbanspace->name}}"
                        <hr>
                        <h5>Información general de infraestructuras</h5>
                        Infraestructuras evaluadas: {{$infrastructures_afected->count()}}
                        <br>
                        Infraestructuras afectadas: {{$infrastructures_afected->where('condition','AFECTADA')->count()}}
                        <br>
                        Infraestructuras inhabilitadas: {{$infrastructures_afected->where('condition','INHABITABLE')->count()}}
                        <br>
                        Infraestructuras destruidas: {{$infrastructures_afected->where('condition','DESTRUIDA')->count()}}
                        <br>
                        Infraestructuras en buen estado: {{$infrastructures_afected->where('condition','BUENA')->count()}}
                        <br>
                        <ul class="list-unstyled">
                            <li>Servicios básicos afectados:</li>
                                <ul>
                                    <li>Agua: {{$infrastructures_afected->where('water',0)->count()}}</li>
                                    <li>Electricidad: {{$infrastructures_afected->where('lights',0)->count()}}</li>
                                    <li>Desagüe: {{$infrastructures_afected->where('sewerage',0)->count()}}</li>
                                    <li>Gas natural: {{$infrastructures_afected->where('natural_gas',0)->count()}}</li>
                                    <li>Transporte público: {{$infrastructures_afected->where('public_transport',0)->count()}}</li>
                                    <li>Telecomunicaciones: {{$infrastructures_afected->where('telecomunications',0)->count()}}</li>
                                </ul>
                        </ul>
                        <h5>Información general de habitantes</h5>
                        <ul class="list-unstyled">
                            <li>Condición:</li>
                            <ul>
                                <li>Damnificados: {{$habitants_afected->where('condition','DAMNIFICADO')->count()}}</li>
                                <li>Afectados: {{$habitants_afected->where('condition','AFECTADO')->count()}}</li>
                            </ul>
                            <li>Daños personales:</li>
                            <ul>
                                <li>Ningun daño: {{$habitants_afected->where('personal_damage','NINGUNO')->count()}}</li>
                                <li>Lesionados: {{$habitants_afected->where('personal_damage','LESIONADO')->count()}}</li>
                                <li>Desaparecidos: {{$habitants_afected->where('personal_damage','DESAPARECIDO')->count()}}</li>
                                <li>Fallecidos: {{$habitants_afected->where('personal_damage','FALLECIDO')->count()}}</li>
                            </ul>
                        </ul>
                        <hr>
                        <h4 class="font-weight-bold text-danger">Reporte detallado</h4>
                        @foreach($infrastructures_afected as $infrastructure_afected)
                        <hr>
                        <h5 class="font-weight-bold text-primary">"{{$disaster->urbanspace->zone->name}}" {{$disaster->urbanspace->type}} "{{$disaster->urbanspace->name}}" {{$infrastructure_afected->precondition->number}}</h5>
                        <h5 class="font-weight-bold">Evaluación de la infraestructura</h5>
                        Responsable de la infraestructura: {{$infrastructure_afected->precondition->boss->person->name}} {{$infrastructure_afected->precondition->boss->person->first_surname}} {{$infrastructure_afected->precondition->boss->person->second_surname}}
                        <br>
                        Condición de la infraestructura posterior al desastre: {{$infrastructure_afected->condition}}
                        <br>
                        Tenencia propia de la infraestructura: {{($infrastructure_afected->precondition->tenencia==1)?'SI':'NO'}}
                        <br>
                        Condición de uso de la infraestructura: {{$infrastructure_afected->precondition->usage_condition}}
                        <br>
                        Categoria de la infraestructura {{$infrastructure_afected->precondition->category->name}}
                        <br>
                        <ul class="list-unstyled">
                            <li>Materiales de construcción:</li>
                                <ul>
                                    <li>Material de construcción del techo:
                                        @switch($infrastructure_afected->precondition->roof)
                                            @case(1)CONCRETO ARMADO @break
                                            @case(2)MADERA @break
                                            @case(3)TEJAS @break
                                            @case(4)PLANCHA DE CALAMINA @break
                                            @case(5)CAÑA O ESTERA CON TORTA DE BARRO@break
                                            @case(6)ESTERA @break
                                            @case(7)PAJA, HOJAS DE PALMERA @break
                                            @case(8)OTRO MATERIAL @break
                                        @endswitch</li>
                                    <li>Material de construcción de las paredes:
                                        @switch($infrastructure_afected->precondition->wall)
                                            @case(1)LADRILLO O BLOQUE DE CEMENTO @break
                                            @case(2)PIEDRA O SILLAR CON CAL O CEMENTE @break
                                            @case(3)ADOBE O TAPIAL @break
                                            @case(4)QUINCHE (CAÑA CON BARRO) @break
                                            @case(5)PIEDRA CON BARRO (PIRCA) @break
                                            @case(6)MADERA @break
                                            @case(7)ESTERA @break
                                            @case(8)OTRO MATERIAL @break
                                        @endswitch</li>
                                    <li>Material de construcción del piso:
                                        @switch($infrastructure_afected->precondition->floor)
                                            @case(1)PARQUET O MADERA PULIDA @break
                                            @case(2)LÁMINAS ASFÁLTICAS, VINILOS O SIMILARES @break
                                            @case(3)LOSETA, TERRAZOS, CERÁMICOS @break
                                            @case(4)MADERA @break
                                            @case(5)CEMENTO @break
                                            @case(6)TIERRA @break
                                            @case(7)OTRO MATERIAL @break
                                        @endswitch</li>
                                </ul>
                        </ul>
                        Serviciós básicos afectados:
                            @if($infrastructure_afected->water==0)
                                AGUA
                            @endif
                            @if($infrastructure_afected->lights==0)
                                ELECTRICIDAD
                            @endif
                            @if($infrastructure_afected->natural_gas==0)
                                GAS NATURAL
                            @endif
                            @if($infrastructure_afected->public_transport==0)
                                TRANSPORTE PÚBLICO
                            @endif
                            @if($infrastructure_afected->telecomunications==0)
                                TELECOMUNICACIONES
                            @endif
                            @if($infrastructure_afected->sewerage==0)
                                DESAGÜE
                            @endif
                            @if($infrastructure_afected->water!=0 &&
                                $infrastructure_afected->lights!=0 &&
                                $infrastructure_afected->natural_gas!=0 &&
                                $infrastructure_afected->public_transport!=0 &&
                                $infrastructure_afected->telecomunications!=0 &&
                                $infrastructure_afected->sewerage!=0
                                )
                                NINGUNO
                            @endif
                        <br>
                        <h5 class="font-weight-bold">Evaluación de los habitantes: </h5>
                         @foreach($infrastructure_afected->precondition->habitants as $habitant)
                             <ul class="list-unstyled">
                                 <li class="font-weight-bold">Nombres: {{$habitant->person->name}} {{$habitant->person->first_surname}} {{$habitant->person->second_surname}}</li>
                                 <li>Edad: {{\Carbon\Carbon::parse($habitant->person->birthday)->diff(\Carbon\Carbon::now())->format('%y años, %m meses and %d días')}}</li>
                                 <li>Tipo de documento: ({{$habitant->person->document_type}})
                                     @switch($habitant->person->document_type)
                                         @case(1)D.N.I. @break
                                         @case(2)Pasaporte @break
                                         @case(3)Carnet de extranjeria @break
                                         @case(4)Otro documento @break
                                     @endswitch</li>
                                 </li>
                                 <li>Número de documento: {{$habitant->person->document_number}}</li>
                                 <li>Información especial: </li>
                                    <ul>
                                        <li>Semanas de gestación: {{($habitant->pregnant!=null)? $habitant->pregnant : 'NO APLICA'}}</li>
                                        <li>Discapacidad: ({{$habitant->disability}})
                                            @switch($habitant->disability)
                                                @case(0)NO POSEE @break
                                                @case(1)MOVERSE O CAMINAR @break
                                                @case(2)VER @break
                                                @case(3)OÍR @break
                                                @case(4)HABLAR @break
                                                @case(5)MENTAL @break
                                                @case(6)OTRO TIPO DE DISCAPACIDAD @break
                                            @endswitch</li>
                                        </li>
                                        <li>Tipo de enfermedad crónica: ({{$habitant->disability}})
                                            @switch($habitant->chronic_disease)
                                                @case(0)NO POSEE @break
                                                @case(1)ANEMIA @break
                                                @case(2)ARRITMIAS CARDIACAS @break
                                                @case(3)ASMA BRONQUIAL @break
                                                @case(4)DESNUTRICIÓN @break
                                                @case(5)DIABETES @break
                                                @case(6)DISLIPMIAS @break
                                                @case(7)ARTRITIS, ARTROSIS, LUPS @break
                                                @case(8)ENFERMEDAD PSIQUIATRICA GRAVE @break
                                                @case(9)EPILEPSIA @break
                                                @case(10)ESQUIZOFRENIA @break
                                                @case(11)GLAUCOMA @break
                                                @case(12)HEPATITIS @break
                                                @case(13)HIPERTENSION ARTERIAL @break
                                                @case(14)HIPERTIROIDISMO - HIPOTIROIDISMO @break
                                                @case(15)HIPERTROFIA PROSTÁTICA BENIGNA @break
                                                @case(16)HIPERUCIREMIA GOT @break
                                                @case(17)INSUFICIENCIA CARDIACA @break
                                                @case(18)INSUFICIENCIA CORONARI @break
                                                @case(19)INSUFICIENCIA RENAL CRÓNICA @break
                                                @case(20)NEUROPATIAS DESMIELIZANTES @break
                                                @case(21)OSTEOPOROSIS Y DESCALSIFICACIÓN GENERAL @break
                                                @case(22)PARKINSON @break
                                                @case(23)TUBERCULOSIS @break
                                                @case(24)VIH @break
                                                @case(25)OTRAS @break
                                            @endswitch</li></li>
                                    </ul>
                             </ul>

                             <ul class="list-unstyled">
                                 <li>Situación post desastre</li>
                                 <ul>
                                     <li>Condición: {{$habitant->conditions->where('disaster_id',$disaster->id)->first()->condition}}</li>
                                     <li>Daños personales: {{$habitant->conditions->where('disaster_id',$disaster->id)->first()->personal_damage}}</li>
                                 </ul>
                             </ul>
                         @endforeach
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

