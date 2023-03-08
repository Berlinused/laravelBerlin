Index students

<a href="{{route('excel')}}">到excel</a>


@php
    
@endphp

@foreach ($data as $item)
    <p>
        {{$item['name']}} + {{$item['price']}}
    </p>
@endforeach

<div>
</div>