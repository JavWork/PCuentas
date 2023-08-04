@extends('layouts.plantilla')

@section('title', 'Curso '.$course->name)

@section('content')
<h1>Ha ingresado al curso de {{$course->name}} </h1>
<a href="{{route('cursos.index')}}">Volver a Cursos</a>
<p>
    <strong>Categoria: </strong>{{$course->categoria}}
</p>
<p>
    {{$course->descripcion}}
</p>
@endsection

