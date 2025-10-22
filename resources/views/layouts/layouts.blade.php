<html>
<head>
    <title>Mamang Gun'Shop</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> --}}
</head>
<body style="background-image: url('{{ Vite::asset('resources/image/BGGGG.jpg') }}');" class="bg-cover bg-center bg-no-repeat min-h-screen " >

    @include("components.navbar")

    <main class="main-content">
        @yield("content")
    </main>

    @extends("components.footer")
</body>
</html>
