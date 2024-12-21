@extends('../layouts/frontend')

@section('content')
    <h1>Editar Categoria</h1>
    <x-flash />
    <form action="{{route('bd_categorias_edit_post',['id'=>$categoria->id])}}" method="POST">
      <div class="form-group">
        <label for="slug">
            Slug:
        </label>
        <input type="text" name="slug" id="slug" class="form-control" value="{{$categoria->slug}}"" />

      </div>
      <br/>
      <input type="submit" value="Enviar" class="btn btn-primary" / >
    {{@csrf_field()}}
    </form>
@endsection