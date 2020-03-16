@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Evaluación post desastre de habitantes de {{$infrastructure->urbanspace->zone->district->nombre}} "{{$infrastructure->urbanspace->zone->name}}" {{$infrastructure->urbanspace->type}} {{$infrastructure->urbanspace->name}}-{{$infrastructure->number}}
                </div>
                <div class="card-body">
                    <form action="{{route('post.habitants.condition.store',$infrastructure)}}" method="post">
                        @csrf
                        <h6>Evaluación de los habitantes de la infraestructura post desastre:</h6>
                        @foreach($habitants as $habitant)
                            <hr>
                            <div class="row">
                                <div class="col-md-4 col-form-label text-md-right">
                                </div>
                                <div class="col-md-6">
                                    <strong>{{$habitant->person->name}} {{$habitant->person->first_surname}} {{$habitant->person->second_surname}}</strong>
                                    <input type="text" name="family_info_id[]" hidden value="{{$habitant->id}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-md-4 col-form-label text-md-right">Condición</label>
                                <div class="col-md-6">
                                    <select name="condition[]" class="form-control">
                                        <option value="DAMNIFICADO">DAMNIFICADO</option>
                                        <option value="AFECTADO">AFECTADO</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="personal_damage" class="col-md-4 col-form-label text-md-right">Daños personales</label>
                                <div class="col-md-6">
                                    <select name="personal_damage[]" class="form-control">
                                        <option value="NINGUNO">NINGUNO</option>
                                        <option value="LESIONADO">LESIONADO</option>
                                        <option value="DESAPARECIDO">DESAPARECIDO</option>
                                        <option value="FALLECIDO">FALLECIDO</option>
                                    </select>
                                </div>
                            </div>
                        @endforeach
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Registrar
                                </button>
                                <a href="{{route('forms.post.infrastructure',$infrastructure->urbanspace)}}" class="btn btn-secondary">Atras</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
