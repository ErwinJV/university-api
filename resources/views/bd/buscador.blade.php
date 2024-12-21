@extends('../layouts/frontend')

@section('content')
    <h1>
         Productos
         {{-- {{$datos->total()}} --}}
    </h1>
    <x-flash />
    {{-- Buscador --}}
 
   <div class="row">
    <div class="col-6"></div>
    <div class="col-6">
        <form action="{{route('bd_productos_buscador')}}" method="GET" name="form_buscador">
             <div class="input-group mb-3">
                 <input type="text"
                        class="form-control" 
                        placeholder="Buscar..." 
                        name="b"
                        id="b"
                        value="{{$b}}" 
                 />
                 <button class="btn bt-outline-secondary" 
                         type="button"
                         id="button-addon2"
                         onclick="buscador()"
                          >
                    <i class="fas fa-search"></i>
                 </button>
             </div>
        </form>
    </div>
   </div>

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
                            <a href="{{route('bd_productos_fotos',['id'=>$dato->id])}}">
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
    {{-- {{$datos->links()}} --}}
@endsection

@push('js')
<script>
    
 function buscador(){
     if(document.getElementById('b').value === 0){
        return false
     }
     window.location = `${window.location.origin}/bd/buscador?b=${document.getElementById('b').value}`
 }
</script>
@endpush