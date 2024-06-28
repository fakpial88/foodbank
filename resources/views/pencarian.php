<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foodbank for Papua</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .header {
            background-image: url('https://static.wixstatic.com/media/a2efaf_6ecd9ea07d3d4e779aab782d3208ff12~mv2.jpg/v1/fill/w_990,h_1024,al_c,q_85,enc_auto/a2efaf_6ecd9ea07d3d4e779aab782d3208ff12~mv2.jpg');
            background-size: cover;
            background-position: center;
            height: 300px;
            position: relative;
            color: white;
        }
        .header-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
        }
        .header-content {
            position: relative;
            z-index: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            text-align: center;
        }
        .header h1 {
            font-size: 3em;
            margin: 0;
        }
        .header h1 strong {
            color: #38b2ac;
        }
        .navbar {
            background-color: #334;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
        }
        .navbar a {
            color: white;
            text-decoration: none;
            margin: 0 10px;
        }
        .navbar a:hover {
            text-decoration: underline;
        }
        .search-container {
            text-align: center;
            padding: 20px;
        }
        .search-container input {
            width: 50%;
            padding: 10px;
            font-size: 16px;
            margin: 10px 0;
        }
        .goods {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px auto;
            max-width: 1000px;
        }
        .goods .item {
            background-color: white;
            margin: 10px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            flex: 1 1 30%;
            box-sizing: border-box;
        }
        .goods .item img {
            max-width: 100%;
            height: auto;
        }
        .goods .item h3 {
            margin: 10px 0;
        }
    </style>
</head>
<body>

<div class="header">
    <div class="header-overlay"></div>
    <div class="header-content">
        <h1>FOODBANK <strong>PAPUA</strong></h1>
    </div>
</div>

<div class="navbar">
    <div>
        <a href="/">HOME</a>
        <a href="/profil">WHO WE ARE</a>
        <a href="#">SUPPORT US</a>
        <a href="/">EVENTS</a>
    </div>
    <div>
        <a href="/login">MASUK</a>
        <a href="/login">DAFTAR</a>
    </div>
</div>

<div class="search-container">
    <input type="text" placeholder="Daging Sapi">
</div>

<div class="goods">
    <div class="item">
        <img src="https://via.placeholder.com/150" alt="Beras">
        <h3>Beras</h3>
    </div>
    <div class="item">
        <img src="https://via.placeholder.com/150" alt="Minyak Masak">
        <h3>Minyak Masak</h3>
    </div>
    <div class="item">
        <img src="https://via.placeholder.com/150" alt="Telur">
        <h3>Telur</h3>
    </div>
    <div class="item">
        <img src="https://via.placeholder.com/150" alt="Daging Sapi">
        <h3>Daging Sapi</h3>
    </div>
    <div class="item">
        <img src="https://via.placeholder.com/150" alt="Daging Ayam">
        <h3>Daging Ayam</h3>
    </div>
    <div class="item">
        <img src="https://via.placeholder.com/150" alt="Sayur Mayur">
        <h3>Sayur Mayur</h3>
    </div>
</div>

</body>
</html>
