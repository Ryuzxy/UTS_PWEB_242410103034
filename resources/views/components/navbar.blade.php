<header>
    <nav class="bg-gray-400 px-6 py-3 fixed top-0 w-full z-10">
    <div class="flex items-center justify-between">
        <div class="flex items-center space-x-4">
        <img 
            src="https://lh3.googleusercontent.com/-U0lTbxzh0bE/AAAAAAAAAAI/AAAAAAAAAAA/ACHi3rdJubMZweMDYD49ddsxq1wXai_9Cg/s48-c/photo.jpg"
            alt="User photo"
            class="profile-photo"
        >
        <div class="menu-dark">
            <span class="block text-sm font-semibold">Built by</span>
            <span class="block text-xl font-bold leading-tight">Mamang Gun's Shop</span>
            <span class="block text-gray-700 text-sm">The Gunsmith</span>
        </div>

        <div class="wellcome">
            <span class=" text-center block ml-10 bg-green-500 text-white px-3 py-1 rounded-full text-sm font-semibold">Welcome back, {{ $username }}</span>
        </div>
        </div>

        <div class="flex items-center space-x-4 text-gray-800">
        <a href="{{ url('/dashboard') }}" class="menu-icon">Home <i class="fas fa-stream"></i></a>
        <a href="{{ url('/pengelolaan') }}" class="menu-icon">Pengelolaan <i class="fas fa-search"></i></a>
        <a href="{{ url('/profile') }}" class="menu-icon">Profile <i class="fas fa-th"></i></a>
        <form method="POST" action="{{ url('/logout') }}" class="inline">
            @csrf
            <button type="submit" class="menu-icon">Logout <i class="fas fa-calendar-alt"></i></button>
        </form>
        </div>
    </div>
    </nav>
</header>