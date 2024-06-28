<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation Platform</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
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
        .header {
            text-align: center;
            padding: 50px;
            background-color: #f8f9fa;
        }
        .header h1 {
            font-size: 2.5em;
            margin: 0;
            color: #333;
        }
        .donate-btn {
            background-color: #a3d9a5;
            border: none;
            color: white;
            padding: 10px 20px;
            font-size: 1em;
            cursor: pointer;
            margin-top: 20px;
        }
        .donate-btn:hover {
            background-color: #8ec98a;
        }
        .cards {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            margin: 20px;
        }
        .card {
            background-color: white;
            margin: 15px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 300px;
            border-radius: 8px;
        }
        .card img {
            width: 100%;
            height: auto;
            border-radius: 8px 8px 0 0;
        }
        .card h3 {
            margin: 10px 0;
            color: #333;
        }
        .card .progress-bar {
            width: 100%;
            background-color: #e0e0e0;
            border-radius: 8px;
            overflow: hidden;
            margin: 10px 0;
        }
        .card .progress {
            height: 10px;
            background-color: #76c7c0;
        }
        .card .details {
            display: flex;
            justify-content: space-between;
            margin: 10px 0;
            color: #666;
        }
        .card .donate {
            background-color: #76c7c0;
            color: white;
            padding: 10px;
            border-radius: 5px;
            text-decoration: none;
        }
        .card .donate:hover {
            background-color: #64a7a0;
        }
    </style>
</head>
<body>

<div class="navbar">
    <div>
        <a href="#">HOME</a>
        <a href="#">PROFIL</a>
        <a href="#">EVENTS</a>
        <a href="#">CONTACT</a>
    </div>
    <div>
        <a href="#">DAFTAR</a>
    </div>
</div>

<div class="header">
    <h1>Your help is Needed</h1>
    <button class="donate-btn">DONATE</button>
</div>

<div class="cards">
    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Education">
        <h3>Membantu biaya pendidikan</h3>
        <div class="progress-bar">
            <div class="progress" style="width: 64%;"></div>
        </div>
        <div class="details">
            <span>Goal Rp250jt</span>
            <span>Remaining Rp90jt</span>
        </div>
        <a href="#" class="donate">DONATE</a>
    </div>
    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="Health">
        <h3>Membantu kesehatan untuk anak-anak</h3>
        <div class="progress-bar">
            <div class="progress" style="width: 90%;"></div>
        </div>
        <div class="details">
            <span>Goal Rp150jt</span>
            <span>Remaining Rp15jt</span>
        </div>
        <a href="#" class="donate">DONATE</a>
    </div>
    <div class="card">
        <img src="https://via.placeholder.com/300x200" alt="School Construction">
        <h3>Membangun Sekolah untuk siswa kurang mampu</h3>
        <div class="progress-bar">
            <div class="progress" style="width: 73%;"></div>
        </div>
        <div class="details">
            <span>Goal Rp300jt</span>
            <span>Remaining Rp80jt</span>
        </div>
        <a href="#" class="donate">DONATE</a>
    </div>
</div>

</body>
</html>
