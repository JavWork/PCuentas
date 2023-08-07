@extends('layouts.plantilla')

@section('title', 'Cursos')

@section('content')
    <h1>Bienvenido a la Pagina Cursos</h1>
    <a href="{{ route('cursos.create') }}">Crear Curso</a>
    <ul>
        @foreach ($cursos as $course)
            <li>
                <a href="{{ route('cursos.show', $course) }}"> {{ $course->name }}</a>
                <br>

            </li>
        @endforeach
    </ul>
    {{ $cursos->links() }}

@endsection
