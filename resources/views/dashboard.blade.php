<html lang="en">
    @extends("layouts.layouts")
    <head>
        <title>Dashboard - Mamang Gun'Shop</title>
        @vite(['resources/css/dashboard.css', 'resources/js/dashboard.js'])
    </head>
    <body>
        @section("content")
            <h1 class="dashboard-title">Welcome to Mamang Gun'Shop, "{{ $username }}"</h1>
            <div class="dashboard-static">
                <h1 class= "dashboard-title">Most Top Buy</h1>
                <div class="dashboard-cards">
                    @foreach($guns as $gun)
                        <div class="card-loop">
                            <img 
                                src="{{ Vite::asset($gun['image']) }}" 
                                alt="{{ $gun['name'] }}" 
                                class="w-full h-48 object-cover">
                            <div class="p-5">
                                <h2 class="text-xl font-semibold text-gray-800 mb-2">{{ $gun['name'] }}</h2>
                                <p class="text-gray-600 mb-4">{{ $gun['desc'] }}</p>
                                <button class="bg-yellow-500 hover:bg-yellow-600 text-white font-semibold py-2 px-4 rounded-lg transition-all">
                                Detail
                                </button>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <x-statict :buyers="$buyers"/>
        @endsection
    </body>
</html>