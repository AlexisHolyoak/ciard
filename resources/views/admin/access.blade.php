@extends('admin.layout')
@section('admin')
<div class="col-md-4">
<div class="card">
  <div class="card-header">
    Nuevo rol
  </div>
  <div class="card-body">
      @if(Auth::user()->hasPermission(['crear-roles']))
    <form role="form" action="{{ route('admin.access.store')}}" method="post">
    {{ csrf_field() }}
        <div class="form-group">
            <label for="name">Abreviación del rol</label>
            <input type="text" class="form-control" name="name"  >
            <small id="name" class="form-text text-muted">Un pequeño nombre identificador del rol.</small>
        </div>
        <div class="form-group">
            <label for="display_name">Nombre a mostrar</label>
            <input type="text" class="form-control" name="display_name">
        </div>
        <div class="form-group">
            <label for="permissions">Permisos</label>
            <select class="form-control selectpicker " name="permission_id[]" multiple>
                @foreach($permissions as $permission)
                <option value="{{$permission->id}}">{{$permission->display_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descripción</label>
            <textarea type="text" class="form-control" name="description"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>
      @else
      NO TIENES PERMISOS DE CREACIÓN DE ROLES
      @endif
  </div>
</div>
</div>
<div class="col-md-8">
<div class="card">
    <div class="card-header">
    Lista de roles
    </div>
    <div class="card-body">
        @if(Auth::user()->hasPermission(['visualizar-roles']))
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
                <tr>
                    <th>Rol</th>
                    <th class="none">Permisos</th>
                    <th>Acciones</th>
                </tr>
        </thead>
        <tbody>
        @foreach($roles as $rol)
                <tr>
                    <td data-priority="1" >{{$rol->display_name}}</td>
                    <td data-priority="3"  >
                        @foreach($rol->permissions as $permission)
                        {{$permission->display_name}},
                        @endforeach
                    </td>
                    <td data-priority="2" width="1%" style="text-align: center;">
                        @if(Auth::user()->hasPermission('actualizar-roles'))
                        <a href="{{route('admin.access.edit',$rol)}}" class="btn btn-primary btn-sm">Editar</a>
                        @endif
                    </td>
                </tr>
        @endforeach
        </tbody>
    </table>
        @else
            NO TIENES PERMISO DE VISUALIZACIÓN DE ROLES
        @endif
    </div>
</div>
</div>

@endsection
@section('style')
<link href="{{asset('css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/responsive.dataTables.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{asset('css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
<style>
    #example{
        display:none
    }
</style>
@endsection
@section('script')
<script src="{{asset('js/bootstrap-select.min.js') }}" ></script>
<script src="{{asset('js/jquery.dataTables.min.js') }}" ></script>
<script src="{{asset('js/dataTables.responsive.min.js') }}" ></script>
<script src="{{asset('js/dataTables.bootstrap4.min.js') }}" ></script>
<script>
$(document).ready(function() {
    $('#example').fadeIn();
    $('#example').DataTable({
        responsive: true
    });
} );
</script>
@endsection
