<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $theme ?? 'Default Title' }} List</title> <!-- Use ?? to prevent errors -->
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        li {
            background: white;
            margin: 10px auto;
            padding: 10px;
            width: 50%;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <h1>{{ $theme ?? 'Default Theme' }} List</h1> <!-- Use ?? to prevent errors -->
    <ul>
        @foreach($movies ?? [] as $movie) <!-- Use ?? to prevent errors -->
            <li>{{ $movie }}</li>
        @endforeach
    </ul>
</body>
</html>
