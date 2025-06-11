<h1>Spieler im Turnier: {{ $tournament->name }}</h1>

<ul>
    @foreach($players as $player)
        <li>{{ $player->name }}</li>
    @endforeach
</ul>

<a href="/tournaments/{{ $tournament->id }}/players/create">Neuen Spieler hinzufügen</a>
