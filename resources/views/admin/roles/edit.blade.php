@extends('admin.layout')
@section('admin')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                Nuevo rol
            </div>
            <div class="card-body">
                <form role="form" action="{{ route('admin.access.update',$role)}}" method="post">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Abreviación del rol</label>
                        <input type="text" class="form-control" name="name"  value="{{$role->name}}" required>
                        <small id="name" class="form-text text-muted">Un pequeño nombre identificador del rol.</small>
                    </div>
                    <div class="form-group">
                        <label for="display_name">Nombre a mostrar</label>
                        <input type="text" class="form-control" name="display_name" value="{{$role->display_name}}" required>
                    </div>
                    <div class="form-group">
                        <label for="permissions">Permisos</label>
                        <select class="form-control selectpicker " name="permission_id[]" multiple required mobile >
                            @foreach($permissions as $permission)
                                <option  value="{{$permission->id}}">{{$permission->display_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción</label>
                        <textarea type="text" class="form-control" name="description" required>{{$role->description}}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{route('admin.index')}}" class="btn btn-secondary">Cancelar</a>
                </form>
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

        $('.selectpicker').selectpicker('val', {{$permissions_selected_id}});
    </script>
@endsection
