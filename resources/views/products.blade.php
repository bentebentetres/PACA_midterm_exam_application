<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $theme }} List</title>
</head>
<body>
    <h1>{{ $theme }}</h1>
    <ul>
        @foreach($movies as $movie)
            <li>{{ $movie }}</li>
        @endforeach
    </ul>
</body>
</html>
