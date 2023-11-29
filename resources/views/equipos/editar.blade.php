@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar Equipos</h3>
        </div>
        <div class="section-body">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">                            
                   
                        @if ($errors->any())                                                
                            <div class="alert alert-dark alert-dismissible fade show" role="alert">
                            <strong>¡Revise los campos!</strong>                        
                                @foreach ($errors->all() as $error)                                    
                                    <span class="badge badge-danger">{{ $error }}</span>
                                @endforeach                        
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            </div>
                        @endif


                    <form action="{{ route('equipos.update',$equipo->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombreEquipo">Nombre del Equipo</label>
                                   <input type="text" name="nombreEquipo" class="form-control" value="{{ $equipo->nombreEquipo }}">
                                </div>
                                <div class="form-group">
                                   <label for="tipo">Tipo de equipo</label>
                                   <input type="text" name="tipo" class="form-control" value="{{ $equipo->tipo }}">
                                </div>
                                <div class="form-group">
                                   <label for="marca">Marca del equipo</label>
                                   <input type="text" name="marca" class="form-control" value="{{ $equipo->marca }}">
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                                    
                                <div class="form-floating">
                                <label for="descripcionEquipo">Descripcion del equipo</label>
                                <textarea class="form-control" name="descripcionEquipo" style="height: 100px">{{ $equipo->descripcionEquipo }}</textarea>                                
                                
                                </div>
                            <br>
                            <button type="submit" class="btn btn-primary">Guardar</button>                            
                        </div>
                    </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection