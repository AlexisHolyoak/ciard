@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mb-4">
        <div class="col-md-12">
            <a href="{{route('disasters.create')}}" class="btn btn-success">Registrar desastre</a>
        </div>
    </div>
    <div class="row ">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Lista de desastres registrados
                </div>
                <div class="card-body">
                    <table class="table table-bordered" id="disasters_table" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Desastre</th>
                            <th>Espacio urbano afectado</th>
                            <th>Fecha y hora del desastre</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($disasters as $disaster)
                            <tr>
                                <td>{{$disaster->disastertype->name}}</td>
                                <td>{{$disaster->urbanspace->zone->district->nombre}} "{{$disaster->urbanspace->zone->name}}" {{$disaster->urbanspace->type}} {{$disaster->urbanspace->name}}</td>
                                <td>{{$disaster->date_time_disaster}}</td>
                                <td>
                                    <a href="{{route('disasters.edit',$disaster)}}" class="btn btn-primary btn-sm">Editar</a>
                                    @if($disaster->evaluated==1)
                                    <a href="{{route('reports.disasters',$disaster)}}" class="btn btn-warning btn-sm">Reporte</a>
                                    @endif
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
        #disasters_table{
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
            $('#disasters_table').fadeIn();
            $('#disasters_table').DataTable({
                dom: 'lBfrtip',
                responsive: true,
            });
        } );
    </script>
@endsection
