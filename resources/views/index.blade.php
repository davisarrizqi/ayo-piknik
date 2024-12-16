<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayo Piknik Yuk!</title>
    <link rel="stylesheet" href="custom/plane.css">
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 bg-black/10">
    <navbar class="flex w-full h-24 bg-blue-400 shadow-xl justify-between">
        <div class="flex icon-contextor left w-full justify-start">
            <p class="my-auto ml-10 text-2xl font-bold text-black/70">
                AYO PIKNIK
            </p>
        </div>

        <div class="flex navigator-contextor right w-full">
            <div class="flex w-full h-14 my-auto justify-end mr-10 gap-7">
                <div class="unit h-fit my-auto px-5 py-1 rounded-md outline outline-1">
                    <button class="text-lg">
                        Login
                    </button>
                </div>

                <div class="unit h-fit my-auto px-5 py-1 rounded-md outline outline-1">
                    <button class="text-lg">
                        Register
                    </button>
                </div>
            </div>
        </div>
    </navbar>

    <div class="relative flex w-full h-[30rem] justify-between mt-10">
        <div class="w-28 absolute animate-bounce">
            <img class="w-full plane-content" src="images/header/plane.png" alt="">
        </div>

        <div class="flex left-element w-full h-full">
            <div class="image-content m-auto h-full">
                <img class="m-auto h-full scale-110" src="images/header/header-image.png">
            </div>
        </div>

        <div class="flex right-element w-full mx-10 h-full -translate-x-16">
            <div class="contextor my-auto">
                <h1 class="text-5xl font-bold text-blue-500/90">
                    Dunia Itu Luas, Ayo Berwisata!
                </h1>

                <p class="text-xl mt-5 text-justify text-black/80">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae excepturi rerum obcaecati eaque dolorum reiciendis quibusdam ea libero, magni quod unde error quos enim, maxime itaque! Quidem atque dignissimos rem fugiat eaque eius vitae ab provident aliquam. Natus, eius consequuntur!
                </p>

                <div class="flex w-full button-contextor mt-5">
                    <button class="bg-blue-400 text-white/80 hover:bg-blue-600 transition-all duration-300 px-6 py-3 rounded-xl text">
                        Pesan Tiket Sekarang
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="w-[80%] mx-auto content-container bg-blue-400 rounded-3xl mt-28">
        <div class="bg-white rounded-xl mx-auto w-fit flex -translate-y-[50%]">
            <h1 class="text-xl font-bold text-blue-500/80 w-fit h-fit m-auto px-28 py-4">
                KEUNGGULAN KAMI
            </h1>
        </div>
        
        <div class="mx-auto w-[80%] h-96">

        </div>
    </div>

    <div class="m-auto w-[80%] mt-28">
        <h1 class="text-3xl text-blue-500 font-bold">
            DAPATKAN PILIHAN ANDA
        </h1>

        <div class="mt-5 w-full flex justify-around gap-5">
            @for ($i=0; $i<4; $i++)
                <div class="h-80 w-full bg-black/10 rounded-xl">

                </div>
            @endfor
        </div>

        <div class="w-full mt-5 h-96 bg-black/10 rounded-xl">
            {{-- content promotion and popup here --}}
        </div>
    </div>

    <div class="m-auto w-[80%] mt-24">
        <h1 class="text-3xl text-blue-500 font-bold">
            WISATA SEDANG RAMAI
        </h1>

        <div class="mt-5 w-full flex justify-around gap-5">
            @for ($i=0; $i<4; $i++)
                <div class="h-40 w-full bg-black/10 rounded-xl">

                </div>
            @endfor
        </div>
    </div>

    <footer class="bg-blue-400 w-full h-80 mt-24">

    </footer>
</body>
</html>