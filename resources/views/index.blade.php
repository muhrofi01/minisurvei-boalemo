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
    <title>Identitas</title>
</head>
<body class="bg-[F8F8F8] dark:bg-slate-800">

    {{-- Progress --}}
    <div class="py-16 px-4 sm:px-12 md:px-20 lg:px-60">
        <div class="text-center">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-4xl lg:text-5xl"><span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">Seberapa</span> bahagiakah kamu?</h1>
            <p class="text-xl font-normal text-gray-500 lg:text-xl dark:text-gray-400">Yuk ukur Indeks Kebahagiaanmu, hanya 5 menit!</p>    
        </div>

        <div class="mt-10">
            <ol class="flex items-center justify-center w-fit mx-auto p-3 space-x-2 text-sm font-medium text-center text-gray-500 bg-white border border-gray-200 rounded-lg shadow-xs dark:text-gray-400 sm:text-base dark:bg-gray-800 dark:border-gray-700 sm:p-4 sm:space-x-4 rtl:space-x-reverse">
                <li class="flex items-center text-blue-600 dark:text-blue-500">
                    <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                        1
                    </div>
                    <div class="hidden sm:block">Identitas</div>
                    <div>
                        <svg class="w-3 h-3 mx-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </div>
                </li>
                <li class="flex items-center">
                    <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        2
                    </div>
                    <div class="hidden sm:block">Kepuasan Hidup</div>
                    <div>
                        <svg class="w-3 h-3 mx-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </div>
                </li>
                <li class="flex items-center">
                    <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        3
                    </div>
                    <div class="hidden sm:block">Perasaan</div>
                    <div>
                        <svg class="w-3 h-3 mx-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </div>
                </li>
                <li class="flex items-center">
                    <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        4
                    </div>
                    <div class="hidden sm:block">Makna Hidup</div>
                    <div>
                        <svg class="w-3 h-3 mx-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </div>
                </li>
                <li class="flex items-center">
                    <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-gray-500 rounded-full shrink-0 dark:border-gray-400">
                        5
                    </div>
                    <div class="hidden sm:block">Kebahagiaan Hidup</div>
                </li>
            </ol>
        </div>

        {{-- Form Identitas --}}
        <div class="mt-10">
            <h6 class="text-2xl font-semibold dark:text-white">Kenalan dulu boleh kali...</h6>

            <form action="{{ route('user.store') }}" method="POST" class="mt-6">
                @csrf
                {{-- Email --}}
                <div class="mb-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                    <input type="email" id="email" value="{{ $user ? $user->email : "" }}" name="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div> 

                {{-- Nama --}}
                <div class="mb-4">
                    <label for="nama" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                    <input type="text" id="nama" value="{{ $user ? $user->nama : "" }}" name="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                {{-- Jenis Kelamin --}}
                <div class="mb-4">
                    <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jenis Kelamin</label>
                    <div class="w-full grid grid-cols-1 sm:grid-cols-2">
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm dark:border-gray-700 has-[:checked]:bg-sky-200">
                            <input id="bordered-radio-1" type="radio" value="Laki-laki" {{ ($user ? ($user->jenis_kelamin == "Laki-laki" ? "checked" : "") : "") }} name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-1" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Laki-laki</label>
                        </div>
                        <div class="flex items-center ps-4 border border-gray-200 rounded-sm dark:border-gray-700 has-[:checked]:bg-pink-200">
                            <input id="bordered-radio-2" type="radio" value="Perempuan" {{ ($user ? ($user->jenis_kelamin == "Perempuan" ? "checked" : "") : "") }} name="jenis_kelamin" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="bordered-radio-2" class="w-full py-4 ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Perempuan</label>
                        </div>    
                    </div> 
                </div>

                {{-- Umur --}}
                <div class="mb-4">
                    <label for="umur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Umur</label>
                    <input type="number" id="umur" value="{{ $user ? $user->umur : "" }}" name="umur" min="1" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                </div>

                {{-- Status Perkawinan --}}
                <div class="mb-4">
                    <label for="status_perkawinan" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status Perkawinan</label>
                    <select name="status_perkawinan" id="status_perkawinan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled></option>
                        <option value="Belum Kawin" {{ ($user ? ($user->status_perkawinan == "Belum Kawin" ? "selected" : "") : "") }}>Belum Kawin</option>
                        <option value="Kawin" {{ ($user ? ($user->status_perkawinan == "Kawin" ? "selected" : "") : "") }}>Kawin</option>
                        <option value="Cerai Hidup" {{ ($user ? ($user->status_perkawinan == "Cerai Hidup" ? "selected" : "") : "") }}>Cerai Hidup</option>
                        <option value="Cerai Mati" {{ ($user ? ($user->status_perkawinan == "Cerai Mati" ? "selected" : "") : "") }}>Cerai Mati</option>
                    </select>
                </div>

                {{-- Pendidikan Terakhir --}}
                <div class="mb-4">
                    <label for="pendidikan_terakhir" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pendidikan Tertinggi</label>
                    <select name="pendidikan_tertinggi" id="pendidikan_terakhir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected disabled></option>
                        <option value="SD/MI/Sederajat" {{ ($user ? ($user->pendidikan_tertinggi == "SD/MI/Sederajat" ? "selected" : "") : "") }}>SD/MI/Sederajat</option>
                        <option value="SMP/MTs/Sederajat" {{ ($user ? ($user->pendidikan_tertinggi == "SMP/MTs/Sederajat" ? "selected" : "") : "") }}>SMP/MTs/Sederajat</option>
                        <option value="SMA/K/MA/K/Sederajat" {{ ($user ? ($user->pendidikan_tertinggi == "SMA/K/MA/K/Sederajat" ? "selected" : "") : "") }}>SMA/K/MA/K/Sederajat</option>
                        <option value="D1/D2/D3" {{ ($user ? ($user->pendidikan_tertinggi == "D1/D2/D3" ? "selected" : "") : "") }}>D1/D2/D3</option>
                        <option value="D4/S1" {{ ($user ? ($user->pendidikan_tertinggi == "D4/S1" ? "selected" : "") : "") }}>D4/S1</option>
                        <option value="S2" {{ ($user ? ($user->pendidikan_tertinggi == "S2" ? "selected" : "") : "") }}>S2</option>
                        <option value="S3" {{ ($user ? ($user->pendidikan_tertinggi == "S3" ? "selected" : "") : "") }}>S3</option>
                    </select>
                </div>

                {{-- Nomor HP --}}
                <div class="mb-4">
                    <label for="nomor_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor HP</label>
                    <input type="text" id="nomor_hp" value="{{ $user ? $user->nomor_hp : "" }}" name="nomor_hp" aria-describedby="helper-text-explanation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"required />
                </div>
                
                {{-- Button Simpan --}}
                <div class="mt-6 flex justify-end">
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>