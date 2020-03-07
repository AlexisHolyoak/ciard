@extends('admin.layout')
@section('admin')
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                Registrar nuevo edificio
            </div>
            <div class="card-body">
                <form action="{{route('admin.location.building.store',$urbanspace)}}" method="post">
                    @csrf
                    <div class="form-group ">
                        <label for="type" class="col-form-label">Tipo de espacio urbano</label>
                        <select name="type" class="form-control" id="" required>
                            <option value="EDIFICIO">EDIFICIO</option>
                            <option value="DEPARTAMENTO">DEPARTAMENTO</option>
                            <option value="PISO">PISO</option>
                            <option value="COLEGIO">COLEGIO</option>
                            <option value="BANCO">BANCO</option>
                            <option value="MERCADO">MERCADO</option>
                            <option value="NEGOCIO">NEGOCIO</option>
                            <option value="REFUGIO">REFUGIO</option>
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
                        <a href="{{route('admin.location.urbanspace.index',$urbanspace->zone)}}" class="btn btn-secondary">Atras</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                Edificios del espacio urbano: {{$urbanspace->zone->type}} {{$urbanspace->zone->name}}
            </div>
            <div class="card-body">
                <a href="{{route('admin.location.urbanspace.index',$urbanspace->zone)}}" class="btn btn-secondary mb-4 float-right">Atras</a>
                <table class="table table-striped table-bordered dt-responsive" id="buildings_table" style="width:100%">
                    <thead>
                    <tr>
                        <th>Tipo</th>
                        <th>Nombre</th>
                        <th class="none">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($buildings as $building)
                        <tr>
                            <td>{{$building->type}}</td>
                            <td>{{$building->name}}</td>
                            <td>
                                <form action="{{route('admin.location.building.delete',$building)}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    @csrf
                                    <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link href="{{asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        #buildings_table{
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
            $('#buildings_table').fadeIn();
            $('#buildings_table').DataTable({
                dom: 'lBfrtip',
                responsive: true,
            });
        } );
    </script>
@endsection
