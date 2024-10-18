@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen" style="background: linear-gradient(to bottom right, #d1c6f3, #ffb6c1);">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-5xl">
        <h1 class="text-4xl font-bold mb-8 text-center text-gray-800">Daftar Pengguna</h1>
        
        <!-- Link untuk menambah pengguna baru -->
        <div class="flex justify-end mb-4">
            <a href="{{ route('users.create') }}" class="btn btn-primary bg-gradient-to-r from-purple-500 to-pink-400 text-white hover:bg-gradient-to-l from-purple-600 to-pink-500 px-4 py-2 rounded-lg shadow-md transition duration-200">
                Tambah Pengguna Baru
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg border border-gray-300 shadow-md">
                <thead>
                    <tr class="bg-gradient-to-r from-purple-600 to-pink-500 text-white text-left">
                        <th class="px-6 py-4 text-sm font-semibold text-center">ID</th>
                        <th class="px-6 py-4 text-sm font-semibold text-center">Nama</th>
                        <th class="px-6 py-4 text-sm font-semibold text-center">NPM</th>
                        <th class="px-6 py-4 text-sm font-semibold text-center">Kelas</th>
                        <th class="px-6 py-4 text-sm font-semibold text-center">Foto</th>
                        <th class="px-6 py-4 text-sm font-semibold text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr class="border-b border-gray-300 hover:bg-gray-100 transition duration-200">
                        <td class="px-6 py-4 text-sm text-gray-700 text-center">{{ $user->id }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700 text-center">{{ $user->nama }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700 text-center">{{ $user->npm }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700 text-center">{{ $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan' }}</td>
                        <td class="px-6 py-4 text-sm text-gray-700 text-center">
                            <!-- Menampilkan foto pengguna atau foto default jika bernilai null -->
                            <img src="{{ $user->foto ?? asset('path/to/default-foto.jpg') }}" alt="Foto {{ $user->nama }}" class="rounded-full w-16 h-16 object-cover">
                        </td>
                        <td class="px-6 py-4 flex justify-center space-x-2">
                        <a href="{{ route('users.show', $user->id) }}" class="bg-blue-600 text-white hover:bg-blue-400 px-4 py-2 rounded transition duration-200">Detail</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="bg-blue-600 text-white hover:bg-blue-400 px-4 py-2 rounded transition duration-200">Edit</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 text-white hover:bg-red-400 px-4 py-2 rounded transition duration-200">Hapus</button>
                        </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
