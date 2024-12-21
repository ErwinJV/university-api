@extends('../layouts/frontend')

@section('content')
     <h1>Upload</h1>
     <x-flash />
     <form action="{{route('form_upload')}}" method="POST" name="form" enctype="multipart/form-data">
        <div class="form-group">
          <label for="foto">Archivo</label>
          <input type="file" name="foto" id="foto" class="form-control"  />
        </div>

        {{@csrf_field()}}
        <input type="submit" value="Enviar" class="btn btn-success" />
     </form>
@endsection