@extends('welcome')

@section('titulo', 'Ver Estudiantes')

@section('contenido')
    <h1 class="my-3">INDEX de Estudiantes</h1>
    <br>
    <a href="estudiantes/create" class="btn btn-primary">Crear</a>
    <table class="table mt-3">
        <thead class="table-dark">
            <tr>
            <th class="text-light" scope="col">ID</th>
            <th class="text-light" scope="col">MATRICULA</th>
            <th class="text-light" scope="col">NOMBRE</th>
            <th class="text-light" scope="col">APELLIDO PATERNO</th>
            <th class="text-light" scope="col">APELLIDO MATERNO</th>
            <th class="text-light" scope="col">CORREO</th>
            <th class="text-light" scope="col">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{$estudiante->id}}</td>
                    <td>{{$estudiante->matricula}}</td>
                    <td>{{$estudiante->nombre}}</td>
                    <td>{{$estudiante->apellidopaterno}}</td>
                    <td>{{$estudiante->apellidomaterno}}</td>
                    <td>{{$estudiante->correo}}</td>
                    <td>
                        <form action="{{route ('estudiantes.destroy',$estudiante->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <a href="/estudiantes/{{$estudiante->id}}/edit" class="btn btn-warning">Editar</a>
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
