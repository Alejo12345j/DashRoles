@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Equipos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-equipo')
                        <a class="btn btn-warning" href="{{ route('equipos.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre del equipo</th>
                                    <th style="color:#fff;">Tipo</th>                                    
                                    <th style="color:#fff;">Marca</th>                                    
                                    <th style="color:#fff;">Descripcion del equipo</th>                                    
                                    <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($equipos as $equipo)
                            <tr>
                                <td style="display: none;">{{ $equipo->id }}</td>                                
                                <td>{{ $equipo->nombreEquipo}}</td>
                                <td>{{ $equipo->tipo }}</td>
                                <td>{{ $equipo->marca }}</td>
                                <td>{{ $equipo->descripcionEquipo }}</td>
                                <td>
                                    <form action="{{ route('equipos.destroy',$equipo->id) }}" method="POST">                                        
                                        @can('editar-equipo')
                                        <a class="btn btn-info" href="{{ route('equipos.edit',$equipo->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-equipo')
                                        <button type="submit" class="btn btn-danger">Borrar</button>
                                        @endcan
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection