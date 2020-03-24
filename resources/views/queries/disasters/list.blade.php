@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Reporte de desastres a nivel {{$scale}}</h4>
                <div class="list-group">
                    @foreach($disaster_groups as $disaster_group)
                        <a href="{{route('queries.disasters.detail',['type'=>$disaster_group->first()->disaster_type_id, 'date'=>$disaster_group->first()->date_time_disaster])}}" class="list-group-item list-group-item-action">
                            <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1">
                                  Tipo de desastre:({{$disaster_type->where('id', $disaster_group->first()->disaster_type_id)->first()->code}}) {{$disaster_type->where('id', $disaster_group->first()->disaster_type_id)->first()->name}}
                              </h5>
                              <small>
                                Fecha y hora del desastre: {{$disaster_group->first()->date_time_disaster}}
                              </small>
                            </div>
                        </a>
                    @endforeach
                </div>
            </div>
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
