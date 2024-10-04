@extends('layouts.app')

@section('content')
<div class="flex items-center justify-center min-h-screen" style="background: linear-gradient(to bottom right, #d1c6f3, #ffb6c1);">
    <div class="bg-white rounded-lg shadow-lg p-8 w-full max-w-5xl">
        <h1 class="text-4xl font-bold mb-8 text-center text-gray-800">Daftar Pengguna</h1>
        
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg border border-gray-300 shadow-md">
                <thead>
                    <tr class="bg-gradient-to-r from-purple-600 to-pink-500 text-white text-left">
                        <th class="px-6 py-4 text-sm font-semibold text-center">ID</th>
                        <th class="px-6 py-4 text-sm font-semibold text-center">Nama</th>
                        <th class="px-6 py-4 text-sm font-semibold text-center">NPM</th>
                        <th class="px-6 py-4 text-sm font-semibold text-center">Kelas</th>
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
                        <td class="px-6 py-4 flex justify-center space-x-2">
                    <a href="#" class="bg-blue-600 text-white hover:bg-blue-400 px-4 py-2 rounded transition duration-200">Edit</a>
                    <a href="#" class="text-white bg-red-500 hover:bg-red-400 px-4 py-2 rounded transition duration-200 shadow">Hapus</a>
    </td>

</td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
