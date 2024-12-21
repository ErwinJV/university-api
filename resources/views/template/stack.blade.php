@extends('../layouts/frontend')

@section('content')
     <h1>Ejemplo de stack</h1>
    <img src="{{asset('images/Laravel.png')}}" alt="Laravel logo" width=240 /> 
@endsection

@push('css')
    <style>
        body{
            background-color: aquamarine;
        }
    </style>
@endpush

@push('js')
    <script>
        alert('Hola desde un push')
    </script>
@endpush