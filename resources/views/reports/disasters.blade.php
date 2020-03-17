@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Editar desastre: {{$disaster->disastertype->name}} {{$disaster->urbanspace->zone->district->nombre}} "{{$disaster->urbanspace->zone->name}}" {{$disaster->urbanspace->type}} "{{$disaster->urbanspace->name}}" fecha: {{$disaster->date_time_disaster}}
                    </div>
                    <div class="card-body">
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
                        <h5>Información de habitantes evaluados</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
