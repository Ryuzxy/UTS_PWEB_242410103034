@section('content')
<div class="min-h-screen flex flex-col justify-center items-center bg-gray-900 text-white">
    <div class="bg-gray-800 p-8 rounded-2xl shadow-lg w-96 text-center">
        <h1 class="text-3xl font-bold mb-4">Terima Kasih!</h1>
        <p class="text-gray-300 mb-4">
            Terima kasih telah menggunakan Mamang Gun'Shop. Kamu sudah berhasil keluar dari akun.
        </p>
        <p class="text-gray-300 mb-6">
            Pastikan semua pekerjaanmu sudah tersimpan. Jika butuh bantuan, kunjungi halaman bantuan atau hubungi tim support kami.
        </p>

        <div class="flex flex-col gap-2">
            <a href="{{ route('login') }}" class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded">
                Masuk Kembali
            </a>
            <a href="{{ url('/') }}" class="text-gray-300 hover:underline">
                Kembali ke Beranda
            </a>
        </div>

        <footer class="text-gray-500 text-sm mt-8">
            &copy; {{ date('Y') }} Mamang Gun'Shop. All rights reserved.
        </footer>
    </div>
</div>
@endsection
