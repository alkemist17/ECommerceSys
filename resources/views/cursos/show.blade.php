@extends('layouts.plantilla')
@section('title', 'Cursos '.$curso->name)
@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Regresar</a>
    <br />
    <br />
    <a href="{{route('cursos.edit', $curso)}}">Editar</a>
    <br />
    <br />
    <strong>Categoria:</strong> {{$curso->categoria}}
    <p>{{$curso->descripcion}}</p>
@endsection