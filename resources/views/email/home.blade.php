@extends('../layouts/frontend')

@section('content')
  <h1>E-mail</h1>
  <x-flash />
  <a href="{{route('email_enviar')}}">Enviar</a>
@endsection