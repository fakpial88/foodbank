<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cari Makanan</title>
</head>
<body>
    <h1>Cari Makanan</h1>
    <form action="/search" method="GET">
        <input type="text" name="q" placeholder="Cari makanan...">
        <button type="submit">Cari</button>
    </form>
    <ul>
        @foreach ($foods as $food)
            <li>{{ $food->name }}</li>
        @endforeach
    </ul>
</body>
</html>
