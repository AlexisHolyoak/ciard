@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mb-4">
            @if($designations->count() > 0)
            <div class="list-group col-md-12">
                @foreach($designations as $designation)
                <a href="{{route('forms.pre.infrastructure',$designation->urbanspace)}}" class="list-group-item list-group-item-action ">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">{{$designation->urbanspace->zone->district->nombre}} {{$designation->urbanspace->zone->name}} {{$designation->urbanspace->type}} {{$designation->urbanspace->name}}</h5>
                        <small>Ultima actualización: POR DEFINIR</small>
                    </div>
                    <p class="mb-1">Cantidad de viviendas: POR DEFINIR </p>
                    <small>Estado: POR DEFINIR</small>
                </a>
                @endforeach
            </div>
                @else
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            No has sido asignado a un lugar para evaluar, contactate con tu administrador.
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
