@props(['user'])

<div class="w-1/3 bg-white pb-3 rounded-2xl drop-shadow-2xl">
    <div class="pt-4 pb-0 w-[90%] mx-auto">
        <div class="user-identity mb-4 flex items-center">
            <div class="w-16 h-16 rounded-full bg-black/10 flex items-center justify-center mr-4 drop-shadow-2xl">
                <img class="object-cover w-[85%] h-[85%] rounded-full drop-shadow-2xl" src="/{{ $user->profile_image }}" alt="User Image">
            </div>
            <div class="w-[13rem] ">
                <h2 class="text-lg font-bold">{{ Str::limit($user->name, 17) }}</h2>
                <div class="w-full flex">
                    <p class="w-6/12 text-sm">Tiket Akumulasi</p>
                    <p class="w-2/12 text-sm text-center">:</p>
                    <p class="w-4/12 text-sm font-bold">{{ $user->reservation_details->count() }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full border-t-2 border-b-2 block mt-4">
        <button class="mt-2 pl-5 w-full text-left duration-300 ease-in-out transition-all hover:bg-blue-500 text-black/80 hover:text-white py-2 mb-2 flex items-center">
            <svg class="w-6 h-6 mr-2" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M732.1 399.3C534.6 356 696.5 82.1 425.9 104.8s-527.2 645.8-46.8 791.7 728-415 353-497.2z" fill="#464BD8"></path><path d="M539.5 838.8c-1.4 0-2.9-0.3-4.2-1L330.1 730.3a8.95 8.95 0 0 1-3.8-12.1L529 331.1a8.92 8.92 0 0 1 8-4.8c1.4 0 2.9 0.3 4.2 1l205.2 107.5c4.4 2.3 6.1 7.7 3.8 12.1L547.4 834a8.92 8.92 0 0 1-7.9 4.8z" fill="#514DDF"></path><path d="M537 335.3l205.2 107.5-202.7 387-205.2-107.4L537 335.3m0-17.9c-1.8 0-3.6 0.3-5.3 0.8-4.5 1.4-8.3 4.6-10.5 8.8L318.4 714.1a17.9 17.9 0 0 0 7.6 24.2l205.2 107.5c2.6 1.4 5.4 2 8.3 2 1.8 0 3.6-0.3 5.3-0.8 4.5-1.4 8.3-4.6 10.5-8.8L758.1 451a17.88 17.88 0 0 0-7.6-24.1L545.3 319.4c-2.5-1.3-5.4-2-8.3-2z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-2-0.2-2.9-0.5l-254-87a8.98 8.98 0 0 1-5.6-11.4L440 257.4c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l254 87c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-164 479.3c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M448.6 260.4l254 87-164.2 479.1-254-87 164.2-479.1m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3L267.5 733.7c-3.2 9.4 1.8 19.5 11.1 22.7l254 87c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l164.1-479.2c3.2-9.4-1.8-19.5-11.1-22.7l-254-87c-1.9-0.6-3.9-0.9-5.8-0.9z" fill="#151B28"></path><path d="M448.6 323c-6.9 0-13.7-1.1-20.3-3.4-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8a62.83 62.83 0 0 1-59.3 42.4z" fill="#FFFFFF"></path><path d="M448.6 260.4l50.8 17.4a53.82 53.82 0 0 1-50.8 36.3c-5.8 0-11.6-0.9-17.4-2.9l17.4-50.8m0-17.9c-7.4 0-14.4 4.7-16.9 12.1l-17.4 50.8c-1.5 4.5-1.2 9.4 0.9 13.7 2.1 4.3 5.8 7.5 10.3 9.1 7.5 2.6 15.3 3.9 23.2 3.9a71.6 71.6 0 0 0 67.7-48.4c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1l-50.8-17.4c-2-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M685.1 407.1c-1 0-2-0.2-2.9-0.5a62.74 62.74 0 0 1-39-79.6c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c4.7 1.6 7.2 6.7 5.6 11.4L693.6 401c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M651.7 330l50.8 17.4-17.4 50.8a53.8 53.8 0 0 1-33.4-68.2m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3c-12.8 37.3 7.2 78.1 44.5 90.9 1.9 0.7 3.9 1 5.8 1 7.4 0 14.4-4.7 16.9-12.1l17.4-50.8c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1L657.5 313c-1.8-0.6-3.8-0.9-5.8-0.9z" fill="#151B28"></path><path d="M335.3 765.9c-1 0-2-0.2-2.9-0.5L281.6 748c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c0.8-2.2 2.4-4.1 4.5-5.1a8.9 8.9 0 0 1 6.8-0.4 62.74 62.74 0 0 1 39 79.6c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.5-2.7 0.8-4 0.8z" fill="#FFFFFF"></path><path d="M301.9 688.8c28.1 9.6 43 40.1 33.4 68.2l-50.8-17.4 17.4-50.8m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3l-17.4 50.8c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3 6.2-18.1 5-37.5-3.4-54.7-8.4-17.2-23-30-41.1-36.2-1.9-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-1.9-0.2-2.9-0.5l-50.8-17.4c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8a62.75 62.75 0 0 1 59.2-42.4c6.9 0 13.8 1.1 20.4 3.4 2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-17.4 50.8a9.01 9.01 0 0 1-8.5 6.1z" fill="#FFFFFF"></path><path d="M538.4 772.8c5.8 0 11.7 0.9 17.5 2.9l-17.4 50.8-50.8-17.4a53.56 53.56 0 0 1 50.7-36.3m0-17.9v17.9-17.9a71.6 71.6 0 0 0-67.7 48.4c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l17.4-50.8c3.2-9.4-1.8-19.5-11.1-22.7-7.6-2.6-15.4-3.9-23.3-3.9z" fill="#151B28"></path><path d="M493.6 692.4c-16.4 0-32.6-2.7-48.3-8.1-1-0.4-2.2-0.7-3.4-1.3a148.5 148.5 0 0 1-97.2-143c0-0.8 0.2-1.7 0.4-2.4l27.6-80.6c0.3-0.8 0.7-1.5 1.2-2.2 27.9-37.8 72.7-60.3 119.7-60.3 16.4 0 32.6 2.7 48.2 8.1 51.5 17.6 89.2 61.9 98.4 115.5 1.7 9.5 2.5 19.2 2.3 28.8 0 0.8-0.2 1.6-0.4 2.4l-27.6 80.6c-0.3 0.8-0.7 1.5-1.2 2.2-28 37.7-72.7 60.3-119.7 60.3z" fill="#FFFFFF"></path><path d="M493.5 402.6c15.1 0 30.5 2.5 45.6 7.6 50.3 17.2 84.6 60.1 93 109.2 1.6 8.9 2.4 18.1 2.2 27.2l-27.6 80.6a141.19 141.19 0 0 1-113.1 57.1c-15.1 0-30.5-2.5-45.7-7.6-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-57.7-21.3-93.3-76.6-91.9-135.2l27.6-80.6c26.4-35.8 68.7-57 113.1-57m0-16.3c-49.6 0-96.8 23.8-126.3 63.6-1 1.3-1.8 2.8-2.3 4.4l-27.6 80.6c-0.5 1.6-0.8 3.2-0.9 4.9a156.78 156.78 0 0 0 102.3 150.7l3.8 1.5c16.5 5.7 33.6 8.5 50.9 8.5 49.6 0 96.7-23.8 126.2-63.6 1-1.3 1.8-2.8 2.3-4.4l27.6-80.6c0.5-1.6 0.8-3.2 0.9-4.9 0.3-10.1-0.6-20.4-2.4-30.5a156.69 156.69 0 0 0-103.8-121.7c-16.3-5.6-33.4-8.5-50.7-8.5z" fill="#151B28"></path><path d="M634.3 546.6l-27.6 80.6c-35.5 48-99.2 69.8-158.8 49.4-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-43.1-31.7-62.9-88.9-44.6-142.2 22.5-65.7 94-100.7 159.6-78.3a125.1 125.1 0 0 1 72.5 64.4 140 140 0 0 1 2.1 27.4z" fill="#2AEFC8"></path><path d="M456.5 496.9c-11 5.4-18 10.7-22.3 23.3-4.8 14.1 1.3 26.5 14.5 31 34.1 11.7 45.7-54.8 94.4-38.1 21.3 7.3 31.1 25.7 26.7 47.7l22.3 7.6-4.2 12.2-22.1-7.6c-6.4 14-18.5 25.7-30.3 32l-8.6-11.7c11.4-6.4 22.1-15.5 26.9-29.6 5.9-17.3-0.5-29.3-15.1-34.3-38.1-13.1-50.7 53.1-94.9 37.9-19.7-6.7-29.4-24.9-25.7-44.9l-22.3-7.6 4.2-12.2 22.1 7.6c6.3-13.8 16.3-20.7 27.4-25.6l7 12.3z" fill=""></path></g></svg>
            <table class="w-[80%]">
                <tr>
                    <td class="w-4/12">
                        Akumulasi
                    </td>
                    <td class="">
                        :
                    </td>
                    <td class="font-bold w-5/12 text-right">
                        Rp
                        {{ $user->reservation_details->sum(function($reservation) {
                            return $reservation->reservationDetails->unit_price * $reservation->reservationDetails->quantity;
                        }) }}
                    </td>
                </tr>
            </table>
        </button>
        <button class="pl-5 w-full text-left duration-300 ease-in-out transition-all hover:bg-blue-500 text-black/80 hover:text-white py-2 flex items-center">
            <svg class="mr-2 w-6 h-6" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M732.1 399.3C534.6 356 696.5 82.1 425.9 104.8s-527.2 645.8-46.8 791.7 728-415 353-497.2z" fill="#464BD8"></path><path d="M276.8 449.8c0 37 30 66.9 66.9 66.9h319c9.6 0 17.4 7.8 17.4 17.4v234.7c0 9.6-7.8 17.4-17.4 17.4H389.3c-62.2 0-112.5-50.4-112.5-112.5V442.3" fill="#FFFFFF"></path><path d="M662.8 795.5H389.3c-67.2 0-121.8-54.6-121.8-121.8V442.3c0-5.1 4.1-9.3 9.3-9.3s9.3 4.1 9.3 9.3v7.6c0 31.8 25.9 57.7 57.7 57.7h319c14.7 0 26.6 12 26.6 26.6v234.7c0 14.6-11.9 26.6-26.6 26.6zM286.1 499.6v174.1c0 57 46.3 103.3 103.3 103.3h273.4c4.5 0 8.1-3.6 8.1-8.1V534.2c0-4.5-3.6-8.1-8.1-8.1h-319a76.2 76.2 0 0 1-57.7-26.5z" fill="#151B28"></path><path d="M662.8 795.5H389.3c-67.2 0-121.8-54.6-121.8-121.8V447.1c0-40.6 33.1-73.7 73.7-73.7h319.7c5.1 0 9.3 4.1 9.3 9.3s-4.1 9.3-9.3 9.3H341.2c-30.4 0-55.2 24.8-55.2 55.2v2.7c0 31.8 25.9 57.7 57.7 57.7h319c14.7 0 26.6 12 26.6 26.6v234.7a26.5 26.5 0 0 1-26.5 26.6zM286.1 499.6v174.1c0 57 46.3 103.3 103.3 103.3h273.4c4.5 0 8.1-3.6 8.1-8.1V534.2c0-4.5-3.6-8.1-8.1-8.1h-319a76.2 76.2 0 0 1-57.7-26.5z" fill="#151B28"></path><path d="M589.3 517H384.7V320.3c0-10.2 8.3-18.4 18.4-18.4h167.7c10.2 0 18.4 8.3 18.4 18.4V517z" fill="#2AEFC8"></path><path d="M589.3 525.5H384.7a8.5 8.5 0 0 1-8.5-8.5V320.3c0-14.8 12.1-26.9 26.9-26.9h167.7c14.8 0 26.9 12.1 26.9 26.9V517c0.1 4.7-3.7 8.5-8.4 8.5z m-196.1-17h187.7V320.3c0-5.5-4.5-10-10-10H403.1c-5.5 0-10 4.5-10 10v188.2z" fill="#151B28"></path><path d="M422.2 307.7h44.9V511h-44.9z" fill="#FFFFFF"></path><path d="M467.1 515.7h-44.9a4.8 4.8 0 0 1-4.8-4.8V307.7c0-2.6 2.1-4.8 4.8-4.8h44.9c2.6 0 4.8 2.1 4.8 4.8V511c0 2.6-2.2 4.7-4.8 4.7z m-40.1-9.5h35.4V312.4H427v193.8z m74.6-178h15.5v42.5h-15.5zM501.6 386.1h15.5v104.5h-15.5zM542.2 328.2h15.5v162.4h-15.5z" fill="#151B28"></path><path d="M694.1 588.8H521.5c-25.7 0-48.6 18.8-51 44.3-2.8 29.3 20.2 54 48.9 54h174.7c5.8 0 10.4-4.7 10.4-10.4v-77.5c0-5.7-4.6-10.4-10.4-10.4z" fill="#464BD8"></path><path d="M694.1 696.1H519.4c-16.3 0-32-6.9-43-19a58.23 58.23 0 0 1-14.8-44.8c2.8-29.4 29.1-52.4 60-52.4h172.6c10.7 0 19.4 8.7 19.4 19.4v77.5c-0.1 10.6-8.8 19.3-19.5 19.3z m-172.6-98.3c-21.7 0-40.2 15.9-42.1 36.2a39.63 39.63 0 0 0 10.3 31 40.3 40.3 0 0 0 29.8 13.2h174.7c0.8 0 1.5-0.7 1.5-1.5v-77.5c0-0.8-0.7-1.5-1.5-1.5l-172.7 0.1z" fill="#151B28"></path><path d="M523.3 638m-22.8 0a22.8 22.8 0 1 0 45.6 0 22.8 22.8 0 1 0-45.6 0Z" fill="#FFFFFF"></path></g></svg>
            <table class="w-[80%]">
                <tr>
                    <td class="w-4/12">
                        Refund
                    </td>
                    <td class="">
                        :
                    </td>
                    <td class="font-bold w-5/12 text-right">
                        Rp
                        {{ $user->refund->sum(function($refund_num) {
                            return ($refund_num->reservations->reservationDetails->unit_price * $refund_num->reservations->reservationDetails->quantity);
                        }) }}
                    </td>
                </tr>
            </table>
        </button>
    </div>

    <div class="w-full border-b-2 block">
        <a href="/cart" class="mt-2 pl-5 w-full text-left duration-300 ease-in-out transition-all {{ (request()->path() == 'cart') ? 'bg-blue-500 text-white' : 'hover:bg-blue-500 text-black/80 hover:text-white' }} py-2 mb-2 flex items-center">
            <svg class="mr-2 w-6 h-6" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M696.2 411.6C498.7 368.3 660.6 94.4 390 117.1s-527.2 645.8-46.8 791.7 727.9-414.9 353-497.2z" fill="#464BD8"></path><path d="M391.4 235.6l-98.6 501.9V235.6zM407 235.6L303.8 761l-11-2.2v-21.3l98.6-501.9z" fill="#2E2E42"></path><path d="M421.1 235.6l1.4 0.3L318.8 764l-15-3L407 235.6z" fill="#2D2D41"></path><path d="M318.831263 764.004291l103.752737-528.002821 15.012903 2.95004L333.844166 766.954332z" fill="#2D2D40"></path><path d="M333.78964 766.951693l103.752737-528.002821L452.55528 241.898912 348.802543 769.901734z" fill="#2C2C3F"></path><path d="M348.846315 769.916588l103.752736-528.002821L467.611954 244.863807 363.859218 772.866629z" fill="#2B2B3E"></path><path d="M363.805673 772.863183l103.752736-528.002821 15.012903 2.95004L378.818576 775.813224z" fill="#2A2A3D"></path><path d="M378.862174 775.829867l103.752736-528.002822 15.012903 2.950041L393.875077 778.779907z" fill="#2A2A3C"></path><path d="M393.820725 778.77548l103.752736-528.002821 15.012903 2.95004L408.833628 781.725521z" fill="#29293B"></path><path d="M408.780083 781.722075l103.752736-528.002822 15.012903 2.950041L423.792986 784.672116z" fill="#28283A"></path><path d="M423.855057 784.589654l103.752737-528.002822 15.012903 2.950041L438.86796 787.539694z" fill="#282839"></path><path d="M438.814416 787.536248l103.752736-528.002821 15.012903 2.95004L453.827319 790.486289z" fill="#272738"></path><path d="M453.871897 790.502125l103.752737-528.002822 15.012903 2.950041L468.8848 793.452165z" fill="#262637"></path><path d="M468.828486 793.449353l103.752736-528.002822 15.012903 2.950041L483.841389 796.399393z" fill="#252536"></path><path d="M483.885968 796.415229l103.752736-528.002822 15.012903 2.950041L498.898871 799.365269z" fill="#252534"></path><path d="M498.844519 799.360842l103.752736-528.002821 15.012903 2.95004L513.857422 802.310883z" fill="#242433"></path><path d="M513.902 802.326719l103.752737-528.002822 15.012903 2.950041L528.914903 805.276759z" fill="#232332"></path><path d="M528.860377 805.274121l103.752737-528.002822 15.012903 2.950041L543.87328 808.224161z" fill="#222231"></path><path d="M543.917052 808.239016l103.752736-528.002822 15.012903 2.950041L558.929955 811.189056z" fill="#222230"></path><path d="M558.875429 811.186418l103.752736-528.002822 15.012903 2.950041L573.888332 814.136458z" fill="#21212F"></path><path d="M573.932911 814.152294l103.752736-528.002822 15.012903 2.950041L588.945814 817.102334z" fill="#20202E"></path><path d="M588.891462 817.097907l103.752736-528.002821 15.012903 2.95004L603.904365 820.047948z" fill="#20202D"></path><path d="M603.947962 820.064591l103.752736-528.002822 15.012903 2.950041L618.960865 823.014631z" fill="#1F1F2C"></path><path d="M618.90732 823.011186l103.752737-528.002822L737.67296 297.958405 633.920223 825.961226z" fill="#1E1E2B"></path><path d="M633.964802 825.977062l103.752736-528.002822L752.730441 300.924281 648.977705 828.927102z" fill="#1D1D2A"></path><path d="M752.7 300.8l15 2.9-103.2 525.4h-14.1l-1.5-0.3z" fill="#1D1D29"></path><path d="M767.7 303.7l11 2.2v21.3l-98.6 501.9h-15.6zM680.1 829.1l98.6-501.9v501.9z" fill="#1C1C28"></path><path d="M646 807.5c-1.6 0-3.2-0.2-4.8-0.5l-307-60.3c-6.4-1.3-12-4.9-15.6-10.4-3.6-5.4-5-12-3.7-18.4l86.6-441c2.3-11.5 12.3-19.8 24-19.8 1.6 0 3.2 0.2 4.8 0.5l307 60.3c13.3 2.6 21.9 15.5 19.3 28.7l-86.6 441c-2.3 11.6-12.4 19.9-24 19.9z" fill="#FFFFFF"></path><path d="M646 807.5c-1.6 0-3.2-0.2-4.8-0.5l-307-60.3c-6.4-1.3-12-4.9-15.6-10.4-3.6-5.4-5-12-3.7-18.4l86.6-441c2.3-11.5 12.3-19.8 24-19.8 1.6 0 3.2 0.2 4.8 0.5l307 60.3c13.3 2.6 21.9 15.5 19.3 28.7l-86.6 441c-2.3 11.6-12.4 19.9-24 19.9z" fill="#FFFFFF"></path><path d="M640.2 793.7c-1.4 0-2.8-0.1-4.2-0.4l-269.8-53c-5.6-1.1-10.5-4.3-13.7-9.1-3.2-4.8-4.4-10.5-3.2-16.2l76.1-387.5c2-10.1 10.8-17.4 21.1-17.4 1.4 0 2.8 0.1 4.2 0.4l269.8 53c11.6 2.3 19.3 13.6 17 25.3l-76.1 387.5c-2.1 10.1-10.9 17.4-21.2 17.4z" fill="#2AEFC8"></path><path d="M674.4 274.5c1.4-2.7 2.6-5.6 3.2-8.8 3.6-17.8-8.1-35.1-25.9-38.6l-90.4-17.8c-17.8-3.5-35.1 8.1-38.6 25.9-0.6 3.1-0.6 6.1-0.4 9.1-24.4-3-45.2 4.5-48.4 21.2l234.2 47.6c3.2-16-11.6-31.6-33.7-38.6z" fill="#514DDF"></path><path d="M708.1 322.1c-0.6 0-1.2-0.1-1.8-0.2l-234.1-47.6c-4.8-1-7.9-5.7-7-10.5 3.6-18.6 22.6-30 48.6-29.1 0.1-0.4 0.1-0.8 0.2-1.3 4.4-22.6 26.5-37.4 49.1-33l90.4 17.8c11 2.2 20.5 8.5 26.7 17.8 6.2 9.3 8.4 20.4 6.2 31.3-0.1 0.6-0.3 1.2-0.4 1.9 21.9 9.9 34.4 27.8 30.9 45.6-0.5 2.3-1.8 4.4-3.8 5.7-1.5 1.1-3.3 1.6-5 1.6z m-220.4-62.8L697.9 302c-3.7-7.7-13.3-14.9-26.2-19-2.5-0.8-4.5-2.7-5.6-5.1-1-2.4-0.9-5.2 0.3-7.5 1.2-2.4 2-4.4 2.4-6.3 1.3-6.3 0-12.6-3.6-17.9-3.6-5.3-9-9-15.3-10.2l-90.4-17.8c-13-2.5-25.5 5.9-28.1 18.9-0.4 1.9-0.4 4-0.2 6.6 0.2 2.7-0.8 5.3-2.7 7.2-1.9 1.9-4.6 2.7-7.3 2.4-14.5-1.9-26.8 0.5-33.5 6z" fill="#29293A"></path><path d="M602 269.5c-8.3-1.6-13.6-9.6-12-17.9 1.6-8.3 9.6-13.6 17.9-12 8.3 1.6 13.6 9.6 12 17.9-1.7 8.3-9.7 13.6-17.9 12z" fill="#FFFFFF"></path><path d="M550.515 420.205l150.843 31.03-2.62 12.734-150.843-31.03zM428.579 445.695l262.8 54.062-2.62 12.734-262.8-54.063zM418.577 494.19l262.8 54.063-2.62 12.734-262.8-54.063zM408.596 542.589l262.8 54.062-2.62 12.734-262.8-54.063zM398.595 591.085l262.8 54.062-2.62 12.734-262.8-54.063zM388.009 642.725l188.651 38.81-2.62 12.733-188.65-38.81z" fill="#514DDF"></path></g></svg>
            <span>
            Tiket Terbaru 
            </span>
        </a>
        <a href="/history" class="pl-5 w-full text-left duration-300 ease-in-out transition-all {{ (request()->path() == 'history') ? 'bg-blue-500 text-white' : 'hover:bg-blue-500 text-black/80 hover:text-white' }} py-2 flex items-center">
            <svg class="mr-2 w-6 h-6" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M732.1 399.3C534.6 356 696.5 82.1 425.9 104.8s-527.2 645.8-46.8 791.7 728-415 353-497.2z" fill="#464BD8"></path><path d="M539.5 838.8c-1.4 0-2.9-0.3-4.2-1L330.1 730.3a8.95 8.95 0 0 1-3.8-12.1L529 331.1a8.92 8.92 0 0 1 8-4.8c1.4 0 2.9 0.3 4.2 1l205.2 107.5c4.4 2.3 6.1 7.7 3.8 12.1L547.4 834a8.92 8.92 0 0 1-7.9 4.8z" fill="#514DDF"></path><path d="M537 335.3l205.2 107.5-202.7 387-205.2-107.4L537 335.3m0-17.9c-1.8 0-3.6 0.3-5.3 0.8-4.5 1.4-8.3 4.6-10.5 8.8L318.4 714.1a17.9 17.9 0 0 0 7.6 24.2l205.2 107.5c2.6 1.4 5.4 2 8.3 2 1.8 0 3.6-0.3 5.3-0.8 4.5-1.4 8.3-4.6 10.5-8.8L758.1 451a17.88 17.88 0 0 0-7.6-24.1L545.3 319.4c-2.5-1.3-5.4-2-8.3-2z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-2-0.2-2.9-0.5l-254-87a8.98 8.98 0 0 1-5.6-11.4L440 257.4c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l254 87c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-164 479.3c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M448.6 260.4l254 87-164.2 479.1-254-87 164.2-479.1m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3L267.5 733.7c-3.2 9.4 1.8 19.5 11.1 22.7l254 87c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l164.1-479.2c3.2-9.4-1.8-19.5-11.1-22.7l-254-87c-1.9-0.6-3.9-0.9-5.8-0.9z" fill="#151B28"></path><path d="M448.6 323c-6.9 0-13.7-1.1-20.3-3.4-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8a62.83 62.83 0 0 1-59.3 42.4z" fill="#FFFFFF"></path><path d="M448.6 260.4l50.8 17.4a53.82 53.82 0 0 1-50.8 36.3c-5.8 0-11.6-0.9-17.4-2.9l17.4-50.8m0-17.9c-7.4 0-14.4 4.7-16.9 12.1l-17.4 50.8c-1.5 4.5-1.2 9.4 0.9 13.7 2.1 4.3 5.8 7.5 10.3 9.1 7.5 2.6 15.3 3.9 23.2 3.9a71.6 71.6 0 0 0 67.7-48.4c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1l-50.8-17.4c-2-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M685.1 407.1c-1 0-2-0.2-2.9-0.5a62.74 62.74 0 0 1-39-79.6c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c4.7 1.6 7.2 6.7 5.6 11.4L693.6 401c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M651.7 330l50.8 17.4-17.4 50.8a53.8 53.8 0 0 1-33.4-68.2m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3c-12.8 37.3 7.2 78.1 44.5 90.9 1.9 0.7 3.9 1 5.8 1 7.4 0 14.4-4.7 16.9-12.1l17.4-50.8c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1L657.5 313c-1.8-0.6-3.8-0.9-5.8-0.9z" fill="#151B28"></path><path d="M335.3 765.9c-1 0-2-0.2-2.9-0.5L281.6 748c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c0.8-2.2 2.4-4.1 4.5-5.1a8.9 8.9 0 0 1 6.8-0.4 62.74 62.74 0 0 1 39 79.6c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.5-2.7 0.8-4 0.8z" fill="#FFFFFF"></path><path d="M301.9 688.8c28.1 9.6 43 40.1 33.4 68.2l-50.8-17.4 17.4-50.8m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3l-17.4 50.8c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3 6.2-18.1 5-37.5-3.4-54.7-8.4-17.2-23-30-41.1-36.2-1.9-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-1.9-0.2-2.9-0.5l-50.8-17.4c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8a62.75 62.75 0 0 1 59.2-42.4c6.9 0 13.8 1.1 20.4 3.4 2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-17.4 50.8a9.01 9.01 0 0 1-8.5 6.1z" fill="#FFFFFF"></path><path d="M538.4 772.8c5.8 0 11.7 0.9 17.5 2.9l-17.4 50.8-50.8-17.4a53.56 53.56 0 0 1 50.7-36.3m0-17.9v17.9-17.9a71.6 71.6 0 0 0-67.7 48.4c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l17.4-50.8c3.2-9.4-1.8-19.5-11.1-22.7-7.6-2.6-15.4-3.9-23.3-3.9z" fill="#151B28"></path><path d="M493.6 692.4c-16.4 0-32.6-2.7-48.3-8.1-1-0.4-2.2-0.7-3.4-1.3a148.5 148.5 0 0 1-97.2-143c0-0.8 0.2-1.7 0.4-2.4l27.6-80.6c0.3-0.8 0.7-1.5 1.2-2.2 27.9-37.8 72.7-60.3 119.7-60.3 16.4 0 32.6 2.7 48.2 8.1 51.5 17.6 89.2 61.9 98.4 115.5 1.7 9.5 2.5 19.2 2.3 28.8 0 0.8-0.2 1.6-0.4 2.4l-27.6 80.6c-0.3 0.8-0.7 1.5-1.2 2.2-28 37.7-72.7 60.3-119.7 60.3z" fill="#FFFFFF"></path><path d="M493.5 402.6c15.1 0 30.5 2.5 45.6 7.6 50.3 17.2 84.6 60.1 93 109.2 1.6 8.9 2.4 18.1 2.2 27.2l-27.6 80.6a141.19 141.19 0 0 1-113.1 57.1c-15.1 0-30.5-2.5-45.7-7.6-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-57.7-21.3-93.3-76.6-91.9-135.2l27.6-80.6c26.4-35.8 68.7-57 113.1-57m0-16.3c-49.6 0-96.8 23.8-126.3 63.6-1 1.3-1.8 2.8-2.3 4.4l-27.6 80.6c-0.5 1.6-0.8 3.2-0.9 4.9a156.78 156.78 0 0 0 102.3 150.7l3.8 1.5c16.5 5.7 33.6 8.5 50.9 8.5 49.6 0 96.7-23.8 126.2-63.6 1-1.3 1.8-2.8 2.3-4.4l27.6-80.6c0.5-1.6 0.8-3.2 0.9-4.9 0.3-10.1-0.6-20.4-2.4-30.5a156.69 156.69 0 0 0-103.8-121.7c-16.3-5.6-33.4-8.5-50.7-8.5z" fill="#151B28"></path><path d="M634.3 546.6l-27.6 80.6c-35.5 48-99.2 69.8-158.8 49.4-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-43.1-31.7-62.9-88.9-44.6-142.2 22.5-65.7 94-100.7 159.6-78.3a125.1 125.1 0 0 1 72.5 64.4 140 140 0 0 1 2.1 27.4z" fill="#2AEFC8"></path><path d="M456.5 496.9c-11 5.4-18 10.7-22.3 23.3-4.8 14.1 1.3 26.5 14.5 31 34.1 11.7 45.7-54.8 94.4-38.1 21.3 7.3 31.1 25.7 26.7 47.7l22.3 7.6-4.2 12.2-22.1-7.6c-6.4 14-18.5 25.7-30.3 32l-8.6-11.7c11.4-6.4 22.1-15.5 26.9-29.6 5.9-17.3-0.5-29.3-15.1-34.3-38.1-13.1-50.7 53.1-94.9 37.9-19.7-6.7-29.4-24.9-25.7-44.9l-22.3-7.6 4.2-12.2 22.1 7.6c6.3-13.8 16.3-20.7 27.4-25.6l7 12.3z" fill=""></path></g></svg>
            <span>
                Histori Tiket
            </span>
        </a>
        <a href="/refund" class="mt-2 pl-5 w-full text-left duration-300 ease-in-out transition-all {{ (request()->path() == 'refund') ? 'bg-blue-500 text-white' : 'hover:bg-blue-500 text-black/80 hover:text-white' }} py-2 mb-2 flex items-center">
            <svg class="mr-2 w-6 h-6" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M732.1 399.3C534.6 356 696.5 82.1 425.9 104.8s-527.2 645.8-46.8 791.7 728-415 353-497.2z" fill="#464BD8"></path><path d="M539.5 838.8c-1.4 0-2.9-0.3-4.2-1L330.1 730.3a8.95 8.95 0 0 1-3.8-12.1L529 331.1a8.92 8.92 0 0 1 8-4.8c1.4 0 2.9 0.3 4.2 1l205.2 107.5c4.4 2.3 6.1 7.7 3.8 12.1L547.4 834a8.92 8.92 0 0 1-7.9 4.8z" fill="#514DDF"></path><path d="M537 335.3l205.2 107.5-202.7 387-205.2-107.4L537 335.3m0-17.9c-1.8 0-3.6 0.3-5.3 0.8-4.5 1.4-8.3 4.6-10.5 8.8L318.4 714.1a17.9 17.9 0 0 0 7.6 24.2l205.2 107.5c2.6 1.4 5.4 2 8.3 2 1.8 0 3.6-0.3 5.3-0.8 4.5-1.4 8.3-4.6 10.5-8.8L758.1 451a17.88 17.88 0 0 0-7.6-24.1L545.3 319.4c-2.5-1.3-5.4-2-8.3-2z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-2-0.2-2.9-0.5l-254-87a8.98 8.98 0 0 1-5.6-11.4L440 257.4c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l254 87c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-164 479.3c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M448.6 260.4l254 87-164.2 479.1-254-87 164.2-479.1m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3L267.5 733.7c-3.2 9.4 1.8 19.5 11.1 22.7l254 87c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l164.1-479.2c3.2-9.4-1.8-19.5-11.1-22.7l-254-87c-1.9-0.6-3.9-0.9-5.8-0.9z" fill="#151B28"></path><path d="M448.6 323c-6.9 0-13.7-1.1-20.3-3.4-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8a62.83 62.83 0 0 1-59.3 42.4z" fill="#FFFFFF"></path><path d="M448.6 260.4l50.8 17.4a53.82 53.82 0 0 1-50.8 36.3c-5.8 0-11.6-0.9-17.4-2.9l17.4-50.8m0-17.9c-7.4 0-14.4 4.7-16.9 12.1l-17.4 50.8c-1.5 4.5-1.2 9.4 0.9 13.7 2.1 4.3 5.8 7.5 10.3 9.1 7.5 2.6 15.3 3.9 23.2 3.9a71.6 71.6 0 0 0 67.7-48.4c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1l-50.8-17.4c-2-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M685.1 407.1c-1 0-2-0.2-2.9-0.5a62.74 62.74 0 0 1-39-79.6c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c4.7 1.6 7.2 6.7 5.6 11.4L693.6 401c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M651.7 330l50.8 17.4-17.4 50.8a53.8 53.8 0 0 1-33.4-68.2m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3c-12.8 37.3 7.2 78.1 44.5 90.9 1.9 0.7 3.9 1 5.8 1 7.4 0 14.4-4.7 16.9-12.1l17.4-50.8c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1L657.5 313c-1.8-0.6-3.8-0.9-5.8-0.9z" fill="#151B28"></path><path d="M335.3 765.9c-1 0-2-0.2-2.9-0.5L281.6 748c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c0.8-2.2 2.4-4.1 4.5-5.1a8.9 8.9 0 0 1 6.8-0.4 62.74 62.74 0 0 1 39 79.6c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.5-2.7 0.8-4 0.8z" fill="#FFFFFF"></path><path d="M301.9 688.8c28.1 9.6 43 40.1 33.4 68.2l-50.8-17.4 17.4-50.8m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3l-17.4 50.8c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3 6.2-18.1 5-37.5-3.4-54.7-8.4-17.2-23-30-41.1-36.2-1.9-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-1.9-0.2-2.9-0.5l-50.8-17.4c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8a62.75 62.75 0 0 1 59.2-42.4c6.9 0 13.8 1.1 20.4 3.4 2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-17.4 50.8a9.01 9.01 0 0 1-8.5 6.1z" fill="#FFFFFF"></path><path d="M538.4 772.8c5.8 0 11.7 0.9 17.5 2.9l-17.4 50.8-50.8-17.4a53.56 53.56 0 0 1 50.7-36.3m0-17.9v17.9-17.9a71.6 71.6 0 0 0-67.7 48.4c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l17.4-50.8c3.2-9.4-1.8-19.5-11.1-22.7-7.6-2.6-15.4-3.9-23.3-3.9z" fill="#151B28"></path><path d="M493.6 692.4c-16.4 0-32.6-2.7-48.3-8.1-1-0.4-2.2-0.7-3.4-1.3a148.5 148.5 0 0 1-97.2-143c0-0.8 0.2-1.7 0.4-2.4l27.6-80.6c0.3-0.8 0.7-1.5 1.2-2.2 27.9-37.8 72.7-60.3 119.7-60.3 16.4 0 32.6 2.7 48.2 8.1 51.5 17.6 89.2 61.9 98.4 115.5 1.7 9.5 2.5 19.2 2.3 28.8 0 0.8-0.2 1.6-0.4 2.4l-27.6 80.6c-0.3 0.8-0.7 1.5-1.2 2.2-28 37.7-72.7 60.3-119.7 60.3z" fill="#FFFFFF"></path><path d="M493.5 402.6c15.1 0 30.5 2.5 45.6 7.6 50.3 17.2 84.6 60.1 93 109.2 1.6 8.9 2.4 18.1 2.2 27.2l-27.6 80.6a141.19 141.19 0 0 1-113.1 57.1c-15.1 0-30.5-2.5-45.7-7.6-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-57.7-21.3-93.3-76.6-91.9-135.2l27.6-80.6c26.4-35.8 68.7-57 113.1-57m0-16.3c-49.6 0-96.8 23.8-126.3 63.6-1 1.3-1.8 2.8-2.3 4.4l-27.6 80.6c-0.5 1.6-0.8 3.2-0.9 4.9a156.78 156.78 0 0 0 102.3 150.7l3.8 1.5c16.5 5.7 33.6 8.5 50.9 8.5 49.6 0 96.7-23.8 126.2-63.6 1-1.3 1.8-2.8 2.3-4.4l27.6-80.6c0.5-1.6 0.8-3.2 0.9-4.9 0.3-10.1-0.6-20.4-2.4-30.5a156.69 156.69 0 0 0-103.8-121.7c-16.3-5.6-33.4-8.5-50.7-8.5z" fill="#151B28"></path><path d="M634.3 546.6l-27.6 80.6c-35.5 48-99.2 69.8-158.8 49.4-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-43.1-31.7-62.9-88.9-44.6-142.2 22.5-65.7 94-100.7 159.6-78.3a125.1 125.1 0 0 1 72.5 64.4 140 140 0 0 1 2.1 27.4z" fill="#2AEFC8"></path><path d="M456.5 496.9c-11 5.4-18 10.7-22.3 23.3-4.8 14.1 1.3 26.5 14.5 31 34.1 11.7 45.7-54.8 94.4-38.1 21.3 7.3 31.1 25.7 26.7 47.7l22.3 7.6-4.2 12.2-22.1-7.6c-6.4 14-18.5 25.7-30.3 32l-8.6-11.7c11.4-6.4 22.1-15.5 26.9-29.6 5.9-17.3-0.5-29.3-15.1-34.3-38.1-13.1-50.7 53.1-94.9 37.9-19.7-6.7-29.4-24.9-25.7-44.9l-22.3-7.6 4.2-12.2 22.1 7.6c6.3-13.8 16.3-20.7 27.4-25.6l7 12.3z" fill=""></path></g></svg>
            <span>
                Pengembalian Dana
            </span>
        </a>
    </div>

    <div class="w-full block">
        <a href="/profile" class="mt-2 pl-5 w-full text-left duration-300 ease-in-out transition-all {{ (request()->path() == 'profile') ? 'bg-blue-500 text-white' : 'hover:bg-blue-500 text-black/80 hover:text-white' }} py-2 mb-2 flex items-center">
            <svg class="w-6 h-6 mr-2" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M732.1 399.3C534.6 356 696.5 82.1 425.9 104.8s-527.2 645.8-46.8 791.7 728-415 353-497.2z" fill="#464BD8"></path><path d="M539.5 838.8c-1.4 0-2.9-0.3-4.2-1L330.1 730.3a8.95 8.95 0 0 1-3.8-12.1L529 331.1a8.92 8.92 0 0 1 8-4.8c1.4 0 2.9 0.3 4.2 1l205.2 107.5c4.4 2.3 6.1 7.7 3.8 12.1L547.4 834a8.92 8.92 0 0 1-7.9 4.8z" fill="#514DDF"></path><path d="M537 335.3l205.2 107.5-202.7 387-205.2-107.4L537 335.3m0-17.9c-1.8 0-3.6 0.3-5.3 0.8-4.5 1.4-8.3 4.6-10.5 8.8L318.4 714.1a17.9 17.9 0 0 0 7.6 24.2l205.2 107.5c2.6 1.4 5.4 2 8.3 2 1.8 0 3.6-0.3 5.3-0.8 4.5-1.4 8.3-4.6 10.5-8.8L758.1 451a17.88 17.88 0 0 0-7.6-24.1L545.3 319.4c-2.5-1.3-5.4-2-8.3-2z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-2-0.2-2.9-0.5l-254-87a8.98 8.98 0 0 1-5.6-11.4L440 257.4c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l254 87c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-164 479.3c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M448.6 260.4l254 87-164.2 479.1-254-87 164.2-479.1m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3L267.5 733.7c-3.2 9.4 1.8 19.5 11.1 22.7l254 87c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l164.1-479.2c3.2-9.4-1.8-19.5-11.1-22.7l-254-87c-1.9-0.6-3.9-0.9-5.8-0.9z" fill="#151B28"></path><path d="M448.6 323c-6.9 0-13.7-1.1-20.3-3.4-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8a62.83 62.83 0 0 1-59.3 42.4z" fill="#FFFFFF"></path><path d="M448.6 260.4l50.8 17.4a53.82 53.82 0 0 1-50.8 36.3c-5.8 0-11.6-0.9-17.4-2.9l17.4-50.8m0-17.9c-7.4 0-14.4 4.7-16.9 12.1l-17.4 50.8c-1.5 4.5-1.2 9.4 0.9 13.7 2.1 4.3 5.8 7.5 10.3 9.1 7.5 2.6 15.3 3.9 23.2 3.9a71.6 71.6 0 0 0 67.7-48.4c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1l-50.8-17.4c-2-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M685.1 407.1c-1 0-2-0.2-2.9-0.5a62.74 62.74 0 0 1-39-79.6c1.3-3.7 4.7-6.1 8.5-6.1 1 0 1.9 0.2 2.9 0.5l50.8 17.4c4.7 1.6 7.2 6.7 5.6 11.4L693.6 401c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.7-2.6 1-4 1z" fill="#FFFFFF"></path><path d="M651.7 330l50.8 17.4-17.4 50.8a53.8 53.8 0 0 1-33.4-68.2m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3c-12.8 37.3 7.2 78.1 44.5 90.9 1.9 0.7 3.9 1 5.8 1 7.4 0 14.4-4.7 16.9-12.1l17.4-50.8c1.5-4.5 1.2-9.4-0.9-13.7a18.1 18.1 0 0 0-10.3-9.1L657.5 313c-1.8-0.6-3.8-0.9-5.8-0.9z" fill="#151B28"></path><path d="M335.3 765.9c-1 0-2-0.2-2.9-0.5L281.6 748c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8l17.4-50.8c0.8-2.2 2.4-4.1 4.5-5.1a8.9 8.9 0 0 1 6.8-0.4 62.74 62.74 0 0 1 39 79.6c-0.8 2.2-2.4 4.1-4.5 5.1-1.3 0.5-2.7 0.8-4 0.8z" fill="#FFFFFF"></path><path d="M301.9 688.8c28.1 9.6 43 40.1 33.4 68.2l-50.8-17.4 17.4-50.8m0-17.9c-2.7 0-5.4 0.6-7.9 1.8a18.1 18.1 0 0 0-9.1 10.3l-17.4 50.8c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3 6.2-18.1 5-37.5-3.4-54.7-8.4-17.2-23-30-41.1-36.2-1.9-0.7-3.9-1-5.8-1z" fill="#151B28"></path><path d="M538.4 835.5c-1 0-1.9-0.2-2.9-0.5l-50.8-17.4c-2.2-0.8-4.1-2.4-5.1-4.5s-1.2-4.6-0.4-6.8a62.75 62.75 0 0 1 59.2-42.4c6.9 0 13.8 1.1 20.4 3.4 2.2 0.8 4.1 2.4 5.1 4.5s1.2 4.6 0.4 6.8l-17.4 50.8a9.01 9.01 0 0 1-8.5 6.1z" fill="#FFFFFF"></path><path d="M538.4 772.8c5.8 0 11.7 0.9 17.5 2.9l-17.4 50.8-50.8-17.4a53.56 53.56 0 0 1 50.7-36.3m0-17.9v17.9-17.9a71.6 71.6 0 0 0-67.7 48.4c-3.2 9.4 1.8 19.5 11.1 22.7l50.8 17.4c1.9 0.6 3.8 1 5.8 1 2.7 0 5.4-0.6 7.9-1.8 4.3-2.1 7.5-5.8 9.1-10.3l17.4-50.8c3.2-9.4-1.8-19.5-11.1-22.7-7.6-2.6-15.4-3.9-23.3-3.9z" fill="#151B28"></path><path d="M493.6 692.4c-16.4 0-32.6-2.7-48.3-8.1-1-0.4-2.2-0.7-3.4-1.3a148.5 148.5 0 0 1-97.2-143c0-0.8 0.2-1.7 0.4-2.4l27.6-80.6c0.3-0.8 0.7-1.5 1.2-2.2 27.9-37.8 72.7-60.3 119.7-60.3 16.4 0 32.6 2.7 48.2 8.1 51.5 17.6 89.2 61.9 98.4 115.5 1.7 9.5 2.5 19.2 2.3 28.8 0 0.8-0.2 1.6-0.4 2.4l-27.6 80.6c-0.3 0.8-0.7 1.5-1.2 2.2-28 37.7-72.7 60.3-119.7 60.3z" fill="#FFFFFF"></path><path d="M493.5 402.6c15.1 0 30.5 2.5 45.6 7.6 50.3 17.2 84.6 60.1 93 109.2 1.6 8.9 2.4 18.1 2.2 27.2l-27.6 80.6a141.19 141.19 0 0 1-113.1 57.1c-15.1 0-30.5-2.5-45.7-7.6-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-57.7-21.3-93.3-76.6-91.9-135.2l27.6-80.6c26.4-35.8 68.7-57 113.1-57m0-16.3c-49.6 0-96.8 23.8-126.3 63.6-1 1.3-1.8 2.8-2.3 4.4l-27.6 80.6c-0.5 1.6-0.8 3.2-0.9 4.9a156.78 156.78 0 0 0 102.3 150.7l3.8 1.5c16.5 5.7 33.6 8.5 50.9 8.5 49.6 0 96.7-23.8 126.2-63.6 1-1.3 1.8-2.8 2.3-4.4l27.6-80.6c0.5-1.6 0.8-3.2 0.9-4.9 0.3-10.1-0.6-20.4-2.4-30.5a156.69 156.69 0 0 0-103.8-121.7c-16.3-5.6-33.4-8.5-50.7-8.5z" fill="#151B28"></path><path d="M634.3 546.6l-27.6 80.6c-35.5 48-99.2 69.8-158.8 49.4-1-0.3-2-0.7-3-1.2-0.1 0-0.2-0.1-0.2-0.1-43.1-31.7-62.9-88.9-44.6-142.2 22.5-65.7 94-100.7 159.6-78.3a125.1 125.1 0 0 1 72.5 64.4 140 140 0 0 1 2.1 27.4z" fill="#2AEFC8"></path><path d="M456.5 496.9c-11 5.4-18 10.7-22.3 23.3-4.8 14.1 1.3 26.5 14.5 31 34.1 11.7 45.7-54.8 94.4-38.1 21.3 7.3 31.1 25.7 26.7 47.7l22.3 7.6-4.2 12.2-22.1-7.6c-6.4 14-18.5 25.7-30.3 32l-8.6-11.7c11.4-6.4 22.1-15.5 26.9-29.6 5.9-17.3-0.5-29.3-15.1-34.3-38.1-13.1-50.7 53.1-94.9 37.9-19.7-6.7-29.4-24.9-25.7-44.9l-22.3-7.6 4.2-12.2 22.1 7.6c6.3-13.8 16.3-20.7 27.4-25.6l7 12.3z" fill=""></path></g></svg>
            <span>
                Pengaturan Akun
            </span>
        </a>
        <a href="/logout" class="pl-5 w-full text-left duration-300 ease-in-out transition-all hover:bg-blue-500 text-black/80 hover:text-white py-2 flex items-center">
            <svg class="mr-2 w-6 h-6" viewBox="0 0 1024 1024" class="icon" version="1.1" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M732.1 399.3C534.6 356 696.5 82.1 425.9 104.8s-527.2 645.8-46.8 791.7 728-415 353-497.2z" fill="#464BD8"></path><path d="M276.8 449.8c0 37 30 66.9 66.9 66.9h319c9.6 0 17.4 7.8 17.4 17.4v234.7c0 9.6-7.8 17.4-17.4 17.4H389.3c-62.2 0-112.5-50.4-112.5-112.5V442.3" fill="#FFFFFF"></path><path d="M662.8 795.5H389.3c-67.2 0-121.8-54.6-121.8-121.8V442.3c0-5.1 4.1-9.3 9.3-9.3s9.3 4.1 9.3 9.3v7.6c0 31.8 25.9 57.7 57.7 57.7h319c14.7 0 26.6 12 26.6 26.6v234.7c0 14.6-11.9 26.6-26.6 26.6zM286.1 499.6v174.1c0 57 46.3 103.3 103.3 103.3h273.4c4.5 0 8.1-3.6 8.1-8.1V534.2c0-4.5-3.6-8.1-8.1-8.1h-319a76.2 76.2 0 0 1-57.7-26.5z" fill="#151B28"></path><path d="M662.8 795.5H389.3c-67.2 0-121.8-54.6-121.8-121.8V447.1c0-40.6 33.1-73.7 73.7-73.7h319.7c5.1 0 9.3 4.1 9.3 9.3s-4.1 9.3-9.3 9.3H341.2c-30.4 0-55.2 24.8-55.2 55.2v2.7c0 31.8 25.9 57.7 57.7 57.7h319c14.7 0 26.6 12 26.6 26.6v234.7a26.5 26.5 0 0 1-26.5 26.6zM286.1 499.6v174.1c0 57 46.3 103.3 103.3 103.3h273.4c4.5 0 8.1-3.6 8.1-8.1V534.2c0-4.5-3.6-8.1-8.1-8.1h-319a76.2 76.2 0 0 1-57.7-26.5z" fill="#151B28"></path><path d="M589.3 517H384.7V320.3c0-10.2 8.3-18.4 18.4-18.4h167.7c10.2 0 18.4 8.3 18.4 18.4V517z" fill="#2AEFC8"></path><path d="M589.3 525.5H384.7a8.5 8.5 0 0 1-8.5-8.5V320.3c0-14.8 12.1-26.9 26.9-26.9h167.7c14.8 0 26.9 12.1 26.9 26.9V517c0.1 4.7-3.7 8.5-8.4 8.5z m-196.1-17h187.7V320.3c0-5.5-4.5-10-10-10H403.1c-5.5 0-10 4.5-10 10v188.2z" fill="#151B28"></path><path d="M422.2 307.7h44.9V511h-44.9z" fill="#FFFFFF"></path><path d="M467.1 515.7h-44.9a4.8 4.8 0 0 1-4.8-4.8V307.7c0-2.6 2.1-4.8 4.8-4.8h44.9c2.6 0 4.8 2.1 4.8 4.8V511c0 2.6-2.2 4.7-4.8 4.7z m-40.1-9.5h35.4V312.4H427v193.8z m74.6-178h15.5v42.5h-15.5zM501.6 386.1h15.5v104.5h-15.5zM542.2 328.2h15.5v162.4h-15.5z" fill="#151B28"></path><path d="M694.1 588.8H521.5c-25.7 0-48.6 18.8-51 44.3-2.8 29.3 20.2 54 48.9 54h174.7c5.8 0 10.4-4.7 10.4-10.4v-77.5c0-5.7-4.6-10.4-10.4-10.4z" fill="#464BD8"></path><path d="M694.1 696.1H519.4c-16.3 0-32-6.9-43-19a58.23 58.23 0 0 1-14.8-44.8c2.8-29.4 29.1-52.4 60-52.4h172.6c10.7 0 19.4 8.7 19.4 19.4v77.5c-0.1 10.6-8.8 19.3-19.5 19.3z m-172.6-98.3c-21.7 0-40.2 15.9-42.1 36.2a39.63 39.63 0 0 0 10.3 31 40.3 40.3 0 0 0 29.8 13.2h174.7c0.8 0 1.5-0.7 1.5-1.5v-77.5c0-0.8-0.7-1.5-1.5-1.5l-172.7 0.1z" fill="#151B28"></path><path d="M523.3 638m-22.8 0a22.8 22.8 0 1 0 45.6 0 22.8 22.8 0 1 0-45.6 0Z" fill="#FFFFFF"></path></g></svg>
            <span>
                Logout
            </span>
        </a>
    </div>
</div>