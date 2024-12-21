@extends('../layouts/frontend')

@section('content')
    <h1>Cliente Rest</h1>
    <h2>Status:</h2>
    
    <x-list-data :datos="$datos" />

   
{{-- <ul>
    @foreach (json_decode($json) as $key => $dato )
     <li>
       <h3>{{str_replace('_',' ',ucfirst($key))}}</h3> 
          {{gettype($dato)}}
         @if (gettype($dato)=== 'array')
            <ul>
                @foreach ($dato as $key => $value)
                  @if (gettype($value === 'object'))
                      @php
                          $json_array = json_encode($value);
                          $array_data = json_decode($json_array,true); 
                      @endphp

                       @foreach ($array_data as $array_key => $array_data)
                           <li>{{$array_key}}</li>
                       @endforeach
                  @else
                      
                  @endif 
                @endforeach
            </ul>
         @else
             <li>{{gettype($value)}}</li>
         @endif
    </li>
    
      
  
    @endforeach
</ul> --}}

@endsection