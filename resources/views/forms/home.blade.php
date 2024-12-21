@extends('../layouts/frontend')

@section('content')
    <h1>Formularios</h1>

    <ul>
        <li>
            <a href="{{route('form_simple')}}">Simple</a>
        </li>
        <li>
            <a href="">Flash</a>
        </li>
        <li>
            <a href="{{route('form_upload')}}">Upload</a>
        </li>
    </ul>
@endsection
