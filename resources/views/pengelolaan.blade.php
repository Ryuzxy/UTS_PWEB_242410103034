@extends('layouts.layouts')

@section('content')
<div class="p-8">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Pengelolaan Produk</h1>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        @foreach ($produk as $item)
        <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-xl transition-shadow duration-300">
            <img 
                src="{{ Vite::asset('resources/image/' . $item['gambar']) }}" 
                alt="{{ $item['nama'] }}" 
                class="w-full h-48 object-cover"
            >
            <div class="p-4">
                <h2 class="text-lg font-semibold text-gray-800">{{ $item['nama'] }}</h2>
                <p class="text-gray-600 text-sm">Tipe: {{ $item['tipe'] }}</p>
                <p class="text-gray-600 text-sm">Stok: {{ $item['stok'] }}</p>
                <p class="text-gray-800 font-bold mt-2">Rp {{ number_format($item['harga'], 0, ',', '.') }}</p>

                <button class="mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                    Edit
                </button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
