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
                    @foreach($users as $user)
                        <tr>
                            <td>{{$user->person->name}} {{$user->person->first_surname}} {{$user->person->second_surname}}</td>
                            <td>
                                @if(!empty($user->person->evaluator))
                                @foreach($user->person->evaluator->urbanspaces as $urbanspace)
                                        <br>* {{$urbanspace->zone->district->nombre}}, {{$urbanspace->zone->type}} {{$urbanspace->zone->name}}, {{$urbanspace->type}} {{$urbanspace->name}}
                                    @endforeach
                                    @endif
                            </td>
                            <td>
                                @if(!empty($user->person->evaluator))
                                    @if($user->person->evaluator->urbanspaces->count()>0)
                                    {{($user->person->evaluator->available == 1)? 'DISPONIBLE': 'NO DISPONIBLE'}}
                                    @else
                                        SIN ASIGNAR
                                    @endif
                                @else
                                    SIN ASIGNAR
                                @endif
                            </td>
                            <td>
                                <a href="{{route('admin.evaluators.edit',$user->person)}}" class="btn btn-warning btn-sm">Asignar</a>
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
