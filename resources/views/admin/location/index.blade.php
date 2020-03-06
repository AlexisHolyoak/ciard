@extends('admin.layout')
@section('admin')
    <div class="col-md-4">
    <div class="card">
        <div class="card-header">
            Filtrar zonas por distrito
        </div>
        <div class="card-body">
            <form action="{{route('admin.location.district')}}" method="post">
                @csrf
                <div class="form-group" align="center">
                    <label for="department">Departamento</label>
                    <select id="department" name="department" class="form-control" required></select>
                    <small class="text-danger">{{$errors->first('department')}}</small>
                </div>
                <div class="form-group " align="center">
                    <label for="province">Provincia</label>
                    <select id="province" name="province" class="form-control" disabled required></select>
                    <small class="text-danger">{{$errors->first('province')}}</small>
                </div>
                <div class="form-group" align="center">
                    <label for="district_id">Distrito</label>
                    <select id="district_id" name="district_id" class="form-control" disabled required></select>
                    <small class="text-danger">{{$errors->first('district_id')}}</small>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Buscar zonas</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    <div class="col-md-8">
        @yield('zone')
    </div>
@endsection
@section('script')
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
