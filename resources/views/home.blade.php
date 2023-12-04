@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Inicio</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                          
                                <div class="row">
                                    <div class="col-md-4 col-xl-4">
                                    
                                    <div class="card bg-c-blue order-card">
                                            <div class="card-block">
                                            <h5>Usuarios</h5>                                               
                                                @php
                                                 use App\Models\User;
                                                $cant_usuarios = User::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-users f-left"></i><span>{{$cant_usuarios}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="{{route('usuarios.index')}}" class="text-white">Ver más</a></p>
                                            </div>                                            
                                        </div>                                    
                                    </div>
                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-green order-card">
                                            <div class="card-block">
                                            <h5>Roles</h5>                                               
                                                @php
                                                use Spatie\Permission\Models\Role;
                                                 $cant_roles = Role::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-user-lock f-left"></i><span>{{$cant_roles}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="{{route('roles.index')}}" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>                                                                
                                    
                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-c-pink order-card">
                                            <div class="card-block">
                                                <h5>Blogs</h5>                                               
                                                @php
                                                 use App\Models\Blog;
                                                $cant_blogs = Blog::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-blog f-left"></i><span>{{$cant_blogs}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="{{route('blogs.index')}}" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-warning  order-card">
                                            <div class="card-block">
                                                <h5>Equipos</h5>                                               
                                                @php
                                                 use App\Models\Equipo;
                                                $cant_equipos = Equipo::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-boxes f-left"></i><span>{{$cant_equipos}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="{{route('equipos.index')}}" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xl-4">
                                        <div class="card bg-dark  order-card">
                                            <div class="card-block">
                                                <h5>Estudiantes</h5>                                               
                                                @php
                                                 use App\Models\Estudiante;
                                                $cant_estudiantes = Estudiante::count();                                                
                                                @endphp
                                                <h2 class="text-right"><i class="fa fa-graduation-cap f-left"></i><span>{{$cant_estudiantes}}</span></h2>
                                                <p class="m-b-0 text-right"><a href="{{route('estudiantes.index')}}" class="text-white">Ver más</a></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
