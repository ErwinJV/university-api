<ul>
    @foreach ($datos as $key => $item)
        @if (gettype($item) === 'array')
            <li>
                <h3>{{ is_numeric($key) ? number_format($key) + 1 : $key  }}</h3>
                <x-list-data :datos="$item" />
            </li>
        @else
           <li>
            <h3>{{is_numeric($key) ? number_format($key) + 1 : $key }}</h3>
            <h4>{{$item}}</h4>
           </li>
        @endif
    @endforeach
</ul>
