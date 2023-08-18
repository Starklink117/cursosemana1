@extends('welcome')

@section('titulo', 'Crear Estudiantes')

@section('contenido')

<form action="/estudiantes" method="post">
    <div>
        <label for="" class="form-label">Matricula</label>
        <input type="text" name="matricula" id="matricula" class="form-control">
    </div>
    <div>
        <label for="" class="form-label">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control">
    </div>
    <div>
        <label for="" class="form-label">Apellido Paterno</label>
        <input type="text" name="apellidopaterno" id="apellidopaterno" class="form-control">
    </div>
    <div>
        <label for="" class="form-label">Apellido Materno</label>
        <input type="text" name="apellidomaterno" id="apellidomaterno" class="form-control">
    </div>
    <div>
        <label for="" class="form-label">Correo</label>
        <input type="email" name="correo" id="correo" class="form-control">
    </div>
    <a href="/estudiantes" class="btn btn-danger text-light">Cancelar</a>
    <button type="submit" class="btn btn-success">Guardar</button>
</form>


@endsection