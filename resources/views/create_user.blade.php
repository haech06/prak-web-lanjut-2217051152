<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title> 
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen"  style="background: linear-gradient(to bottom right, #d1c6f3, #ffb6c1);">

    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md text-center w-full">
        <h1 class="text-2xl font-semibold mb-6">Create User</h1>

        <!-- Form start -->
        <form action="{{ route('user.store') }}" method="POST" class="space-y-4">
            @csrf <!-- Token CSRF untuk keamanan -->

            <!-- Nama -->
            <div>
                <label for="nama" class="block text-left text-gray-700 font-medium">Nama</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama" class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                @foreach($errors->get('nama') as $msg)
                <p class="text-red-500 text-xs mt-1 text-left">{{$msg}}</p>
                @endforeach
            </div>

            <!-- NPM -->
            <div>
                <label for="npm" class="block text-left text-gray-700 font-medium">NPM</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                @foreach($errors->get('npm') as $msg)
                    <p class="text-red-500 text-xs mt-1 text-left"">{{$msg}}</p>
                @endforeach
            </div>

            <!-- Kelas -->
            <div>
                <label for="kelas" class="block text-left text-gray-700 font-medium">Kelas</label>
                <select id="kelas" name="kelas_id" class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
                    <option value="">Pilih Kelas</option>
                    @foreach($kelas as $kelasitem)
                        <option value="{{ $kelasitem->id }}">{{ $kelasitem->nama_kelas }}</option>
                    @endforeach
                </select>
                @foreach($errors->get('kelas_id') as $msg)
                    <p class="text-red-500 text-xs mt-1 text-left">{{$msg}}</p>
                @endforeach
            </div>

            <!-- Submit button -->
            <div>
                <button type="submit" class="w-full py-2 px-4 bg-purple-500 text-white font-semibold rounded-md shadow hover:bg-purple-600 focus:outline-none focus:ring-2 focus:ring-purple-500">
                    Submit
                </button>
            </div>
        </form>
        <!-- Form end -->
    </div>

</body>
</html>