<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dipedenti</title>
</head>
<body>
    <header>
        <h1>Lista dei dipendenti</h1>
    </header>
    <ul>
        @foreach($employees as $employee)
            <li>{{$employee}}</li>
        @endforeach
    </ul>
</body>
</html>