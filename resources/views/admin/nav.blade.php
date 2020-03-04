<div class="col-md-12">
    <nav class="nav nav-pills flex-column flex-sm-row bg-white">
        <a class="flex-sm-fill text-sm-center nav-link {{ Request::segment('2')=='access' ? 'active' : '' }}" href="#">Roles y permisos</a>
        <a class="flex-sm-fill text-sm-center nav-link {{ Request::segment('2')=='users' ? 'active' : '' }}" href="#">Usuarios</a>
        <a class="flex-sm-fill text-sm-center nav-link {{ Request::segment('2')=='evaluators' ? 'active' : '' }}" href="#">Evaluadores</a>
        <a class="flex-sm-fill text-sm-center nav-link {{ Request::segment('2')=='localization' ? 'active' : '' }}" href="#" >Ubigeo</a>
    </nav>
</div>
