
<h1>hola desde mi vista .blade </h1>
<hr>
<h3>Texto = {{$texto}}</h3>
<hr>
@php
   $contador = 1; 
@endphp

<h4>{{$contador}}</h4>

<hr>

<h3>Condicional 1</h3>

@if ($numero === 13)
   
<h3>Numero es 13</h3>

@else 
    <h3>Numero no es 13</h3>
    
@endif

<hr>

@switch($type)
    @case(1)
         <h3>es 1</h3>
        @break
    @case(2)
        <h3>es 2</h3>
        @break
    @default
        <h3>No es valido</h3> 

@endswitch

<hr>

<h3>Operador ternario</h3>

<h4>{{($type === 12) ? 'es 12' : 'no es 12'}}</h4>

<hr>

<h3>Ciclo for</h3>

<ul>
    @for ($i =  1; $i < 10 ; $i++)
      <li>Item: {{$i}}</li>
    @endfor
</ul>

<hr>

<h3>Recorrer un arreglo</h3>

<ul>
    @foreach ($paises as $pais )
         <li>
          {{$loop->first}} - {{$loop->last}} - {{$loop->index }}  {{$pais['nombre'] . " | " . $pais["dominio"]}}
        </li>  
    @endforeach
</ul>

<hr>    

@include('home.include')

<hr>
<h3>Componentes</h3>
<x-example :mensaje="$texto" />

<hr>

<h3>Enlaces en Blade</h3>

<ul>
    <li>
        <a href="{{route('home_inicio')}}">Inicio</a>
    </li>

    <li>
        <a href="{{route('home_hola')}}">Hola</a>
    </li>
    <li>
        <a href="{{route('home_parametros',['id'=>1,'slug'=>'my-slug' ])}}?page=3">Parametros</a>
    </li>
</ul>

<hr>
<h3>Archivos estaticos</h3>

<img src="{{asset('images/Laravel.png')}}" alt="Imagen Logo png" width=120 />
 
