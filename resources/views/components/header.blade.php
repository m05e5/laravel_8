<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h1>this is header component</h1>
    <h3>halloà {{$name}}</h3>
    <h3>fruits are:</h3>
    <ul>
        @foreach ($fruits as $fruit)
        <li>{{$fruit}}</li>

        @endforeach
    </ul>
</div>