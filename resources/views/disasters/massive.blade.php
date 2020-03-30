@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Registrar nuevo desastre
                    </div>
                    <div class="card-body">
                        <form action="{{route('disasters.massive.store')}}" method="post">
                            @csrf
                            <div class="form-group row" align="center">
                                <label for="danger" class="col-md-4 col-form-label text-md-right">Peligro</label>
                                <select id="danger" name="danger" class="form-control col-md-6" required></select>
                                <small class="text-danger">{{$errors->first('danger')}}</small>
                            </div>
                            <div class="form-group row" align="center">
                                <label for="danger_type" class="col-md-4 col-form-label text-md-right">Tipo de peligro</label>
                                <select id="danger_type" name="danger_type" class="form-control col-md-6" disabled required></select>
                                <small class="text-danger">{{$errors->first('danger_type')}}</small>
                            </div>
                            <div class="form-group row" align="center">
                                <label for="date_time_disaster" class="col-md-4 col-form-label text-md-right">Fecha y hora del desastre</label>
                                <input name="date_time_disaster" type="datetime-local" class="form-control col-md-6">
                            </div>
                            <hr>
                            <h6>Lugar del desastre:</h6>
                            <div class="form-group row" align="center">
                                <label for="department" class="col-md-4 col-form-label text-md-right">Departamento</label>
                                <select id="department" name="department" class="form-control col-md-6" required></select>
                                <small class="text-danger">{{$errors->first('department')}}</small>
                            </div>
                            <div class="form-group row" align="center">
                                <label for="province" class="col-md-4 col-form-label text-md-right">Provincia</label>
                                <select id="province" name="province" class="form-control col-md-6" disabled required></select>
                                <small class="text-danger">{{$errors->first('province')}}</small>
                            </div>
                            <div class="form-group row" align="center">
                                <label for="district_id" class="col-md-4 col-form-label text-md-right">Distrito</label>
                                <select id="district_id" name="district_id" class="form-control col-md-6" disabled required></select>
                                <small class="text-danger">{{$errors->first('district_id')}}</small>
                            </div>
                            <div class="form-group row" align="center">
                                <label for="zone" class="col-md-4 col-form-label text-md-right">Zona</label>
                                <select id="zone" name="zone[]" class="form-control col-md-6" disabled required></select>
                                <small class="text-danger">{{$errors->first('zone')}}</small>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registrar
                                    </button>
                                    <a href="{{route('disasters.index')}}" class="btn btn-secondary">Atras</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('style')
    <link href="{{asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('script')
    <script src="{{asset('js/bootstrap-select.min.js') }}" ></script>
    <script>
        //$('.selectpicker').selectpicker('mobile', true);
    </script>
    <script>
        $(document).ready(function(){
            $.get('/ajax-dangers/', function(data){
                $('#danger').append('<option value="0" disabled selected>Seleccione peligro...</option>');
                $.each(data, function(index, o){
                    $('#danger').append('<option value="'+o.id+'">'+o.name+'</option>');
                });
            });
        });
        $('#danger').change(function(e){
            var id=e.target.value;
            $('#danger_type').prop('disabled', false);
            $('#danger_type').prop('required', true);
            $.get('/ajax-danger-type/'+id, function(data){
                $('#danger_type').empty();
                $('#danger_type').append('<option value="0" disabled selected>Seleccione tipo de peligro...</option>');
                $.each(data, function(index, o){
                    $('#danger_type').append('<option value="'+o.id+'">'+o.name+'</option>');
                });
            });
        });
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
                $('#province').empty();$('#district_id').empty();$('#zone').empty();$('#urbanspace').empty();
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
                $('#district_id').empty();$('#zone').empty();$('#urbanspace').empty();
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
                $('#zone').empty();$('#urbanspace').empty();
                $('#zone').append('<option value="0" disabled selected>Seleccione zona...</option>');
                $.each(data, function(index, o){
                    $('#zone').append('<option value="'+o.id+'">'+o.type+' '+o.name+'</option>');
                });
                $('#zone').prop('multiple', true);
                $('#zone').selectpicker({
                    mobile :true,
                    actionsBox: true,
                    multiple: true
                });
            });
        });
    </script>
@endsection
