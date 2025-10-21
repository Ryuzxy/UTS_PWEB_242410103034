<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Website Kami</title>
    @vite(['resources/css/landingpage.css', 'resources/js/app.js'])
</head>
<body class="body-landing">
  <section class="max-w-3xl">
    <h1 class="text-4xl font-bold mb-4 text-gray-800">Selamat Datang di <span class="text-blue-500">Toko Mamang Gun'Shop</span></h1>
    <p class="text-lg text-gray-700 leading-relaxed mb-8">
      Website ini dirancang untuk membantu pengelolaan dan pemesanan "Barang" secara cepat, 
      efisien, dan modern. Website ini menyediakan fitur-fitur yang memudahkan pengelolaan barang. 
    </p>
    <button 
      onclick="window.location.href='/login'" 
      class="bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition">
      Masuk ke Sistem
    </button>
  </section>

</body>
</html>
