<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Makanan</title>
</head>
<body>
    <h1>{{ $food->name }}</h1>
    <p>{{ $food->description }}</p>
</body>
</html>

<form action="/order" method="POST">
    @csrf
    <input type="hidden" name="food_id" value="{{ $food->id }}">
    <input type="text" name="user_name" placeholder="Nama Anda" required>
    <input type="number" name="quantity" placeholder="Jumlah" required>
    <button type="submit">Pesan</button>
</form>
