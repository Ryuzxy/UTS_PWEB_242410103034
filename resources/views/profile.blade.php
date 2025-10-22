@extends('layouts.layouts')

@vite('resources/css/profile.css')

@section('content')
<div class="display">
    <h1 class="text-title">Profile</h1>

    <div class="card">
        <div class="shrink-0">
            <div class="card-image">
                {{ strtoupper(substr(session('username') ?? 'U', 0, 1)) }}
            </div>
        </div>

        <div class="infoakun">
            <h2 class="text-xl font-bold mb-1">{{ session('username') ?? 'Nama Pengguna' }}</h2>
            <p class="text-sm text-gray-500 mb-4">Informasi akun Anda</p>

            <ul class="list">
                <li><span class="font-medium">Email:</span> {{ session('email') ?? '-' }}</li>
                <li><span class="font-medium">Password:</span> <span class="ml-1">••••••••</span></li>
            </ul>

            <div class="buttonlist">
                <a href="/profile/edit" class="edit">Edit Profil</a>
                <a href="/password/change" class="change">Ganti Password</a>
            </div>
        </div>
    </div>

    <button type="button" onclick="window.location.href='/dashboard'" class="button">
        Kembali ke Dashboard
    </button>
</div>
@endsection
