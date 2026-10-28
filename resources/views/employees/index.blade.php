<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dipedenti</title>
</head>
<body>
    <ul>
    @foreach($employees as $element)
    <li>{{$element}}</li>
    @endforeach
    </ul>
</body>
</html>