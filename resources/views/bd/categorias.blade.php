@extends('../layouts/frontend')

@section('content')
    <h1>BD MySQL</h1>
    <x-flash />

    <p class="d-flex justify-content-end">
       <a href="{{route('bd_categorias_add')}}" class="btn btn-success">
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
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datos as $dato)
                    <tr>
                        <td>{{$dato->id}}</td>
                        <td>{{$dato->slug}}</td>
                        <td>
                            <a href="{{route('bd_categorias_edit',['id'=>$dato->id])}}">
                                <i class="fas fa-edit"></i>
                            </a>
                            <a href="javascript:void(0)" onclick="deleteCategory('{{route('bd_categorias_delete_post',['id'=>$dato->id])}}')">
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

        function deleteCategory(route){
        window.location = route
        }
     </script>
@endpush