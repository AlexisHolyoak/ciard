@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        Detallado escala {{$scale}}, desastre tipo: {{$disaster_type->name}}; Fecha {{$date}}
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                               <p><span class="p-2 mb-2 text-white bg-primary">Personas</span></p>
                            </div>
                            <div class="col-md-12">
                                <table>
                                    <tr>
                                        <td>
                                            LESIONADO
                                        </td>
                                        <td>
                                            <a href="{{route('queries.disasters.habitants.detail',['type'=>$disaster_type->id,'date'=>$date,'scale'=>$scale,'location'=>$location,'condition'=>'LESIONADO'])}}">
                                                {{$post_families->where('personal_damage','LESIONADO')->count()}}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            DESAPARECIDO
                                        </td>
                                        <td>
                                            <a href="{{route('queries.disasters.habitants.detail',['type'=>$disaster_type->id,'date'=>$date,'scale'=>$scale,'location'=>$location,'condition'=>'DESAPARECIDO'])}}">
                                                {{$post_families->where('personal_damage','DESAPARECIDO')->count()}}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            FALLECIDO
                                        </td>
                                        <td>
                                            <a href="{{route('queries.disasters.habitants.detail',['type'=>$disaster_type->id,'date'=>$date,'scale'=>$scale,'location'=>$location,'condition'=>'FALLECIDO'])}}">
                                                {{$post_families->where('personal_damage','FALLECIDO')->count()}}
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            NINGUNO
                                        </td>
                                        <td>
                                            <a href="{{route('queries.disasters.habitants.detail',['type'=>$disaster_type->id,'date'=>$date,'scale'=>$scale,'location'=>$location,'condition'=>'NINGUNO'])}}">
                                                {{$post_families->where('personal_damage','NINGUNO')->count()}}
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-12 mt-3">
                                <p><span class="p-2 mb-2 text-white bg-primary">Infraestructuras</span></p>
                            </div>
                            <div class="col-md-12">
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                        <tr>
                                            <th></th>
                                            <th>AFECTADA</th>
                                            <th>INHABITABLE</th>
                                            <th>DESTRUIDA</th>
                                            <th>BUENA</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($infrastructure_types as $infrastructure_type)
                                            <tr>
                                                <td>{{$infrastructure_type->name}}</td>
                                                <td>
                                                    <a href="{{route('queries.disasters.infrastructures.detail',['type'=>$disaster_type->id,'date'=>$date,'scale'=>$scale,'location'=>$location,'typeinfra'=>$infrastructure_type->id,'condition'=>'AFECTADA'])}}">
                                                        {{$infrastructures_detail->where('IDTYPEINFRA',$infrastructure_type->id)->where('CONDITION','AFECTADA')->count()}}
                                                    </a>
                                                    </td>
                                                <td>
                                                    <a href="{{route('queries.disasters.infrastructures.detail',['type'=>$disaster_type->id,'date'=>$date,'scale'=>$scale,'location'=>$location,'typeinfra'=>$infrastructure_type->id,'condition'=>'INHABITABLE'])}}">
                                                        {{$infrastructures_detail->where('IDTYPEINFRA',$infrastructure_type->id)->where('CONDITION','INHABITABLE')->count()}}
                                                    </a>
                                                    </td>
                                                <td>
                                                    <a href="{{route('queries.disasters.infrastructures.detail',['type'=>$disaster_type->id,'date'=>$date,'scale'=>$scale,'location'=>$location,'typeinfra'=>$infrastructure_type->id,'condition'=>'DESTRUIDA'])}}">
                                                        {{$infrastructures_detail->where('IDTYPEINFRA',$infrastructure_type->id)->where('CONDITION','DESTRUIDA')->count()}}
                                                    </a>
                                                </td>
                                                <td>
                                                    <a href="{{route('queries.disasters.infrastructures.detail',['type'=>$disaster_type->id,'date'=>$date,'scale'=>$scale,'location'=>$location,'typeinfra'=>$infrastructure_type->id,'condition'=>'BUENA'])}}">
                                                        {{$infrastructures_detail->where('IDTYPEINFRA',$infrastructure_type->id)->where('CONDITION','BUENA')->count()}}
                                                    </a>
                                                </td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <a href="{{route('queries.disasters.index')}}" class="btn btn-secondary">Atras</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
