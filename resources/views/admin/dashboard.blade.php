<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penyedia Wisata</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 bg-black/30">
    <x-admin.navbar>    
        {{-- navbar --}}
    </x-admin.navbar>

    <div class="w-[90%] mt-10 flex mx-auto">
        <div class="w-1/3 bg-white/80 px-4 py-5 rounded-2xl drop-shadow-lg">
            <canvas class="w-full" id="myChart"></canvas>
            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
            <script>
                const ctx = document.getElementById('myChart').getContext('2d');
                const myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                        datasets: [{
                            label: '# of Bookings',
                            data: [12, 19, 3, 5, 2, 3, 7],
                            backgroundColor: [
                                'rgba(255, 99, 132, 0.2)',
                                'rgba(54, 162, 235, 0.2)',
                                'rgba(255, 206, 86, 0.2)',
                                'rgba(75, 192, 192, 0.2)',
                                'rgba(153, 102, 255, 0.2)',
                                'rgba(255, 159, 64, 0.2)',
                                'rgba(255, 99, 132, 0.2)'
                            ],
                            borderColor: [
                                'rgba(255, 99, 132, 1)',
                                'rgba(54, 162, 235, 1)',
                                'rgba(255, 206, 86, 1)',
                                'rgba(75, 192, 192, 1)',
                                'rgba(153, 102, 255, 1)',
                                'rgba(255, 159, 64, 1)',
                                'rgba(255, 99, 132, 1)'
                            ],
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>


        <div class="w-1/3 bg-white/80 px-4 py-5 rounded-2xl drop-shadow-lg ml-5">
            <canvas class="w-full" id="scatterChart"></canvas>
            <script>
                const scatterCtx = document.getElementById('scatterChart').getContext('2d');
                const scatterChart = new Chart(scatterCtx, {
                    type: 'scatter',
                    data: {
                        datasets: [{
                            label: 'Scatter Dataset',
                            data: [
                                { x: -10, y: 0 },
                                { x: 0, y: 10 },
                                { x: 10, y: 5 },
                                { x: 0, y: -10 },
                                { x: -5, y: -5 },
                                { x: 5, y: 5 }
                            ],
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            x: {
                                type: 'linear',
                                position: 'bottom',
                                beginAtZero: true
                            },
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>

        <div class="w-1/3 bg-white/80 px-4 py-5 rounded-2xl drop-shadow-lg ml-5">
            <canvas class="w-full" id="performanceChart"></canvas>
            <script>
                const performanceCtx = document.getElementById('performanceChart').getContext('2d');
                const performanceChart = new Chart(performanceCtx, {
                    type: 'line',
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                        datasets: [{
                            label: 'Performance',
                            data: [65, 59, 80, 81, 56, 55, 40],
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1,
                            fill: true
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            </script>
        </div>
    </div>

    <div class="w-[90%] mx-auto">
        <div class="container mx-auto mt-16">
            <h1 class="text-3xl font-bold mb-5">Dasbor Utama</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white p-5 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-3">Total Users</h2>
                    <p class="text-2xl">150</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-3">Total Bookings</h2>
                    <p class="text-2xl">320</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-3">Total Revenue</h2>
                    <p class="text-2xl">$12,000</p>
                </div>
                <div class="bg-white p-5 rounded-lg shadow-md">
                    <h2 class="text-xl font-semibold mb-3">Pending Bookings</h2>
                    <p class="text-2xl">5</p>
                </div>
            </div>
            <div class="mt-16">
                <h2 class="text-2xl font-bold mb-5">Pemesanan Terakhir</h2>
                <table class="min-w-full bg-white">
                    <thead>
                        <tr>
                            <th class="py-2 px-4 border-b">Booking ID</th>
                            <th class="py-2 px-4 border-b">User</th>
                            <th class="py-2 px-4 border-b">Date</th>
                            <th class="py-2 px-4 border-b">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i=0;$i<10;$i++)
                        <tr>
                            <td class="py-2 px-4 border-b">#12345</td>
                            <td class="py-2 px-4 border-b">John Doe</td>
                            <td class="py-2 px-4 border-b">2023-10-01</td>
                            <td class="py-2 px-4 border-b">Confirmed</td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="w-[90%] mx-auto mt-16">
        <h1 class="text-2xl font-bold mb-5">
            Top 4 Tempat Terpopuler Anda
        </h1>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            @for ($col = 0; $col < 4; $col++)
                <div class="bg-white p-5 rounded-lg shadow-md">
                    <img src="https://via.placeholder.com/150" alt="Image" class="w-full h-32 object-cover rounded-md mb-4">
                    <h2 class="text-xl font-semibold mb-2">Card Title</h2>
                    <p class="text-gray-600 mb-4">Card description goes here. It provides a brief overview of the content.</p>
                    <p class="text-2xl font-bold mb-4">999</p>
                    <button class="bg-blue-500 text-white px-4 py-2 rounded-md">Preview</button>
                </div>
            @endfor
        </div>
    </div>

    <x-admin.footer>
        {{-- footer --}}
    </x-admin>
</body>
</html>
