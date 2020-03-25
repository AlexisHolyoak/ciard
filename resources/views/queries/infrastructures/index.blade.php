@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Reportes de infraestructuras
                    </div>
                    <div class="card-body">
                        <form action="{{route('queries.disasters.search')}}" method="post">
                            @csrf
                            Aqui podras consultar información general y especifica de las infraestructuras, para comenzar selecciona la ubicación de la(s) infraestructura(s). Si deseas consultar masivamente por departamento, provincia, distrito, zona o espacio urbano selecciona uno de los checks según corresponda automaticamente podras consultar según tu selección.
                            <br>
                            Ejemplo: Si selecciona el check de departamento, inmediatamente seleccionara todos los departamentos del pais. Si selecciona el check de provincia inmediatamente seleccionara todas las provincias del departamento que escogio previamente, y asi.
                            <h6>Ubicación de las infraestructuras:</h6>
                            <div class="form-group row" align="center">
                                <label for="department" class="col-md-4 col-form-label text-md-right">Departamento</label>
                                <div class="input-group col-md-6">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" class="chb" aria-label="Checkbox para seleccionar todos los departamentos" id="allDepartments" name="selection[]" value="allDepartments">
                                        </div>
                                    </div>
                                    <select class="custom-select"  name="department" id="department"></select>
                                </div>
                                <small class="text-danger">{{$errors->first('department')}}</small>
                            </div>
                            <div class="form-group row" align="center">
                                <label for="province" class="col-md-4 col-form-label text-md-right">Provincia</label>
                                <div class="input-group col-md-6">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" class="chb" disabled aria-label="Checkbox para seleccionar todas las provincias" id="allProvinces" name="selection[]" value="allProvinces">
                                        </div>
                                    </div>
                                    <select class="custom-select"  name="province" id="province" disabled >
                                    </select>
                                </div>
                                <small class="text-danger">{{$errors->first('province')}}</small>
                            </div>
                            <div class="form-group row" align="center">
                                <label for="district_id" class="col-md-4 col-form-label text-md-right">Distrito</label>
                                <div class="input-group col-md-6">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" class="chb" disabled aria-label="Checkbox para seleccionar todos los distritos" id="allDistricts" name="selection[]" value="allDistricts">
                                        </div>
                                    </div>
                                    <select class="custom-select"  name="district_id" id="district_id" disabled required>
                                    </select>
                                </div>
                                <small class="text-danger">{{$errors->first('district_id')}}</small>
                            </div>
                            <div class="form-group row" align="center">
                                <label for="zone" class="col-md-4 col-form-label text-md-right">Zona</label>
                                <div class="input-group col-md-6">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" class="chb" disabled aria-label="Checkbox para seleccionar todas las zonas" id="allZones" name="selection[]" value="allZones">
                                        </div>
                                    </div>
                                    <select class="custom-select"  name="zone" id="zone" disabled >
                                    </select>
                                </div>
                                <small class="text-danger">{{$errors->first('zone')}}</small>
                            </div>
                            <div class="form-group row" align="center">
                                <label for="urbanspace" class="col-md-4 col-form-label text-md-right">Espacios urbanos</label>
                                <div class="input-group col-md-6">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <input type="checkbox" class="chb" disabled aria-label="Checkbox para seleccionar todos los espacios urbano" id="allUrbanSpaces" name="selection[]" value="allUrbanSpaces">
                                        </div>
                                    </div>
                                    <select class="custom-select"  name="urbanspace" id="urbanspace" disabled>
                                    </select>
                                </div>
                                <small class="text-danger">{{$errors->first('urbanspace')}}</small>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Buscar
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(".chb").change(function() {
            $(".chb").not(this).prop('checked', false);
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
            $('#allProvinces').prop('disabled',false);
            $('#district_id').prop('disabled', true);
            $('#zone').prop('disabled', true);
            $('#urbanspace').prop('disabled', true);
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
            $('#allDistricts').prop('disabled',false);
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
            $('#allZones').prop('disabled',false);
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
            $('#allUrbanSpaces').prop('disabled',false);
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
