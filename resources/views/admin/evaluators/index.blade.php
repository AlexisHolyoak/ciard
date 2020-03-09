@extends('admin.layout')
@section('admin')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Evaluadores
            </div>
            <div class="card-body">
                <table class="table table-striped table-bordered dt-responsive" id="evaluators_table" style="width:100%">
                    <thead>
                    <tr>
                        <th data-priority="1">Nombre</th>
                        <th class="none">Espacios urbanos asignados</th>
                        <th>Disponibilidad</th>
                        <th data-priority="2">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($evaluators as $evaluator)
                        <tr>
                            <td>{{$evaluator->person->name}} {{$evaluator->person->first_surname}} {{$evaluator->person->second_surname}}</td>
                            <td></td>
                            <td></td>
                            <td>
                                <a href="" class="btn btn-warning btn-sm">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link href="{{asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        #evaluators_table{
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
            $('#evaluators_table').fadeIn();
            $('#evaluators_table').DataTable({
                dom: 'lBfrtip',
                responsive: true,
            });
        } );
    </script>
@endsection
