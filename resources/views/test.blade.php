@for ($i = 0; $i < $count; $i++)
    //statement
@endfor

@foreach ($collection as $item)
    //statement
@endforeach

@forelse ($collection as $item)
    //statement
@empty
    //statement
@endforelse

@php
    $i = 0;
@endphp
@while ($i < 5)
    //statement
    @php
     $i++;   
    @endphp
@endwhile

@if ($i == 1)
    //statement
@endif

@if ($i == 1)
    //statement
@else
    //statement    
@endif

@if ($i == 1)
    //statement
@elseif($i == 2)
    //statement
@else
    //statement
@endif

@switch($type)
    @case(1)
        //statement
        @break
    @case(2)
        //statement
        @break
    @default
        //statement
@endswitch

