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
</head>
<body class="bg-gray-100 font-sans">

    <header class="bg-yellow-500 text-white p-4">
        <div class="flex items-center">
            <img src="assets/logo.png" alt="Golden Phoenix Logo" class="h-16 w-16 mr-4">
            <h1 class="text-4xl font-bold">Golden Phoenix Basketball</h1>
        </div>
    </header>

    <nav class="bg-gray-800 text-white p-4">
        <ul class="flex space-x-4">
            <li><a href="#ticketing" class="hover:text-gray-200">Pembelian Tiket</a></li>
            <li><a href="./about_us.php" class="hover:text-gray-200">Tentang Kami</a></li>
            <li><a href="pendaftaran.php" class="hover:text-gray-200">Pendaftaran Anggota</a></li>
        </ul>
    </nav>

    <main class="container mx-auto mt-8 p-4">
        <section id="ticketing" class="mb-12">
            <h2 class="text-3xl font-semibold mb-4">E-Ticketing</h2>
            <form id="ticketForm" class="max-w-md mx-auto bg-white shadow-lg rounded-lg p-6" action="respon.php" method="POST" enctype="multipart/form-data">
                <div class="mb-5">
                    <label for="userName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nama</label>
                    <input type="text" id="userName" name="userName" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan nama anda" required />
                </div>

                <div class="mb-5">
                    <label for="userEmail" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Email</label>
                    <input type="email" id="userEmail" name="userEmail" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan email anda" required />
                </div>

                <label for="userPhone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Nomor Telepon</label>
                <div class="relative">
                    <div class="absolute inset-y-0 start-0 top-0 flex items-center ps-3.5 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 19 18">
                            <path d="M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z"/>
                            </svg>
                    </div>
                    <input type="text" id="userPhone" name="userPhone" maxlength="15" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="123-456-789-012" oninput="formatPhoneNumber(this)" required />
                </div>
                <p id="helper-text-explanation" class="mt-2 text-sm text-gray-500 dark:text-black-400 mb-3">Pilih nomor telepon sesuai format yang tertera</p>

                <div class="mb-5">
                    <label for="remarks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Catatan (Optional)</label>
                    <input type="text" id="remarks" name="remarks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan catatan anda" />
                </div>

                <section class="bg-gray-50 rounded-lg shadow-md p-6 mb-5">
                    <h3 class="text-xl font-semibold mb-4">Pilih Tiket Anda</h3>

                    <div class="mb-4">
                        <label for="ticket-type" class="block mb-2 text-sm font-medium text-gray-900">Jenis Tiket:</label>
                        <select id="ticket-type" name="ticketType" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 
                                       focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Pilih Jenis Tiket --</option>
                            <option value="Premium">Premium (Rp 15.000)</option>
                            <option value="Reguler">Reguler (Rp 10.000)</option>
                        </select>
                    </div>

                    <aside class="bg-yellow-100 text-yellow-800 p-4 rounded-lg mb-4">
                        <h4 class="font-semibold mb-2">Perbedaan Tiket Premium dan Reguler:</h4>
                        <p class="mb-2"><strong>Premium:</strong> Tiket Premium memberikan Anda tempat duduk di paling depan tribun, sehingga Anda bisa lebih dekat dengan lapangan.</p>
                        <p><strong>Reguler:</strong> Tiket Reguler memberikan tempat duduk di barisan belakang tribun, namun tetap memberikan pengalaman menonton yang nyaman.</p>
                    </aside>

                    <div class="mb-4">
                        <label for="match" class="block mb-2 text-sm font-medium text-gray-900">Pilih Pertandingan:</label>
                        <select id="match" name="match" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg w-full p-2.5 
                                       focus:ring-blue-500 focus:border-blue-500">
                            <option value="">-- Pilih Pertandingan --</option>
                            <option value="loyola">Golden Phoenix vs SMA Loyola, 5 Oktober 2024</option>
                            <option value="sedes">Golden Phoenix vs SMA Sedes Sapientiae, 12 Oktober 2024</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label for="quantity" class="block mb-2 text-sm font-medium text-gray-900">Pesan Berapa Tiket:</label>
                        <input type="number" id="quantity" name="quantity" min="1" max="10" value="1" 
                               class="w-full p-2 border border-gray-300 rounded-lg focus:ring-blue-500 focus:border-blue-500" required>
                    </div>
                </section>

                <button type="button" id="submitButton" class="w-full   bg-blue-500 text-white font-semibold py-2 rounded hover:bg-blue-600 transition duration-200">
                    Submit
                </button>
            </form>
        </section>
    </main>

    <footer class="bg-gray-800 text-white p-4 mt-8">
        <p>&copy; 2024 Golden Phoenix Basketball. All rights reserved.</p>
    </footer>

</body>
</html>


<script>
    function formatPhoneNumber(input) {
        let value = input.value.replace(/\D/g, '');

        if (value.length > 3 && value.length <= 6) {
            value = value.slice(0, 3) + '-' + value.slice(3);
        } else if (value.length > 6 && value.length <= 9) {
            value = value.slice(0, 3) + '-' + value.slice(3, 6) + '-' + value.slice(6);
        } else if (value.length > 9) {
            value = value.slice(0, 3) + '-' + value.slice(3, 6) + '-' + value.slice(6, 9) + '-' + value.slice(9);
        }

        input.value = value;
    }

    document.getElementById('submitButton').addEventListener('click', function() {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: 'Setelah data dikirim, Anda tidak bisa mengubahnya lagi.',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Pesan Sekarang!',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('ticketForm').submit();
            }
        })
    });
</script>