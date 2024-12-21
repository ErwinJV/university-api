@extends('../layouts/frontend')

@section('content')
    <h1>Productos</h1>
    <h3>Categoria: {{$categoria->slug}}</h3>
    <x-flash />

    <p class="d-flex justify-content-end">
       <a href="{{route('bd_productos_add')}}" class="btn btn-success">
        <i class="fas fa-check"></i>
        Crear
       </a>
    </p>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Categoria</th>
                    <th>Precio</th>
                    
                    <th>Stock</th>
                    <th>Descripcion</th>
                    <th>Fecha</th>
                    <th>Fotos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td>{{$dato->id}}</td>
                        <td>{{$dato->nombre}}</td>
                        <td>
                            <a href="{{route('bd_productos_categorias',['id'=>$dato->categorias_id])}}">{{ucfirst($dato->categorias->slug)}}</a>
                        </td>
                        <td>{{number_format($dato->precio,0,'','.')}}</td>
                        <td>{{$dato->stock}}</td>
                        <td>{{$dato->descripcion}}</td>
                        <td>{{$dato->fecha}}</td>
                        <td>
                            <a href="">
                                <i class="fas fa-camera"></i>
                            </a>
                        </td>
                       
                        <td>
                            <a href="{{route('bd_productos_edit',['id'=>$dato->id])}}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="javascript:void(0)" onclick="deleteProduct('{{route('bd_productos_delete',['id'=>$dato->id])}}')">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

@push('js')
<script>
 function deleteProduct(route){
  window.location = route
 }
</script>
@endpush