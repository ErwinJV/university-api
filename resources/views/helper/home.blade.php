@extends('../layouts/frontend')

@section('content')
     <h1>Helpers</h1>
     <h3>Helper de Laravel</h3>
     {{Str::slug("mi muneca me hablo")}}
     <hr>
     <h3>Custom Helper</h3>
     {{ $version }}
     <br>
     {{$nombre}}
@endsection