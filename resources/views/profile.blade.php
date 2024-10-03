<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ananda Karunia</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex items-center justify-center h-screen"  style="background: linear-gradient(to bottom right, #d1c6f3, #ffb6c1);">

    <div class="bg-white rounded-lg shadow-lg p-6 max-w-md text-center w-full">

        <div class="w-32 h-32 mx-auto mb-4 relative">
            <img id="mitsurikanroji" class="rounded-full border border-gray-300 object-cover w-full h-full" src="{{ asset('assets/images/mitsurikanroji.jpg') }}">
        </div>
        <div class="space-y-2">
            <div class="bg-pink-200 py-2 px-4 rounded-md text-black font-semibold">
                {{ $nama }}
            </div>
            <div class="bg-pink-200 py-2 px-4 rounded-md text-black font-semibold">
                {{ $npm }}
            </div>
            <div class="bg-pink-200 py-2 px-4 rounded-md text-black font-semibold">
                {{ $nama_kelas }}
            </div>
        </div>
    </div>

</body>
</html>