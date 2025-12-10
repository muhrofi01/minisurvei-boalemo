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
    <title>Kebahagiaan Hidup</title>
</head>
<body class="bg-[#F7F9F2] dark:bg-slate-800">

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
                <li class="flex items-center text-blue-600 dark:text-blue-500">
                    <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                        2
                    </div>
                    <div class="hidden sm:block">Kepuasan Hidup</div>
                    <div>
                        <svg class="w-3 h-3 mx-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </div>
                </li>
                <li class="flex items-center text-blue-600 dark:text-blue-500">
                    <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                        3
                    </div>
                    <div class="hidden sm:block">Perasaan</div>
                    <div>
                        <svg class="w-3 h-3 mx-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </div>
                </li>
                <li class="flex items-center text-blue-600 dark:text-blue-500">
                    <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                        4
                    </div>
                    <div class="hidden sm:block">Makna Hidup</div>
                    <div>
                        <svg class="w-3 h-3 mx-2 sm:ms-4 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 12 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 9 4-4-4-4M1 9l4-4-4-4"/>
                        </svg>
                    </div>
                </li>
                <li class="flex items-center text-blue-600 dark:text-blue-500">
                    <div class="flex items-center justify-center w-5 h-5 me-2 text-xs border border-blue-600 rounded-full shrink-0 dark:border-blue-500">
                        5
                    </div>
                    <div class="hidden sm:block">Kebahagiaan Hidup</div>
                </li>
            </ol>
        </div>

        {{-- Form Identitas --}}
        <div class="mt-10">
            <h6 class="text-2xl font-semibold dark:text-white">Kebahagiaan Hidup</h6>

            <form action="{{ route('kebahagiaan.store') }}" method="POST" class="mt-10">
                @csrf

                @if (session('user_id'))
                    <input type="hidden" name="user_id" value="{{ session('user_id') }}">
                @endif
                
                {{-- Pertanyaan 1 --}}
                <div class="mb-6">
                    <div class="flex justify-between">
                        <label for="steps-range-q1" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Seberapa Bahagia Anda dengan kehidupan secara keseluruhan?</label>
                        <span id="range-value-q1" class="text-sm font-medium text-gray-900 dark:text-white">5</span>
                    </div>
                    <input name="kebahagiaan_q1" id="steps-range-q1" type="range" min="1" max="10" value="5" step="1" class="w-full h-3 bg-gray-200 rounded-lg appearance-none cursor-pointer range-lg dark:bg-gray-700" data-value-id="range-value-q1">
                    <div class="flex justify-between">
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Sangat Tidak Bahagia</span>
                        <span class="text-sm font-normal text-gray-500 dark:text-gray-400">Sangat Bahagia</span>
                    </div>
                </div>

                {{-- Button Simpan --}}
                <div class="mt-6 flex justify-between">
                    <a href="{{ route('makna.get') }}" class="text-gray-900 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">Kembali</a>
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Hitung</button>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
    <script>
        document.querySelectorAll('input[type="range"]').forEach(input => {
            const valueDisplay = document.getElementById(input.dataset.valueId);
            valueDisplay.textContent = input.value;
            input.addEventListener('input', () => {
                valueDisplay.textContent = input.value;
            });
        });
    </script>
</body>
</html>