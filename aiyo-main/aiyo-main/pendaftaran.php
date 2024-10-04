<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Golden Phoenix Basketball</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f2f2f2;
        }

        .bg-custom {
            background-image: url('assets/background.png'); /* Ganti dengan path gambar latar belakang yang sesuai */
            background-size: cover;
            background-position: center;
            min-height: 100vh; /* Ganti height menjadi min-height */
            display: flex;
            flex-direction: column; /* Memastikan konten teratur secara vertikal */
        }

        .content {
            flex: 1; /* Memungkinkan bagian konten untuk mengisi ruang yang tersisa */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        footer {
            margin-top: auto; /* Memastikan footer selalu di bawah */
        }
    </style>
</head>
<body class="bg-gray-100 font-sans">

    <div class="bg-custom">
        <header class="bg-yellow-500 text-white p-4">
            <div class="flex items-center">
                <img src="assets/logo.png" alt="Golden Phoenix Logo" class="h-16 w-16 mr-4">
                <h1 class="text-4xl font-bold">Golden Phoenix Basketball</h1>
            </div>
        </header>

        <nav class="bg-gray-800 text-white p-4">
            <ul class="flex space-x-4">
                <li><a href="./index.php" class="hover:text-yellow-300">Pembelian Tiket</a></li>
                <li><a href="./about_us.php" class="hover:text-yellow-300">Tentang Kami</a></li>
                <li><a href="pendaftaran.php" class="hover:text-yellow-300">Pendaftaran Anggota</a></li>
            </ul>
        </nav>

        <div class="content">
            <section class="p-4 flex justify-center items-center w-full">
                <div class="bg-white bg-opacity-70 p-8 rounded-2xl shadow-xl max-w-lg w-full">
                    <div class="text-center mb-6">
                        <img src="assets/logo.png" alt="Basketball Camp Logo" class="mx-auto h-24 mb-4">
                        <h1 class="text-2xl font-bold text-center mb-4">Basketball Club Registration Form</h1>
                    </div>
                    <form>
                        <div class="flex space-x-4 mb-4">
                            <div class="w-1/2">
                                <label for="first-name" class="block mb-2 font-semibold">Player's First Name:</label>
                                <input type="text" id="first-name" placeholder="First Name" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                            </div>
                            <div class="w-1/2">
                                <label for="last-name" class="block mb-2 font-semibold">Last Name:</label>
                                <input type="text" id="last-name" placeholder="Last Name" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="birthday" class="block mb-2 font-semibold">Date of Birth:</label>
                            <input type="date" id="birthday" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div class="mb-4">
                            <label for="email" class="block mb-2 font-semibold">Email Address:</label>
                            <input type="email" id="email" placeholder="Email Address" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div class="mb-4">
                            <label for="phone" class="block mb-2 font-semibold">Phone Number:</label>
                            <input type="tel" id="phone" placeholder="Phone Number" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div class="mb-4">
                            <label for="school" class="block mb-2 font-semibold">School Name:</label>
                            <input type="text" id="school" placeholder="School Name" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div class="mb-4">
                            <label for="alamat" class="block mb-2 font-semibold">Alamat:</label>
                            <input type="text" id="alamat" placeholder="Alamat" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500">
                        </div>

                        <div class="mb-4">
                            <label for="reason" class="block mb-2 font-semibold">Reason for Joining Golden Phoenix:</label>
                            <textarea id="reason" placeholder="Write your reason here" class="w-full p-3 border rounded focus:outline-none focus:ring-2 focus:ring-yellow-500"></textarea>
                        </div>

                        <input type="submit" value="Submit" class="w-full bg-yellow-500 text-white p-3 rounded hover:bg-yellow-600 transition duration-300 focus:outline-none focus:ring-2 focus:ring-yellow-600">
                    </form>
                </div>
            </section>
        </div>
    </div>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <p>&copy; 2024 Golden Phoenix Basketball. All rights reserved.</p>
    </footer>

</body>
</html>
