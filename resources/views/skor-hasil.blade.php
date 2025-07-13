<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if (env('APP_ENV') === 'local')
        @vite('resources/css/app.css')
    @elseif (env('APP_ENV') === 'production')
        <link rel="stylesheet" href="{{ asset('build/assets/app-CyaRXJcN.css') }}">
        <script src="{{ asset('build/assets/app-DNxiirP_.js') }}"></script>
    @endif
    <title>Skor Hasil</title>
</head>
<body class="bg-[#F7F9F2] dark:bg-slate-800">

    {{-- Progress --}}
    <div class="py-16 px-4 sm:px-12 md:px-20 lg:px-60">
        
        <div class="text-center">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-4xl lg:text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Cek Level</span> Bahagiamu!</h1>
            <p class="text-xl font-normal text-gray-500 lg:text-xl dark:text-gray-400">Lihat Seberapa Ceria Hidupmu dari Pilihanmu!</p>    
        </div>

        <div class="mt-16 grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="w-full p-6 text-center bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $nilai_kepuasan_hidup }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Nilai Kepuasan Hidup</p>
            </div>
            
            <div class="w-full p-6 text-center bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $nilai_perasaan }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Nilai Perasaan</p>
            </div>
            
            <div class="w-full p-6 text-center bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $nilai_makna_hidup }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Nilai Makna Hidup</p>
            </div>

        </div>

        <div class="mt-6">
            <div class="w-full p-6 text-center bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $indeks_kebahagiaan }}</h5>
                <p class="font-normal text-gray-700 dark:text-gray-400">Indeks Kebahagiaan</p>
            </div>
        </div>

        <div class="mt-6">
            <div class="w-full p-6 text-center bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $teks_penjelas }}</h5>
            </div>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>