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
            </div>

            <!-- NPM -->
            <div>
                <label for="npm" class="block text-left text-gray-700 font-medium">NPM</label>
                <input type="text" id="npm" name="npm" placeholder="Masukkan NPM" class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
            </div>

            <!-- Kelas -->
            <div>
                <label for="kelas" class="block text-left text-gray-700 font-medium">Kelas</label>
                <input type="text" id="kelas" name="kelas" placeholder="Masukkan kelas" class="w-full mt-1 px-3 py-2 border rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-purple-500">
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