<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $place->name }}</title>
    <script src="https://sandbox.doku.com/jokul-checkout-js/v1/jokul-checkout-1.0.0.js"></script>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 bg-black/10">
    <x-navbar :user="$user">
        {{-- navbar here --}}
    </x-navbar>

    <div class="w-full h-full flex">
        <div class="w-[75%] gap-3 flex justify-between h-96 m-auto">
            <div class="left-side w-7/12">
                {!! $place->place_details->maps !!}
            </div>
            
            <div class="right-side w-5/12">
                <div class="flex flex-col gap-4 p-10">
                    <input type="hidden" name="place_id" value="{{ $place->id }}">
                    <input type="hidden" name="price" value="{{ $place->price }}">
                    
                    <div>
                        <label for="bookingDate" class="block text-sm font-medium text-gray-700">Booking untuk (tanggal)</label>
                        <input type="date" id="bookingDate" name="booking_for" class="py-2 px-4 mt-1 block w-full border-gray-300 rounded-md shadow-sm">
                    </div>
                    <div>
                        <label for="bookingTotal" class="block text-sm font-medium text-gray-700">Booking total</label>
                        <input type="number" id="bookingTotal" name="quantity" class="py-2 px-4 mt-1 block w-full border-gray-300 rounded-md shadow-sm" oninput="calculateTotal()">
                    </div>
                    <div>
                        <label for="total" class="block text-sm font-medium text-gray-700">Total</label>
                        <input type="text" id="total" name="total" class="py-2 px-4 mt-1 block w-full border-gray-300 rounded-md shadow-sm" readonly>
                    </div>
                    <button onclick="getCheckoutResponse()" type="button" class="mt-4 px-4 py-2 bg-blue-400 text-white rounded-md">
                        Pesan Sekarang
                    </button>
                </div>

                {{-- lorem ipsum dolor sit amet --}}

                <script>
                    // catatan : untuk kedepannya, demi keamanan berikan validasi price sebelum mengirimkan link checkout
                    const pricePerUnit = {{ $place->price }};
                    
                    function calculateTotal() {
                        const bookingTotal = document.getElementById('bookingTotal').value;
                        const total = bookingTotal * pricePerUnit;
                        document.getElementById('total').value = total;
                    }

                    async function getCheckoutResponse() {
                        if(pricePerUnit <= 0 || isNaN(pricePerUnit)) return false;
                    
                        try {
                            const response = await fetch('/checkout', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                },
                                body: JSON.stringify({
                                    priceTotal: total, 
                                    price: pricePerUnit,
                                    place_id: document.querySelector('input[name="place_id"]').value,
                                    booking_for: document.querySelector('input[name="booking_for"]').value,
                                    quantity: document.querySelector('input[name="quantity"]').value
                                })
                            });

                            // ketika kode response bukan 200
                            if (!response.ok) {
                                throw new Error('Network response was not ok');
                            }

                            const data = await response.json();
                            loadJokulCheckout(data.response.payment.url); 

                            return data;
                        } catch (error) {
                            console.log(error);
                            alert('Terjadi kesalahan, silahkan coba lagi', error);
                        }
                    }

                    
                    // getCheckoutResponse().then(data => {
                        
                    // });
                </script>
            </div>
        </div>
    </div>

    <x-footer>
        {{-- footer here --}}
    </x-footer>

    {{-- embedded maps script --}}
    <script>
        document.querySelectorAll('iframe').forEach((iframe) => {
            iframe.setAttribute('height', '');
            iframe.setAttribute('width', '');
            iframe.classList.add('w-full');
            iframe.classList.add('h-full');
        });
    </script>
</body>
</html>
