@extends('../layouts/frontend')

@section('content')

<h1>Hola desde mi template</h1>

@if(Auth::check())
   <h1 class="text-2xl">Hola {{Auth::user()->name}} </h1>
   {{-- ({{@session('perfil')}}) --}}
@endif
    
@endsection

