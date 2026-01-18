<h1>{{ $planet->name }}</h1>
<p>Solar System: {{ $planet->solarSystem->name ?? 'Unknown' }}</p>
<p>Description: {{ $planet->description }}</p>
<p>Size: {{ $planet->size_in_km }} km</p>
