@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Estudiantes</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                
            
                        @can('crear-estu')
                        <a class="btn btn-warning" href="{{ route('estudiantes.create') }}">Nuevo</a>
                        @endcan
            
                        <table class="table table-striped mt-2">
                                <thead style="background-color:#6777ef">                                     
                                    <th style="display: none;">ID</th>
                                    <th style="color:#fff;">Nombre del estudiante</th>
                                    <th style="color:#fff;">No. de cuenta</th>                                    
                                    <th style="color:#fff;">Grado</th>                                                                       
                                    <th style="color:#fff;">Acciones</th>                                                                   
                              </thead>
                              <tbody>
                            @foreach ($estudiantes as $estudiante)
                            <tr>
                                <td style="display: none;">{{ $estudiante->id }}</td>                                
                                <td>{{ $estudiante->nombreC}}</td>
                                <td>{{ $estudiante->noCuenta }}</td>
                                <td>{{ $estudiante->grado }}</td>
                                <td>
                                    <form action="{{ route('estudiantes.destroy',$estudiante->id) }}" method="POST">                                        
                                        @can('editar-estu')
                                        <a class="btn btn-info" href="{{ route('estudiantes.edit',$estudiante->id) }}">Editar</a>
                                        @endcan

                                        @csrf
                                        @method('DELETE')
                                        @can('borrar-estu')
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