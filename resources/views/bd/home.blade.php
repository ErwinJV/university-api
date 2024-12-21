@extends('../layouts/frontend')

@section('content')
    <h1>BD MySQL</h1>
    <ul >
        <a href="{{route('bd_categorias')}}">
            Categorias
        </a>
    <br/>
        <a href="{{route('bd_productos')}}">
            Productos
        </a>
        <br/>
        <a href="{{route('bd_productos_paginacion')}}">
            Paginacion
        </a>
        <br/>
        <a href="{{route('bd_productos_buscador')}}">
            Busqueda
        </a>
    </ul>
@endsection