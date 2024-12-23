<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Detail</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 bg-black/10">
    <x-navbar>
        {{-- navbar here --}}
    </x-navbar>

    <div class="header-image container mx-auto px-6 rounded-lg flex gap-5">
        <div class="w-1/2">
            <img src="https://asset.kompas.com/crops/5HTgtdqk1nAd9g8oj9lPHQyNUlU=/0x0:750x500/1200x800/data/photo/2023/07/13/64af70ba9e5c5.jpeg" alt="Header Image" class="w-full h-auto rounded-lg">
        </div>

        <div class="w-1/2 grid grid-cols-2 gap-x-4 gap-y-2">
            @for ($i = 1; $i <= 4; $i++)
            <div class="relative">
                <img src="https://asset.kompas.com/crops/5HTgtdqk1nAd9g8oj9lPHQyNUlU=/0x0:750x500/1200x800/data/photo/2023/07/13/64af70ba9e5c5.jpeg" alt="Image {{ $i }}" class="w-full h-auto rounded-lg transition-transform duration-300 hover:scale-105 hover:cursor-pointer">
            </div>
            @endfor
        </div>
    </div>

    <div class="w-[97%] mx-auto px-6 py-3 mt-6 bg-white rounded-lg flex justify-between items-center">
        <div>
            <div class="text-xl font-semibold">
                Nama Tempat
            </div>
            <div class="text-sm text-gray-500">
                Nama Kota
            </div>
        </div>
        <div class="text-right">
            <div class="text-lg font-semibold text-green-500">
                Rp. 100.000
            </div>
            <button class="mt-1 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-300">
                Pesan Tiket
            </button>
        </div>
    </div>

    <div class="w-[97%] mx-auto px-6 py-6 mt-6 bg-white rounded-lg flex gap-6">
        <div class="w-1/2">
            <div class="text-xl font-semibold mb-4">
                Deskripsi
            </div>
            <div class="text-sm text-gray-500 mb-6">
                Ini adalah deskripsi singkat mengenai tempat wisata ini. Tempat ini sangat indah dan menarik untuk dikunjungi bersama keluarga dan teman-teman.
            </div>
            <div class="grid gap-4">
                @for ($i = 1; $i <= 3; $i++)
                <div>
                    <img src="https://asset.kompas.com/crops/5HTgtdqk1nAd9g8oj9lPHQyNUlU=/0x0:750x500/1200x800/data/photo/2023/07/13/64af70ba9e5c5.jpeg" alt="Deskripsi Image {{ $i }}" class="w-full h-auto rounded-lg">
                </div>
                @endfor
            </div>
        </div>
        <div class="w-1/2 bg-gray-100 p-6 rounded-lg flex flex-col justify-between sticky top-24 h-fit">
            <div>
                <div class="text-lg font-semibold text-gray-700">
                    Tiket Masuk
                </div>
                <div class="text-2xl font-bold text-green-500 mt-2">
                    Rp. 100.000
                </div>
            </div>
            <button class="mt-4 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition-colors duration-300">
                Pesan Sekarang
            </button>
        </div>
    </div>
    
    <div class="w-[97%] mx-auto px-6 py-6 mt-6 bg-white rounded-lg flex gap-6">
        <div class="w-1/3">
            <div class="text-xl font-semibold mb-4">
                Fasilitas Tempat Wisata
            </div>
            <div class="grid grid-cols-2 gap-x-10 gap-y-2 w-fit">
                @for ($i = 1; $i <= 5; $i++)
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-gray-700">Fasilitas {{ $i }}</span>
                </div>
                @endfor
            </div>
        </div>
        <div class="w-1/3">
            <div class="text-xl font-semibold mb-4">
                Yang Unik dari Tempat Ini
            </div>
            <div class="grid grid-cols-2 gap-x-10 gap-y-2 w-fit">
                @for ($i = 1; $i <= 5; $i++)
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                    </svg>
                    <span class="text-gray-700">Unik {{ $i }}</span>
                </div>
                @endfor
            </div>
        </div>
    </div>

    <div class="w-[97%] mx-auto px-6 py-6 mt-6 bg-white rounded-lg flex gap-6">
        <div class="w-1/2">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.019112484578!2d144.9630579153169!3d-37.81410797975195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d1f9b1b1b1b1!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1633072800000!5m2!1sen!2sau" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="w-1/2">
            <div class="text-xl font-semibold">
                Lokasi
            </div>
            <div class="text-sm text-gray-500">
                Alamat lengkap lokasi wisata beserta deskripsi singkat mengenai tempat tersebut.
            </div>
        </div>
    </div>

    <div class="w-[97%] mx-auto px-6 py-6 mt-6 bg-white rounded-lg">
        <div class="text-xl font-semibold mb-4">
            Rekomendasi Tempat Lainnya
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
            @for ($i = 1; $i <= 5; $i++)
            <a href="#" class="block bg-gray-100 rounded-lg overflow-hidden shadow-lg transition-transform duration-300 hover:scale-105">
                <img src="https://asset.kompas.com/crops/5HTgtdqk1nAd9g8oj9lPHQyNUlU=/0x0:750x500/1200x800/data/photo/2023/07/13/64af70ba9e5c5.jpeg" alt="Rekomendasi {{ $i }}" class="w-full h-32 object-cover">
                <div class="p-4">
                    <div class="text-lg font-semibold">
                        Tempat Rekomendasi {{ $i }}
                    </div>
                    <div class="text-sm text-gray-500 mb-2">
                        Deskripsi singkat mengenai tempat rekomendasi ini.
                    </div>
                    <div class="text-lg font-semibold text-green-500">
                        Rp. 100.000
                    </div>
                </div>
            </a>
            @endfor
        </div>
    </div>

    <div class="w-[97%] mx-auto px-6 py-6 mt-6 bg-white rounded-lg">
        <div class="text-xl font-semibold mb-4">
            Deskripsi Lengkap
        </div>
        <div class="text-sm text-gray-500">
            Ini adalah deskripsi lengkap mengenai tempat wisata ini. Tempat ini sangat indah dan menarik untuk dikunjungi bersama keluarga dan teman-teman. Anda dapat menikmati pemandangan yang menakjubkan, fasilitas yang lengkap, dan berbagai aktivitas menarik yang tersedia di sini. Jangan lewatkan kesempatan untuk mengunjungi tempat ini dan menciptakan kenangan indah bersama orang-orang terdekat Anda.
        </div>
    </div>

    <x-footer>
        {{-- footer here --}}
    </x-footer>
</body>
</html>
