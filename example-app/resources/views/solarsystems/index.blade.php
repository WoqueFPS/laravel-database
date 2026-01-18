<h1>Solar Systems</h1>
<table>
    <tr>
        <th>Name</th>
        <th>Number of Planets</th>
    </tr>
    @foreach ($solarsystems as $ss)
    <tr>
        <td><a href="{{ route('solarsystems.show', $ss->id) }}">{{ $ss->name }}</a></td>
        <td>{{ $ss->planets_count }}</td>
    </tr>
    @endforeach
</table>
