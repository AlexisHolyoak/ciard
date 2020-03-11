@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        {{$urbanspace->zone->district->nombre}} {{$urbanspace->zone->name}} {{$urbanspace->type}} {{$urbanspace->name}}
                    </div>
                    <div class="card-body">
                        <div class="row col-md-12 mb-4 justify-content-between">
                            <div class="">
                                <a href="{{route('forms.pre.infrastructure.create',$urbanspace)}}" class="btn btn-success">Registrar infraestructura</a>
                            </div>
                            <div class="">
                                <a href="{{route('forms.pre.index')}}" class="btn btn-secondary">Atras</a>
                            </div>
                        </div>


                        <table class="table table-bordered" id="infrastructure_table">
                            <thead>
                            <tr>
                                <th>Responsable</th>
                                <th>N°/Lote</th>
                                <th class="none">Categoria</th>
                                <th>Acciones</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($infrastructures as $infrastructure)
                            <tr>
                                <td>{{$infrastructure->boss->person->name}} {{$infrastructure->boss->person->first_surname}} {{$infrastructure->boss->person->second_surname}}</td>
                                <td>{{$infrastructure->number}}</td>

                                <td>{{$infrastructure->category->name}}</td>
                                <td>
                                    <a href="" class="btn btn-sm btn-warning">Habitantes</a>
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
