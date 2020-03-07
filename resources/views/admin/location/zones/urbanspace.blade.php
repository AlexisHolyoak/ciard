@extends('admin.layout')
@section('admin')
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Registrar nuevo espacio urbano
            </div>
            <div class="card-body">
                <form action="{{route('admin.location.urbanspace.store',$zone)}}" method="post">
                    @csrf
                    <div class="form-group ">
                        <label for="type" class="col-form-label">Tipo de espacio urbano</label>
                        <select name="type" class="form-control" id="" required>
                            <option value="CALLE">CALLE</option>
                            <option value="MANZANA">MANZANA</option>
                        </select>

                        @error('type')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="name" class="col-form-label">Nombre</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required >

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                        <a href="{{route('admin.location.show.district',$zone->district)}}" class="btn btn-secondary">Atras</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Espacios urbanos de la zona: {{$zone->type}} {{$zone->name}}
            </div>
            <div class="card-body">
                <a href="{{route('admin.location.show.district',$zone->district)}}" class="btn btn-secondary mb-4 float-right">Atras</a>
                <table class="table table-striped table-bordered dt-responsive" id="urban_space_table" style="width:100%">
                    <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($urbanspaces as $urbanspace)
                    <tr>
                        <td>{{$urbanspace->type}} "{{$urbanspace->name}}"</td>
                        <td>
                            <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit-urbanspace-{{$urbanspace->id}}">Editar</a>
                            <a href="{{route('admin.location.building.index',$urbanspace)}}" class="btn btn-primary btn-sm">Construcciones</a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@foreach($urbanspaces as $urbanspace)
    @include('admin.location.zones.editurbanspace')
    @endforeach
@section('style')
    <link href="{{asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        #urban_space_table{
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
            $('#urban_space_table').fadeIn();
            $('#urban_space_table').DataTable({
                dom: 'lBfrtip',
                responsive: true,
            });
        } );
    </script>
@endsection
