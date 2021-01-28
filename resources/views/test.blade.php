<h1>test blade</h1>

@php
    $name = 'jennie';

    $fruits = array('mango', 'apple', 'pineapple', 'banana');

@endphp


<h2>{{$name}}</h2>
<h2>fruits</h2>
@foreach ($fruits as $fruit)
    <ul>
        <li>{{ $fruit }}</li>
    </ul>
@endforeach

<br>

@for ($i =1 ; $i <=10 ; $i++)
    {{ $i }} <br>
@endfor

@if (count($fruits)==1)
    Single Fruit
@elseif(count($fruits)>1)
    More than one Fruit
@else
    No Fruit
@endif