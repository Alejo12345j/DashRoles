<li class="side-menus {{ Request::is('home') ? 'active' : '' }}">
    <a class="nav-link" href="{{route('home')}}">
        <i class=" fas fa-building"></i><span>Dashboard</span>
    </a>
    <a class="nav-link" href="{{route('usuarios.index')}}">
        <i class=" fas fa-users"></i><span>Usuarios</span>
    </a>
    <a class="nav-link" href="{{route('roles.index')}}">
        <i class=" fas fa-user-lock"></i><span>Roles</span>
    </a>
    <a class="nav-link" href="{{route('blogs.index')}}">
        <i class=" fas fa-blog"></i><span>Blogs</span>
    </a>
    <a class="nav-link" href="{{route('equipos.index')}}">
        <i class=" fas fa-boxes"></i><span>Equipos</span>
    </a>
    <a class="nav-link" href="{{route('estudiantes.index')}}">
        <i class=" fas fa-graduation-cap"></i><span>Estudiantes</span>
    </a>
</li>
