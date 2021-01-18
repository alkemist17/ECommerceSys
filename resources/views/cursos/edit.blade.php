@extends('layouts.plantilla')
@section('title', 'Cursos Edit')
@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    <form action="{{route('cursos.update', $curso)}}" method="post">
        @csrf

        @method('put')

        <label for="name">
            Nombre
            <br/>
        <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        @error('name')
            <br />
            <small>*{{$message}}</small>    
            <br />
        @enderror
        <br/>
        <label for="descripcion">
            Descripcion
            <br/>
            <textarea name="descripcion" rows="5">{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br />
            <small>*{{$message}}</small>    
            <br />
        @enderror
        <br/>
        <label for="categoria">
            Categoria
            <br/>
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
            <br />
            <small>*{{$message}}</small>    
            <br />
        @enderror
        <br/>
        <input type="submit" value="Actualizar formulario">
    </form>
@endsection