@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Habitantes de {{$infrastructure->urbanspace->zone->district->nombre}}, "{{$infrastructure->urbanspace->zone->name}}" {{$infrastructure->urbanspace->type}} {{$infrastructure->urbanspace->name}}-{{$infrastructure->number}}
                </div>
                <div class="card-body">
                    <div class="row col-md-12 mb-4 justify-content-between">
                        <a href="{{route('habitants.create',$infrastructure)}}" class="btn btn-success">Nuevo habitante</a>
                        <a href="{{route('forms.pre.infrastructure',$infrastructure->urbanspace)}}" class="btn btn-secondary">Atras</a>
                    </div>
                    <div class="row col-md-12">
                        <span>Reponsable de la infraestructura: {{$infrastructure->boss->person->name}} {{$infrastructure->boss->person->first_surname}} {{$infrastructure->boss->person->second_surname}}</span>
                    </div>
                    <table class="table table-bordered" id="habitants_table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Nombres</th>
                                <th>Documento</th>
                                <th>Fecha de nacimiento</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($family_members as $family_member)
                                <tr>
                                    <td>{{$family_member->person->name}} {{$family_member->person->first_surname}} {{$family_member->person->second_surname}}</td>
                                    <td>@if($family_member->person->document_type==1)
                                            D.N.I.
                                        @elseif($family_member->person->document_type==2)
                                            Pasaporte
                                        @elseif($family_member->person->document_type==3)
                                            Carnet de extranjeria
                                        @elseif($family_member->person->document_type==4)
                                            Otro documento
                                        @endif: {{$family_member->person->document_number}}</td>
                                    <td>{{$family_member->person->birthday}}</td>
                                    <td>
                                        <a href="" class="btn btn-primary btn-sm">Editar</a>
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
