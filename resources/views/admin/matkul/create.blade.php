@extends('layouts.admin')

@section('title', 'Tambah Matkul')

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold text-gray-800">Tambah Mata Kuliah</h1>
    <a href="{{ route('matkul.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-600 text-white text-sm rounded-md shadow hover:bg-gray-700 transition">
        <i class="fas fa-arrow-left mr-2"></i> Kembali
    </a>
</div>

<div class="bg-white shadow rounded-lg p-6">
    <form action="{{ route('matkul.store') }}" method="POST" class="space-y-6">
        @csrf
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="kode_matkul" class="block text-sm font-medium text-gray-700">Kode Matkul</label>
                <input type="text" name="kode_matkul" id="kode_matkul" value="{{ old('kode_matkul') }}"
                    class="mt-1 block w-full border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500 px-3 py-2" required>
                @error('kode_matkul')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="nama_matkul" class="block text-sm font-medium text-gray-700">Nama Matkul</label>
                <input type="text" name="nama_matkul" id="nama_matkul" value="{{ old('nama_matkul') }}"
                    class="mt-1 block w-full border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500 px-3 py-2" required>
                @error('nama_matkul')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="sks" class="block text-sm font-medium text-gray-700">SKS</label>
                <input type="number" name="sks" id="sks" value="{{ old('sks') }}"
                    class="mt-1 block w-full border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500 px-3 py-2" required>
                @error('sks')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="semester" class="block text-sm font-medium text-gray-700">Semester</label>
                <input type="number" name="semester" id="semester" value="{{ old('semester') }}"
                    class="mt-1 block w-full border border-gray-400 rounded focus:outline-none focus:ring-2 focus:ring-indigo-500 px-3 py-2" required>
                @error('semester')
                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="pt-4">
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md hover:bg-indigo-700 transition">
                <i class="fas fa-save mr-2"></i> Simpan
            </button>
        </div>
    </form>
</div>
@endsection