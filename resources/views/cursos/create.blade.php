@extends('layouts.plantilla')
@section('title', 'Cursos Create')
@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <form action="{{route('cursos.store')}}" method="post">
        @csrf
        <label for="name">
            Nombre
            <input type="text" name="name" value="{{old('name')}}">
        </label>
        @error('name')
            <br />
            <small>*{{$message}}</small>    
            <br />
        @enderror
        <br/>
        <label for="descripcion">
            Descripcion
            <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
        </label>
        @error('descripcion')
            <br />
            <small>*{{$message}}</small>    
            <br />
        @enderror
        <br/>
        <label for="categoria">
            Categoria
            <input type="text" name="categoria" value="{{old('categoria')}}">
        </label>
        @error('categoria')
            <br />
            <small>*{{$message}}</small>    
            <br />
        @enderror
        <br/>
        <input type="submit" value="enviar formulario">
    </form>
@endsection