@extends('layouts.plantillabase')

@section('contenido')
    <h2>Editar Registro</h2>

    <form action="/articulos/{{ $articulo->id }}" method="post">

        @method('PUT')
        @csrf
        
        <div class="mb-3">
            <label for="" class="form-label">Codigo</label>
            <input type="text" id="codigo" name="codigo" class="form-control" tabindex="1" value="{{ $articulo->codigo }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Descripcion</label>
            <input type="text" id="descripcion" name="descripcion" class="form-control" tabindex="2" value="{{ $articulo->descripcion }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Cantidad</label>
            <input type="number" id="cantidad" name="cantidad" class="form-control" tabindex="3" value="{{ $articulo->cantidad }}">
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Precio</label>
            <input type="number" id="precio" name="precio" step="any" value="0.00" class="form-control" value="{{ $articulo->precio }}">
        </div>

        <a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

    </form>
@endsection