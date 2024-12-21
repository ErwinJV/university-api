@extends('../layouts/frontend')

@section('content')

<h1>Utiles</h1>

<ul>
    <li><a href="{{route('utiles_pdf')}}">Reporte PDF</a></li>
    <li><a href="{{route('utiles_excel')}}">Reporte Excel</a></li>
    <li><a href="{{route('utiles_cliente_rest')}}">Cliente Rest con guzzlehttp</a></li>
    <li><a href="">Cliente SOAP</a></li>
</ul>
    
@endsection