<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Bank Papua</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-image: url('https://static.wixstatic.com/media/a2efaf_6ecd9ea07d3d4e779aab782d3208ff12~mv2.jpg/v1/fill/w_990,h_1024,al_c,q_85,enc_auto/a2efaf_6ecd9ea07d3d4e779aab782d3208ff12~mv2.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
        }

        .text-floating {
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        .container-layout {
            position: relative;
            z-index: 10;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="bg-blue-900 p-4 flex justify-between items-center">
        <div class="text-white font-bold text-xl">EASY ACCESS, EASY LIFE</div>
        <div class="flex gap-4">
            <a href="/" class="text-white">Home</a>
            <a href="/profil" class="text-white">Who We Are</a>
            <a href="#support-us" class="text-white">Support Us</a>
            <a href="#event" class="text-white">Event</a>
            <a href="/login" class="text-white bg-teal-500 px-4 py-2 rounded">Masuk</a>
            <a href="/login" class="text-white bg-green-500 px-4 py-2 rounded">Daftar</a>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="header" class="flex items-center justify-center h-screen">
        <div class="text-center text-floating">
            <h1 class="text-3xl font-bold sm:text-5xl">
                FOOD BANK PAPUA
            </h1>
            <p class="mt-4 sm:text-xl">
                A charity program for a hunger problem in Papua, Indonesia. Help us end hunger in Papua by providing food for families in need.
            </p>
            <div class="mt-8 flex flex-wrap justify-center gap-4">
                <a class="button-primary bg-green-500 text-white px-4 py-2 rounded" href="/pencarian">
                    Pencarian Makanan
                </a>
                <a class="button-secondary bg-white text-teal-600 border border-teal-600 px-4 py-2 rounded" href="/login">
                    Pendaftaran Donasi
                </a>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <div class="bg-teal-600 pt-8 pb-8 text-floating mt-32">
        <div class="container-layout">
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
                <a href="/event1" class="block rounded-xl bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                    <h2 class="mt-2 font-bold">Meal Packaging & Delivery</h2>
                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Sel, 02 Jan Jakarta
                    </p>
                </a>
                <a href="/event2" class="block rounded-xl bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                    <h2 class="mt-2 font-bold">Christmas Backyard Cook</h2>
                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Min, 04 Feb Merauke Convention
                    </p>
                </a>
                <a href="/event3" class="block rounded-xl bg-white border border-gray-100 p-4 shadow-sm hover:border-gray-200 hover:ring-1 hover:ring-gray-200 focus:outline-none focus:ring">
                    <h2 class="mt-2 font-bold">Penyebaran Paket Bahan Pangan</h2>
                    <p class="hidden sm:mt-1 sm:block sm:text-sm sm:text-gray-600">
                        Sel, 06 Mar Papua
                    </p>
                </a>
            </div>
        </div>
    </div>
</body>

</html>
