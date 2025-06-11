<!DOCTYPE html>
<html>
<head>
    <title>Turnierliste</title>
</head>
<body>
    <h1>Turniere</h1>

    <a href="/tournaments/create">+ Neues Turnier anlegen</a>

    <ul>
        @foreach($tournaments as $tournament)
            <li>
    <a href="/tournaments/{{ $tournament->id }}/players">
        {{ $tournament->name }} (Start: {{ $tournament->start_date }})
    </a>
</li>

        @endforeach
    </ul>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
</body>
</html>
