@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Reporte de desastre de tipo: {{$disaster_type->name}} con fecha y hora {{$date}} a nivel {{$scale}} de habitantes en situación de daño personal: {{$condition}}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" style="width: 100%" id="habitants_table">
                            <thead>
                            <tr>
                                <th data-priority="1">Nombre</th>
                                <th>Apellido</th>
                                <th>Tipo de documento</th>
                                <th>N° de documento</th>
                                <th>Departamento</th>
                                <th>Provincia</th>
                                <th>Distrito</th>
                                <th>Zona</th>
                                <th>Espacio urbano</th>
                                <th>N° / Lote</th>
                                <th data-priority="2">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($habitants as $habitant)
                                <tr>
                                    <td>{{$habitant->precondition->person->name}}</td>
                                    <td>{{$habitant->precondition->person->first_surname}} {{$habitant->precondition->person->second_surname}}</td>
                                    <td>@if($habitant->precondition->person->document_type==1)
                                            D.N.I.
                                        @elseif($habitant->precondition->person->document_type==2)
                                            Pasaporte
                                        @elseif($habitant->precondition->person->document_type==3)
                                            Carnet de extranjeria
                                        @elseif($habitant->precondition->person->document_type==4)
                                            Otro documento
                                        @endif</td>
                                    <td>{{$habitant->precondition->person->document_number}}</td>
                                    <td>{{$habitant->precondition->infrastructure->urbanspace->zone->district->province->department->nombre}}</td>
                                    <td>{{$habitant->precondition->infrastructure->urbanspace->zone->district->province->nombre}}</td>
                                    <td>{{$habitant->precondition->infrastructure->urbanspace->zone->district->nombre}}</td>
                                    <td>{{$habitant->precondition->infrastructure->urbanspace->zone->name}}</td>
                                    <td>{{$habitant->precondition->infrastructure->urbanspace->name}}</td>
                                    <td>{{$habitant->precondition->infrastructure->number}}</td>
                                    <td>
                                        <a href="{{route('queries.disasters.habitants.pre.edan',['disaster'=>$habitant->disaster,'habitant'=>$habitant])}}" class="btn btn-primary btn-sm">Ver</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link href="{{asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        #habitants_table{
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
            $('#habitants_table').fadeIn();
            $('#habitants_table').DataTable({
                dom: 'lBfrtip',
                responsive: true,
            });
        } );
    </script>
@endsection
