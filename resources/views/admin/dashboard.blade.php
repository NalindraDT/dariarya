@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6 mt-6">
    <!-- Card Dosen -->
    <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col items-center text-center">
        <div class="bg-indigo-100 p-4 rounded-full mb-4">
            <i class="fas fa-chalkboard-teacher text-indigo-600 text-3xl"></i>
        </div>
        <h2 class="text-3xl font-bold text-gray-800">{{ $dosenCount ?? 0 }}</h2>
        <p class="text-gray-500 mt-1">Dosen Terdaftar</p>
    </div>

    <!-- Card Mahasiswa -->
    <div class="bg-white p-6 rounded-2xl shadow-lg flex flex-col items-center text-center">
        <div class="bg-green-100 p-4 rounded-full mb-4">
            <i class="fas fa-user-graduate text-green-600 text-3xl"></i>
        </div>
        <h2 class="text-3xl font-bold text-gray-800">{{ $mahasiswaCount ?? 0 }}</h2>
        <p class="text-gray-500 mt-1">Mahasiswa Aktif</p>
    </div>

    <!-- Welcome Card -->
    <div class="bg-gradient-to-br from-blue-500 to-indigo-600 p-6 rounded-2xl shadow-lg text-white flex flex-col justify-center">
        <h2 class="text-2xl font-semibold">Selamat Datang!</h2>
        <p class="mt-2 text-sm">Kelola data akademik dengan mudah melalui panel admin ini.</p>
    </div>
</div>

<!-- Navigasi Cepat -->
<div class="mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
    <a href="{{ route('dosen.index') }}" class="bg-indigo-50 hover:bg-indigo-100 transition rounded-xl p-6 shadow flex items-center space-x-4">
        <i class="fas fa-users-cog text-indigo-600 text-3xl"></i>
        <div>
            <h3 class="text-lg font-bold text-indigo-800">Manajemen Dosen</h3>
            <p class="text-sm text-indigo-600">Lihat, tambah, edit, dan hapus data dosen</p>
        </div>
    </a>

    <a href="{{ route('mahasiswa.index') }}" class="bg-green-50 hover:bg-green-100 transition rounded-xl p-6 shadow flex items-center space-x-4">
        <i class="fas fa-users text-green-600 text-3xl"></i>
        <div>
            <h3 class="text-lg font-bold text-green-800">Manajemen Mahasiswa</h3>
            <p class="text-sm text-green-600">Lihat, tambah, edit, dan hapus data mahasiswa</p>
        </div>
    </a>
</div>
@endsection