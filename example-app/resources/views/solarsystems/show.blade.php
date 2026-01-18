<h1>{{ $solarsystem->name }}</h1>

<h2>Planets in this Solar System:</h2>
<table>
    <tr>
        <th>Name</th>
        <th>Description</th>
        <th>Size (km)</th>
    </tr>
    @foreach ($solarsystem->planets as $planet)
    <tr>
        <td>{{ $planet->name }}</td>
        <td>{{ $planet->description }}</td>
        <td>{{ $planet->size_in_km }}</td>
    </tr>
    @endforeach
</table>
