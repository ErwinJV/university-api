@extends('../layouts/frontend')

@section('content')

<h1>Registro</h1>

<x-flash />

<form action="{{route('acceso_registro_post')}}" method="post">
    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input class="form-control" type="text" name="nombre" class="form-control" value="{{old('nombre')}}">
    </div>
    <div class="form-group">
        <label for="correo">Correo</label>
        <input class="form-control" type="text" name="correo" class="form-control" value="{{old('correo')}}">
    </div>
    <div class="form-group">
        <label for="telefono">Telefono</label>
        <input class="form-control" type="text" name="telefono" class="form-control" value="{{old('telefono')}}">
    </div>
    <div class="form-group">
        <label for="direccion">Direccion</label>
        <input class="form-control" type="text" name="direccion" class="form-control" value="{{old('direccion')}}">
    </div>
    <div class="form-group">
        <label for="password">Contrasena</label>
        <input class="form-control" type="password" name="password" class="form-control" value="{{old('password')}}">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Repetir contrasena</label>
        <input class="form-control" type="password" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}">
    </div>
    <hr>
    {{csrf_field('field')}}
    <input type="submit" value="Enviar" class="btn btn-primary" />
</form>
    
@endsection