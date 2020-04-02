@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-4">
            @if($disasters->count() > 0)
                <div class="col-md-12">
                    <div class="list-group ">
                        @foreach($disasters as $disaster)
                            <a href="{{route('forms.post.infrastructure',['disaster'=>$disaster, 'urbanspace'=>$disaster->urbanspace])}}" class="list-group-item list-group-item-action" {{($disaster->evaluated==1)?'hidden':''}}>
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">{{$disaster->urbanspace->zone->district->nombre}} {{$disaster->urbanspace->zone->name}} {{$disaster->urbanspace->type}} {{$disaster->urbanspace->name}}</h5>
                                    <small>Fecha del desastre: {{$disaster->date_time_disaster}}</small>
                                </div>
                                <p class="mb-1">
                                    Peligro: {{$disaster->disastertype->danger->name}}
                                    <br>
                                    Especificación del peligro: {{$disaster->disastertype->name}}
                                    <br>
                                    @if($disaster->evaluated==1)
                                        EVAUACIÓN COMPLETADA
                                    @endif
                                </p>
                                <small class="text-muted">Cantidad de infraestructuras: {{$infrastructures->where('urban_space_id',$disaster->urbanspace->id)->count()}}</small>
                            </a>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            No hay ningun desastre registrado en tus espacios asignados.
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
@section('script')
    <script src="{{asset('js/paginathing.js') }}" ></script>
    <script>
        $('.list-group').paginathing({
            perPage: 5,

            containerClass: 'col-md-12 mt-4',
            ulClass: 'pagination flex-wrap justify-content-center',
            pageNumbers: true
        })
    </script>
@endsection
