@extends('../layouts/frontend')

@section('content')
    <h1>Edit Producto</h1>
    <x-flash />
    <form action="{{route('bd_productos_edit_post',['id'=>$producto->id])}}" method="POST">

      <div class="form-group">
        <label for="categoria">
            Categoria
        </label>
        <select name="categoria" id="categoria" class="form-control"  >

          @foreach ($categorias as $categoria)
              <option value="{{$categoria->id}}" {{$categoria->id === $producto->categorias_id ? "selected" : ""}}>{{ucfirst($categoria->slug)}}</option>
          @endforeach
        </select>

      </div>
      <div class="form-group">
        <label for="nombre">
            Nombre:
        </label>
        <input type="text" name="nombre" id="nombre" class="form-control" value="{{$producto->nombre}}" />

      </div>
      <div class="form-group">
        <label for="precio">
            Precio
        </label>
        <input type="number" name="precio" id="precio" class="form-control" value="{{$producto->precio}}" />

      </div>
      <div class="form-group">
        <label for="stock">
            Stock:
        </label>
        <input type="number" name="stock" id="stock" class="form-control" value="{{$producto->stock}}" />

      </div>
      <div class="form-group">
        <label for="descripcion">
            Descripcion
        </label>
        <textarea name="descripcion" id="descripcion" class="form-control" >
          {{$producto->descripcion}}
        </textarea>

      </div>
    
      <div class="form-group">
        <label for="fotos">
            Fotos:
        </label>
        <input type="file" name="fotos" id="fotos" class="form-control" value="{{old('fotos')}}"" />

      </div>
   
      <br/>
      {{@csrf_field()}}
      <input type="submit" value="Enviar" class="btn btn-primary" / >
    </form>
@endsection