@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       Infraestructuras de {{$urbanspace->zone->district->nombre}} "{{$urbanspace->zone->name}}" {{$urbanspace->type}} "{{$urbanspace->name}}" registradas dentro del desastre: {{$disaster->disastertype->name}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{route('forms.post.infrastructure.create',$urbanspace)}}" class="btn btn-success">Registrar infraestructura</a>
                            </div>
                        </div>

                        <hr>
                        <h6>A continuación se muestran las infraestructuras de esta calle/manzana:</h6>

                        <table class="table table-bordered" id="infrastructure_table" style="width: 100%">
                            <thead>
                            <tr>
                                <th>Responsable de la infraestructura</th>
                                <th>N°/Lote</th>
                                <th >Categoria</th>
                                <th class="none">Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($infrastructures as $infrastructure)
                                <tr>
                                    <td>{{$infrastructure->boss->person->name}} {{$infrastructure->boss->person->first_surname}} {{$infrastructure->boss->person->second_surname}}</td>
                                    <td>{{$infrastructure->number}}</td>

                                    <td>{{$infrastructure->category->name}}</td>
                                    <td>
                                        <a href="{{route('post.habitants.condition',['disaster'=>$disaster, 'infrastructure'=>$infrastructure])}}" class="btn btn-sm btn-warning">Habitantes</a>
                                        <a href="{{route('post.infrastructure.condition',['disaster'=>$disaster, 'infrastructure'=>$infrastructure])}}" class="btn btn-primary btn-sm">Infraestructura</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">
                        <a href="" class="btn btn-danger btn-sm float-left" data-toggle="modal" data-target="#exampleModal">Concluir evaluación</a>
                        <a href="{{route('forms.post.index')}}" class="btn btn-secondary btn-sm float-right">Atras</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="{{route('post.evaluation.conclude',['disaster'=>$disaster,'urbanspace'=>$urbanspace ])}}" method="post">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">¿Desea concluir?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ¿Esta seguro que desea concluir la evaluación del desastre en este espacio urbano?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Aceptar</button>
                    </div>
                </form>
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
