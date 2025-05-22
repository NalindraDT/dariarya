@extends('layouts.admin')

@section('title', 'Daftar ' . ucfirst('matkul'))

@section('content')
<div class="flex items-center justify-between mb-6">
    <h1 class="text-2xl font-semibold text-gray-800">Daftar Mata Kuliah</h1>
    <a href="{{ route('matkul.create') }}" class="inline-flex items-center px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white text-sm font-medium rounded-lg shadow-sm transition">
        <i class="fas fa-plus mr-2"></i> Tambah Matkul
    </a>
</div>

<div class="overflow-x-auto bg-white shadow rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50 text-left text-sm font-semibold text-gray-700 uppercase tracking-wider">
            <tr>
                <th class="px-6 py-3">Kode Matkul</th>
                <th class="px-6 py-3">Nama Matkul</th>
                <th class="px-6 py-3">SKS</th>
                <th class="px-6 py-3">Semester</th>
                <th class="px-6 py-3 text-center">Aksi</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-100 text-sm text-gray-700">
            @forelse($matkul as $item)
            <tr class="hover:bg-gray-50">
                <td class="px-6 py-4 whitespace-nowrap">{{ $item['kode_matkul'] }}</td>
                <td class="px-6 py-4 whitespace-nowrap">{{ $item['nama_matkul'] }}</td>
                <td class="px-6 py-4">{{ $item['sks'] }}</td>
                <td class="px-6 py-4">{{ $item['semester'] }}</td>
                <td class="px-6 py-4 text-center">
                    <a href="{{ route('matkul.edit', $item['kode_matkul']) }}" class="text-indigo-600 hover:underline mr-3">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <form action="{{ route('matkul.destroy', $item['kode_matkul']) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus matkul ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline">
                            <i class="fas fa-trash-alt"></i> Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada data mata kuliah.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection