@extends('layouts.admin')

@section('title', 'Tambah User')

@section('content')
    <div class="flex justify-between items-center">
        <h3 class="text-3xl font-medium text-gray-700">Tambah User</h3>
        <a href="{{ route('user.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700">
            <i class="fas fa-arrow-left mr-2"></i> Kembali
        </a>
    </div>

    <div class="mt-8">
        <div class="mt-8 bg-white p-6 rounded-md shadow-md">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
    <label for="id_user" class="block text-sm font-medium text-gray-700">id_user</label>
    <input type="text" name="id_user" id="id_user" value="{{ old('id_user') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    @error('id_user')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="username" class="block text-sm font-medium text-gray-700">username</label>
    <input type="text" name="username" id="username" value="{{ old('username') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    @error('username')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="password" class="block text-sm font-medium text-gray-700">password</label>
    <input type="text" name="password" id="password" value="{{ old('password') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    @error('password')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>

<div>
    <label for="level" class="block text-sm font-medium text-gray-700">level</label>
    <input type="text" name="level" id="level" value="{{ old('level') }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" required>
    @error('level')
        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
    @enderror
</div>
                </div>

                <div class="mt-6">
                    <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700">
                        <i class="fas fa-save mr-2"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection