<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donasi Makanan</title>
</head>
<body>
    <h1>Donasi Makanan</h1>
    <form action="/donate" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nama Anda" required>
        <input type="text" name="food_item" placeholder="Item Makanan" required>
        <input type="number" name="quantity" placeholder="Jumlah" required>
        <button type="submit">Donasi</button>
    </form>
</body>
</html>
