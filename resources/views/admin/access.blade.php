@extends('admin.layout')
@section('admin')
<div class="col-md-4">
<div class="card">
  <div class="card-header">
    Nuevo rol
  </div>
  <div class="card-body">
    <form>
        <div class="form-group">
            <label for="exampleInputEmail1">Abreviación del rol</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">Un pequeño nombre identificador del rol.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Nombre a mostrar</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group">
            <label for="permissions">Permisos</label>
            <select class="selectpicker form-control" multiple>
                <option>Ver-Administración</option>
                <option>Editar-Administración</option>
                <option>Editar-Usuarios</option>
            </select>
        </div>       
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
  </div>
</div>
</div>
<div class="col-md-8">
<div class="card">
    <div class="card-header">
    Lista de roles
    </div>
    <div class="card-body">
    <table id="example" class="display" style="width:100%">
        <thead>
                <tr>
                    <th>Rol</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
        </thead>
        <tbody>
                <tr>
                    <td>Administrador</td>
                    <td>Ver-Usuarios, Editar-Usuarios, Crear-Usuarios</td>
                    <td><button class="btn btn-primary">Editar</button></td>
                </tr>
        </tbody>
    </table>
    </div>
</div>
</div>

@endsection
@section('style')
<link href="{{asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
@endsection
@section('script')
<script src="{{asset('js/bootstrap-select.min.js') }}" ></script>
<script src="{{asset('js/jquery.dataTables.min.js') }}" ></script>
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
@endsection