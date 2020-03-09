@extends('admin.layout')
@section('admin')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Editar espacios urbanos del evaluador: {{$person->name}} {{$person->first_surname}} {{$person->second_surname}}
            </div>
            <div class="card-body">
                <div class="row">
                    <h5 class="col-md-8">Selecciona la ubicación del evaluador que desea asignarle</h5>
                    <div class="col-md-4">
                        <a href="{{route('admin.evaluators.index')}}" class="btn btn-secondary float-right btn-sm">Atras</a>
                    </div>


                </div>
                <form action="{{route('admin.evaluators.update',$person)}}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-2" align="center">
                            <label for="department">Departamento</label>
                            <select id="department" name="department" class="form-control" required></select>
                            <small class="text-danger">{{$errors->first('department')}}</small>
                        </div>
                        <div class="form-group col-md-2" align="center">
                            <label for="province">Provincia</label>
                            <select id="province" name="province" class="form-control" disabled required></select>
                            <small class="text-danger">{{$errors->first('province')}}</small>
                        </div>
                        <div class="form-group col-md-2" align="center">
                            <label for="district_id">Distrito</label>
                            <select id="district_id" name="district_id" class="form-control" disabled required></select>
                            <small class="text-danger">{{$errors->first('district_id')}}</small>
                        </div>
                        <div class="form-group col-md-2" align="center">
                            <label for="zone">Zona</label>
                            <select id="zone" name="zone" class="form-control" disabled required></select>
                            <small class="text-danger">{{$errors->first('zone')}}</small>
                        </div>
                        <div class="form-group col-md-2" align="center">
                            <label for="urbanspace">Espacio urbano</label>
                            <select id="urbanspace" name="urbanspace" class="form-control" disabled required></select>
                            <small class="text-danger">{{$errors->first('urbanspace')}}</small>
                        </div>
                        <div class="form-group col-md-2"  align="center">
                            <label>&nbsp;</label>
                            <button type="submit" class="form-control btn btn-primary btn-block">Asignar</button>
                        </div>
                    </div>
                </form>

                <hr>
                <h5>Espacios urbanos asignados</h5>
                <table class="table table-bordered" id="evaluators_table" style="width: 100%">
                    <thead>
                    <tr>
                        <th>Distrito</th>
                        <th>Zona</th>
                        <th>Espacio urbano</th>
                        <th style="width: 1%">Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(!empty($person->evaluator))
                    @foreach($person->evaluator->urbanspaces as $urbanspace)
                        <tr>
                            <td>{{$urbanspace->zone->district->nombre}}</td>
                            <td>{{$urbanspace->zone->type}} {{$urbanspace->zone->name}}</td>
                            <td>{{$urbanspace->type}} {{$urbanspace->name}}</td>
                            <td>
                                <form action="{{route('admin.evaluators.delete',['person'=>$person, 'urbanspace'=> $urbanspace])}}" method="post">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    @csrf
                                    <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">
                                </form>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                        @endif
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
        #evaluators_table{
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
            $('#evaluators_table').fadeIn();
            $('#evaluators_table').DataTable({
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
                $('#province').empty();$('#district_id').empty();
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
        $('#district_id').change(function(e){
            var id=e.target.value;
            $('#zone').prop('disabled', false);
            $('#zone').prop('required', true);
            $.get('/ajax-zones/'+id, function(data){
                $('#zone').empty();
                $('#zone').append('<option value="0" disabled selected>Seleccione zona...</option>');
                $.each(data, function(index, o){
                    $('#zone').append('<option value="'+o.id+'">'+o.type+' '+o.name+'</option>');
                });
            });
        });
        $('#zone').change(function(e){
            var id=e.target.value;
            $('#urbanspace').prop('disabled', false);
            $('#urbanspace').prop('required', true);
            $.get('/ajax-urbanspace/'+id, function(data){
                $('#urbanspace').empty();
                $('#urbanspace').append('<option value="0" disabled selected>Seleccione espacio urbano...</option>');
                $.each(data, function(index, o){
                    $('#urbanspace').append('<option value="'+o.id+'">'+o.type+' '+o.name+'</option>');
                });
            });
        });
    </script>
@endsection
