@php
    $comics = config('comics.comics');
@endphp

@foreach ($comics as $comic)
    <div>
        <img src="{{ $comic['thumb'] }}" alt="Fumetto">
        <h3>{{ $comic['series'] }}</h3>
    </div>
@endforeach
