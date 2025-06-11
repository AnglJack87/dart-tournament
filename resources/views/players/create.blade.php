<h1>Spieler hinzufügen für Turnier: {{ $tournament->name }}</h1>

<form method="POST" action="/tournaments/{{ $tournament->id }}/players">
    @csrf
    <label>Name des Spielers:</label><br>
    <input type="text" name="name" required><br><br>
    <button type="submit">Spieler hinzufügen</button>
</form>
