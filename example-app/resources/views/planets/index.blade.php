<h1>Planets</h1>

@foreach($planets as $planet)
    <p>
        <a href="/planets/{{ $planet->id }}">
            {{ $planet->name }}
        </a>
    </p>
@endforeach
