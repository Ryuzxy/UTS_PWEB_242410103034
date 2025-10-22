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
    <h1 class="ucapan">Selamat Datang di <span class="text-blue-500">Toko Mamang Gun'Shop</span></h1>
    <p class="desc">
      Website ini dirancang untuk membantu pengelolaan dan pemesanan "Barang" secara cepat, 
      efisien, dan modern. Website ini menyediakan fitur-fitur yang memudahkan pengelolaan barang. 
    </p>
    <button 
      onclick="window.location.href='/login'" 
      class="masuk">
      Masuk ke Sistem
    </button>
  </section>

</body>
</html>
