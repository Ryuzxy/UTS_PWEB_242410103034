<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {   $username = session('username');
        $email = session('email');
        $password = session('password');
        $guns = [
        [
            'name' => 'M4A1',
            'desc' => 'Senjata serbu legendaris dengan akurasi tinggi dan recoil stabil.',
            'image' => 'resources/image/M4.jpeg',
        ],
        [
            'name' => 'AK-47',
            'desc' => 'Ikonik dan kuat. Cocok untuk petarung yang tak takut panas pertempuran.',
            'image' => 'resources/image/AK.jpg',
        ],
        [
            'name' => 'Desert Eagle',
            'desc' => 'Pistol berat berdaya tinggi. Simbol kekuatan sejati.',
            'image' => 'resources/image/DE.jpg',
        ],
    ];
        $buyers = [
        ['country'=>'Amerika Serikat', 'code'=>'us','units'=>120,'value'=>120000000,'year'=>2025,'status'=>'Selesai'],
        ['country'=>'Inggris','code'=>'gb','units'=>45,'value'=>45000000,'year'=>2024,'status'=>'Dalam Proses'],
        ['country'=>'Indonesia','code'=>'id','units'=>80,'value'=>80000000,'year'=>2025,'status'=>'Perhatian'],
        ['country'=>'Australia','code'=>'au','units'=>30,'value'=>30000000,'year'=>2023,'status'=>'Selesai'],
    ];
        return view('dashboard', compact('guns', 'username', 'email', 'password', 'buyers'));
    }

    public function login(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $email = $request->input('email');

        if ($username === 'Ryu' && $password === 'Ryuxy123'  && $email === 'Ryuxy1213@gmail.com') {
            session()->put('username', $username);
            session()->put('email', $email);
            session()->put('password', $password);
            return redirect('/dashboard');
        } else {
            return redirect('/login')->withErrors(['Invalid credentials. Please try again.']);
        }
    }

    public function pengelolaan()
    {
        $username = session('username');
        $produk = [
            [
                'nama' => 'M4A1 Assault Rifle',
                'tipe' => 'Rifle',
                'stok' => 12,
                'harga' => 1500000,
                'gambar' => 'M4.jpeg'
            ],
            [
                'nama' => 'Glock 17',
                'tipe' => 'Pistol',
                'stok' => 8,
                'harga' => 800000,
                'gambar' => 'glock.jpeg'
            ],
            [
                'nama' => 'Remington 870',
                'tipe' => 'Shotgun',
                'stok' => 5,
                'harga' => 2000000,
                'gambar' => 'remington.jpeg'
            ],
        ];

        return view('pengelolaan', compact('produk', 'username'));
    }

    public function profile()
    {
        $username = session('username');
        $email = session('email');
        $password = session('password');

        return view('profile', compact('username', 'email', 'password'));
    }

    public function logout()
{
    session()->flush();
    return view('logout');
}

}
