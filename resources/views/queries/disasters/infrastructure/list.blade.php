@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Reporte de desastre de tipo: {{$disaster_type->name}} con fecha y hora {{$date}} a nivel {{$scale}} de infraestructuras de tipo {{$infrastructure_type->name}} en condición: {{$condition}}
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered" style="width: 100%" id="infrastructure_table">
                            <thead>
                            <tr>
                                <th data-priority="1">Departamento</th>
                                <th>Provincia</th>
                                <th>Distrito</th>
                                <th>Zona</th>
                                <th>Espacio urbano</th>
                                <th>N° / Lote</th>
                                <th data-priority="2">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($infrastructures as $infrastructure)
                                <tr>
                                    <td>{{$infrastructure->DEPARTMENT}}</td>
                                    <td>{{$infrastructure->PROVINCE}}</td>
                                    <td>{{$infrastructure->DISTRICT}}</td>
                                    <td>{{$infrastructure->ZONE}}</td>
                                    <td>{{$infrastructure->URBAN_SPACE}}</td>
                                    <td>{{$infrastructure->NUMBER}}</td>
                                    <td>
                                        <a href="{{route('queries.disasters.infrastructure.pre.edan',['id'=>$infrastructure->ID])}}" class="btn btn-primary btn-sm">Ver</a>
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
        #infrastructure_table{
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
            $('#infrastructure_table').fadeIn();
            $('#infrastructure_table').DataTable({
                dom: 'lBfrtip',
                responsive: true,
            });
        } );
    </script>
@endsection
