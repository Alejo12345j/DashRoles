@extends('layouts.app')

@section('content')
    <section class="section">
        <div class="section-header">
            <h3 class="page__heading">Editar estudiantes</h3>
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


                    <form action="{{ route('estudiantes.update',$estudiante->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                   <label for="nombreC">Nombre del estudiante</label>
                                   <input type="text" name="nombreC" class="form-control" value="{{ $estudiante->nombreC }}">
                                </div>
                                <div class="form-group">
                                   <label for="noCuenta">No. de cuenta</label>
                                   <input type="text" name="noCuenta" class="form-control" value="{{ $estudiante->noCuenta }}">
                                </div>
                                <div class="form-group">
                                   <label for="grado">Grado</label>
                                   <input type="text" name="grado" class="form-control" value="{{ $estudiante->grado }}">
                                </div>
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