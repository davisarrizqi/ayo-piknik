<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tiket Terbaru</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 bg-black/10">
    <x-navbar :user="$user">
        {{-- navbar here --}}
    </x-navbar>

    <div class="container w-[97%] mx-auto max-w-[70rem] flex justify-between gap-6 relative">
        
        {{-- sample generated qr code --}}
        {{-- <div class="absolute inset-0 flex w-96 h-96 left-[35%] top-[15%] items-center justify-center z-10">
            <div class="bg-white w-full h-full p-4 rounded-lg shadow-lg">
                <img class="w-full h-full" src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=Example" alt="QR Code">
            </div>
        </div> --}}

        <x-account.sidebar :user="$user">
            {{-- sidebar here --}}
        </x-account.sidebar>

        <div class="w-2/3">
            <div class="promo-banner w-full h-48 bg-blue-500/80 rounded-2xl drop-shadow-2xl mb-4">
                <div class="w-full h-full">
                    <img alt="gambar banner" class="w-full h-full opacity-90 drop-shadow-2xl object-cover" src="/images/header/banner.png">
                </div>
            </div>
            <div class="ticket-history">
                <h2 class="text-2xl font-bold mb-2">Tiket Terbaru</h2>
                
                @if ($user->reservation_details->count() == 0)
                <div class="no-ticket card flex justify-start bg-white rounded-lg shadow-md p-4 mb-4">
                    <div class="mr-4">
                        <img class="rounded-lg" src="https://ik.imagekit.io/tvlk/image/imageResource/2017/11/06/1509969696508-63e4a83e52864cf123f6cc7a9ee356fd.png?tr=q-75,w-175" alt="Sample Image">
                    </div>
                    <div class="w-2/3">
                        <h3 class="text-xl font-bold mb-2">Tidak Ada Tiket Tersedia</h3>
                        <p class="text-gray-700 mb-2 w-11/12 text-sm">Waduh, belum ada tiket yang dipesan nih. Emang yakin kamu bener bener nggak pengen liburan?</p>
                        <a href="/" class="text-blue-500 rounded-lg font-bold">Yuk Cari Tiket!</a>
                    </div>
                </div>

                @else
                    @foreach ($user->reservation_details as $reservation)
                    <div class="relative have-ticket card flex justify-start hover:scale-105 hover:bg-white/80 transition-all ease-in-out duration-300 bg-white rounded-lg drop-shadow-2xl p-4 mb-4">
                        <a href="/" class="absolute w-full h-full"></a>
                        <div class="mr-4 w-1/4">
                            <img class="w-full rounded-lg object-cover drop-shadow-md" src="https://asset.kompas.com/crops/OMWdPdZFS8UpJpupQdojw_07ixk=/0x0:1000x667/1200x800/data/photo/2020/03/10/5e677a1b83e8d.jpg" alt="Sample Image">
                        </div>
                        <div class="w-2/3">
                            <div class="top-contextor h-2/3">
                                <h3 class="text-xl font-bold">{{ $reservation->reservationDetails->place->name }}</h3>
                                <p class="text-gray-700 w-11/12 text-sm">{{ $reservation->booking_for }}</p>
                                <p class="mb-2 w-11/12 text-blue-500 text-lg font-bold">{{ $reservation->reservationDetails->unit_price * $reservation->reservationDetails->quantity }}</p>
                            </div>

                            <div class="bottom-contextor h-1/3">
                                <a href="/" class="bg-green-500 px-7 py-2 text-white rounded-lg font-bold text-sm">
                                    {{ ($reservation->status == '0') ? 'Pembayaran Ditangguhkan' : 'Pembayaran Berhasil' }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif

                <button class="hover:scale-105 transition-all ease-in-out duration-300 w-full bg-white rounded-2xl drop-shadow-2xl">
                    <h1 class="text-left pl-4 text-blue-500 font-bold py-4">
                        Lihat Semua Tiket Historikal
                    </h1>
                </button>
            </div>
        </div>
    </div>

    <x-footer>
        {{-- footer here --}}
    </x-footer>
</body>
</html>
