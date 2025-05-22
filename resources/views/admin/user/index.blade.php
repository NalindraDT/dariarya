@extends('layouts.admin')

@section('title', 'Daftar ' . ucfirst('user'))

@section('content')
    <h3 class="text-2xl font-bold">Daftar User</h3>
    <a href="{{ route('user.create') }}" class="mt-4 inline-block px-4 py-2 bg-blue-600 text-white rounded">Tambah User</a>

    <div class="mt-6">
        <table class="min-w-full">
            <thead>
                <tr>
                    <th class="px-6 py-3">Id_User</th>
<th class="px-6 py-3">Username</th>
<th class="px-6 py-3">Password</th>
<th class="px-6 py-3">Level</th>
                    <th class="px-6 py-3">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($user as $item)
                    <tr>
                        <td class="px-6 py-4">{{ $item['id_user'] }}</td>
<td class="px-6 py-4">{{ $item['username'] }}</td>
<td class="px-6 py-4">{{ $item['password'] }}</td>
<td class="px-6 py-4">{{ $item['level'] }}</td>
                        <td class="px-6 py-4">
                            <a href="{{ route('user.edit', $item['id_user']) }}" class="text-blue-600">Edit</a>
                            <form action="{{ route('user.destroy', $item['id_user']) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 ml-2">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection