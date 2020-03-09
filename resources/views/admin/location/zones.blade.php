@extends('admin.location.index')
@section('zone')
    <div class="row">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    Zonas del distrito: {{$district->nombre}}
                </div>
                <div class="card-body">
                    <a href="{{route('admin.location.create.zone',$district)}}" class="btn btn-success btn-sm mb-4">Crear zona</a>
                    <table class="table table-bordered dt-responsive" id="zones_table" style="width: 100%">
                        <thead>
                        <tr>
                            <th>Tipo de zona</th>
                            <th>Nombre</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($zones as $zone)
                            <tr>
                                <td>{{$zone->type}}</td>
                                <td>{{$zone->name}}</td>
                                <td>
                                    <a href="#" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#edit-zone-{{$zone->id}}">Editar</a>
                                    <a href="{{route('admin.location.urbanspace.index',$zone)}}" class="btn btn-sm btn-primary">Gestionar</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@foreach($zones as $zone)
    @include('admin.location.zones.editzone')
@endforeach
@section('style')
    <link href="{{asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <style>
        #users_table{
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
            $('#zones_table').fadeIn();
            $('#zones_table').DataTable({
                dom: 'lBfrtip',
                responsive: true,
            });
        } );
    </script>
    <script>
        $(document).ready(function(){
            $.get('/ajax-departments/', function(data){
                $('#department').append('<option value="0" disabled selected>Seleccione Departamento...</option>');
                $.each(data, function(index, o){
                    $('#department').append('<option value="'+o.id+'">'+o.nombre+'</option>');
                });
            });
        });
        $('#department').change(function(e){
            var id=e.target.value;
            $('#province').prop('disabled', false);
            $('#province').prop('required', true);
            $('#district_id').prop('disabled', true);
            $.get('/ajax-provinces/'+id, function(data){
                $('#province').empty();$('#idDistrict').empty();
                $('#province').append('<option value="0" disabled selected>Seleccione Provincia...</option>');
                $.each(data, function(index, o){
                    $('#province').append('<option value="'+o.id+'">'+o.nombre+'</option>');
                });
            });
        });
        $('#province').change(function(e){
            var id=e.target.value;
            $('#district_id').prop('disabled', false);
            $('#district_id').prop('required', true);
            $.get('/ajax-districts/'+id, function(data){
                $('#district_id').empty();
                $('#district_id').append('<option value="0" disabled selected>Seleccione Distrito...</option>');
                $.each(data, function(index, o){
                    $('#district_id').append('<option value="'+o.id+'">'+o.nombre+'</option>');
                });
            });
        });
    </script>
@endsection
