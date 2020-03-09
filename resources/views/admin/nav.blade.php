<div class="col-md-12">
    <nav class="nav nav-pills flex-column flex-sm-row bg-white">
        <a class="flex-sm-fill text-sm-center nav-link {{ Request::segment('2')=='access' ? 'active' : '' }}" href="{{route('admin.index')}}">Roles y permisos</a>
        <a class="flex-sm-fill text-sm-center nav-link {{ Request::segment('2')=='users' ? 'active' : '' }}" href="{{route('admin.user.index')}}">Usuarios</a>
        <a class="flex-sm-fill text-sm-center nav-link {{ Request::segment('2')=='evaluators' ? 'active' : '' }}" href="{{route('admin.evaluators.index')}}">Evaluadores</a>
        <a class="flex-sm-fill text-sm-center nav-link {{ Request::segment('2')=='location' ? 'active' : '' }}" href="{{route('admin.location.index')}}" >Ubigeo</a>
    </nav>
</div>
