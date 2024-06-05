<x-layout>
    <x-slot:card_title>Dashboard Pegawai</x-slot>
    <h3>Selamat Datang Pegawai {{ $username ?? '' }}!</h3>
    <h3>Umur Anda adalah {{ $umur ?? '21' }}.</h3>
    <p>Ini adalah halaman Pegawai</p>
</x-layout>
