@extends('../layouts/frontend')

@section('content')

<h1>Login</h1>

<x-flash />

<form action="{{route('acceso_login_post')}}" method="post">
   
    <div class="form-group">
        <label for="correo">Correo</label>
        <input class="form-control" type="text" name="correo" class="form-control" value="{{old('correo')}}">
    </div>
   
    <div class="form-group">
        <label for="password">Contrasena</label>
        <input class="form-control" type="password" name="password" class="form-control" value="{{old('password')}}">
    </div>
   
    <hr>
    {{csrf_field('field')}}
    <input type="submit" value="Enviar" class="btn btn-primary" />
</form>
    
@endsection