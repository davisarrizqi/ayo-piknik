<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masuk Akun</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 bg-black/10">
    <x-navbar>
        {{-- navbar here --}}
    </x-navbar>

    {{-- element here --}}
    <div class="flex justify-center">
        <div class="w-11/12">
            <div class="flex">
                <!-- Sidebar -->
                <div class="w-1/4 p-4 bg-white shadow-md self-start">
                    <h2 class="text-xl font-bold mb-4">Find Visitation</h2>
                    <form>
                        <div class="mb-7 relative">
                            <label for="location" class="block text-sm font-medium text-gray-700">Location</label>
                            <input type="text" id="location" name="location" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" oninput="showRecommendations(this.value)">
                            <div id="location-recommendations" class="absolute z-10 w-full bg-white border border-gray-300 rounded-md mt-1"></div>
                        </div>
                        <div class="mb-7">
                            <label for="date" class="block text-sm font-medium text-gray-700">Date</label>
                            <input type="date" id="date" name="date" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        </div>
                        <div class="mb-7">
                            <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                            <select id="type" name="type" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                                <option value="">Select Type</option>
                                <option value="type1">Type 1</option>
                                <option value="type2">Type 2</option>
                            </select>
                        </div>
                        <button type="submit" class="w-full bg-blue-500 text-white p-2 rounded-md">Filter</button>
                    </form>
                </div>

                <script>
                    function showRecommendations(keyword) {
                        const recommendations = [
                            'Location 1',
                            'Location 2',
                            'Location 3',
                            'Location 4',
                            'Location 5'
                        ];

                        const filtered = recommendations.filter(location => location.toLowerCase().includes(keyword.toLowerCase()));
                        const recommendationsDiv = document.getElementById('location-recommendations');
                        recommendationsDiv.innerHTML = '';

                        filtered.forEach(location => {
                            const div = document.createElement('div');
                            div.textContent = location;
                            div.classList.add('p-2', 'border-b', 'border-gray-300', 'cursor-pointer', 'hover:bg-gray-100');
                            div.onclick = () => {
                                document.getElementById('location').value = location;
                                recommendationsDiv.innerHTML = '';
                            };
                            recommendationsDiv.appendChild(div);
                        });

                        if (filtered.length === 0) {
                            const div = document.createElement('div');
                            div.textContent = 'No recommendations found';
                            div.classList.add('p-2', 'text-gray-500');
                            recommendationsDiv.appendChild(div);
                        }
                    }

                    document.addEventListener('click', function(event) {
                        const recommendationsDiv = document.getElementById('location-recommendations');
                        const locationInput = document.getElementById('location');
                        if (!locationInput.contains(event.target) && !recommendationsDiv.contains(event.target)) {
                            recommendationsDiv.innerHTML = '';
                        }
                    });
                </script>

                <!-- Cards -->
                <div class="w-3/4 px-4">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4" id="cards-container">
                        @for ($i = 1; $i <= 18; $i++)
                            <div class="bg-white p-4 shadow-md rounded-md">
                                <img src="https://asset.kompas.com/crops/5HTgtdqk1nAd9g8oj9lPHQyNUlU=/0x0:750x500/1200x800/data/photo/2023/07/13/64af70ba9e5c5.jpeg" alt="Card Image {{ $i }}" class="w-full h-48 object-cover rounded-md mb-4">
                                <h3 class="text-lg font-bold mb-2">Card Title {{ $i }}</h3>
                                <p class="text-gray-700 mb-4">Card content goes here.</p>
                                <a href="#" class="inline-block bg-blue-500 text-white py-2 text-center w-full rounded-md">Lihat Detail</a>
                            </div>
                        @endfor
                    </div>
                    <div class="mt-10 mb-4">
                        <nav class="flex justify-end">
                            <ul class="inline-flex items-center -space-x-px" id="pagination">
                                <li>
                                    <a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                                </li>
                                @for ($page = 1; $page <= 3; $page++)
                                    <li>
                                        <a href="?page={{ $page }}" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">{{ $page }}</a>
                                    </li>
                                @endfor
                                <li>
                                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const cards = Array.from(document.querySelectorAll('#cards-container > div'));
                        const pagination = document.getElementById('pagination');
                        const itemsPerPage = 9;
                        let currentPage = 1;

                        function showPage(page) {
                            const start = (page - 1) * itemsPerPage;
                            const end = start + itemsPerPage;

                            cards.forEach((card, index) => {
                                card.style.display = (index >= start && index < end) ? 'block' : 'none';
                            });
                        }

                        function updatePagination() {
                            const totalPages = Math.ceil(cards.length / itemsPerPage);
                            pagination.innerHTML = '';

                            const prev = document.createElement('li');
                            prev.innerHTML = `<a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>`;
                            prev.addEventListener('click', () => {
                                if (currentPage > 1) {
                                    currentPage--;
                                    showPage(currentPage);
                                    updatePagination();
                                }
                            });
                            pagination.appendChild(prev);

                            for (let page = 1; page <= totalPages; page++) {
                                const li = document.createElement('li');
                                li.innerHTML = `<a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">${page}</a>`;
                                li.addEventListener('click', () => {
                                    currentPage = page;
                                    showPage(currentPage);
                                    updatePagination();
                                });
                                pagination.appendChild(li);
                            }

                            const next = document.createElement('li');
                            next.innerHTML = `<a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg hover:bg-gray-100 hover:text-gray-700">Next</a>`;
                            next.addEventListener('click', () => {
                                if (currentPage < totalPages) {
                                    currentPage++;
                                    showPage(currentPage);
                                    updatePagination();
                                }
                            });
                            pagination.appendChild(next);
                        }

                        showPage(currentPage);
                        updatePagination();
                    });
                </script>
            </div>
        </div>
    </div>

    <x-footer>
        {{-- footer --}}
    </x-footer>
</body>
</html>
