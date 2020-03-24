@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Información pre EDAN de  la persona
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <span  class="col-md-4 text-md-right font-weight-bold">Nombres:</span>
                            <div class="col-md-6">
                               <span>{{$habitant_info->person->name}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Apellidos: </span>
                            <div class="col-md-6">
                                <span>{{$habitant_info->person->first_surname}} {{$habitant_info->person->second_surname}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span  class="col-md-4 text-md-right font-weight-bold">Sexo: </span>
                            <div class="col-md-6">
                                <span>{{$habitant_info->person->sex}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Tipo de documento: </span>
                            <div class="col-md-6">
                                <span>({{$habitant_info->person->document_type}})
                                    @switch($habitant_info->person->document_type)
                                        @case(1)D.N.I. @break
                                        @case(2)Pasaporte @break
                                        @case(3)Carnet de extranjeria @break
                                        @case(4)Otro documento @break
                                    @endswitch
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Número de documento: </span>
                            <div class="col-md-6">
                                <span>{{$habitant_info->person->document_number}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Fecha de nacimiento: </span>
                            <div class="col-md-6">
                                <span>{{$habitant_info->person->birthday}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Semanas de gestación: </span>
                            <div class="col-md-6">
                                <span>{{($habitant_info->pregnant!=null)? $habitant_info->pregnant : 'NO APLICA'}}</span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span  class="col-md-4 text-md-right font-weight-bold">Discapacidad: </span>
                            <div class="col-md-6">
                                <span>
                                    ({{$habitant_info->disability}})
                                            @switch($habitant_info->disability)
                                        @case(0)NO POSEE @break
                                        @case(1)MOVERSE O CAMINAR @break
                                        @case(2)VER @break
                                        @case(3)OÍR @break
                                        @case(4)HABLAR @break
                                        @case(5)MENTAL @break
                                        @case(6)OTRO TIPO DE DISCAPACIDAD @break
                                    @endswitch
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <span class="col-md-4  text-md-right font-weight-bold">Enfermedad crónica: </span>
                            <div class="col-md-6">
                                <span>
                                    ({{$habitant_info->disability}})
                                            @switch($habitant_info->chronic_disease)
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
                                    @endswitch
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
