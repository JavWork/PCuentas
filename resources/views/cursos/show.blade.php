@extends('layouts.plantilla')

@section('title', 'Curso ' . $curso->name)

@section('content')
    <h1>Ha ingresado al curso de {{ $curso->name }} </h1>
    <a href="{{ route('cursos.index') }}">Volver a Cursos</a>
    <br>
    <a href="{{ route('cursos.edit', $curso) }}">Editar Curso</a>
    <p>
        <strong>Categoria: </strong>{{ $curso->categoria }}
    </p>
    <p>
        {{ $curso->descripcion }}
    </p>
@endsection
