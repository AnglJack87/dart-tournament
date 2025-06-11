<!DOCTYPE html>
<html>
<head>
    <title>Turnier erstellen</title>
</head>
<body>
    <h1>Neues Turnier</h1>

    <form method="POST" action="/tournaments">
        @csrf
        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>Startdatum:</label><br>
        <input type="date" name="start_date" required><br><br>

        <label><input type="checkbox" name="has_group_stage" checked> Mit Gruppenphase</label><br><br>

        <button type="submit">Speichern</button>
    </form>
</body>
</html>
