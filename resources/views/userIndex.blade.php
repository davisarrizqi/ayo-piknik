<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ayo Piknik!</title>
    @vite('resources/css/app.css')
</head>
<body class="m-0 p-0 bg-black/10">
    <x-navbar>
        {{-- navbar here --}}
    </x-navbar>
    
    <form method="POST" action="/find" class="mx-auto h-[36rem] flex relative drop-shadow-2x">
        @csrf
        <img class="absolute inset-0 w-full h-full object-cover -z-10" src="images/background/main-search.png" alt="Background Image">
        <div class="flex flex-col mx-auto mt-[13rem] w-96 text-black/70 drop-shadow-2xl">
            <span class="mb-2 text-3xl text-white/80 text-center font-semibold">Yuk, Mau Ke Mana Kita?</span>
            <input type="text" id="search-input" name="search" class="w-full max-w-md py-2 px-4 border border-gray-300 rounded focus:outline-none focus:border-transparent" placeholder="Contoh : Tempat Sejuk di Baturaden">
            <div id="recommendations" class="mt-2 bg-white border border-gray-300 rounded shadow-lg hidden"></div>
        </div>
    </form>

    <div class="max-w-[99%] mx-auto px-4 mt-16">
        <div class="flex flex-col sm:flex-row items-center bg-white p-4 rounded shadow-md">
            <div class="w-full sm:w-1/2 relative">
                <div class="slider">
                    @for ($i = 1; $i <= 5; $i++)
                        <img src="images/body/highlight-image-{{ $i }}.png" alt="Highlight Image {{ $i }}" class="w-full rounded slide">
                    @endfor
                </div>
            </div>
            <div class="sm:ml-4 mt-4 sm:mt-0">
                <h2 class="text-2xl font-semibold mb-2">Explore Our Features</h2>
                <p class="text-gray-700 mb-4">Discover the amazing features we offer to make your experience unforgettable.</p>
                <button onclick="scrollToQNA()" class="bg-blue-500 text-white px-4 py-2 rounded">Learn More</button>
            </div>
        </div>
    </div>

    <style>
        .slider {
            position: relative;
            overflow: hidden;
        }
        .slide {
            position: absolute;
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }
        .slide.active {
            opacity: 1;
        }
    </style>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.slide');

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle('active', i === index);
            });
        }

        function nextSlide() {
            currentSlide = (currentSlide + 1) % slides.length;
            showSlide(currentSlide);
        }

        setInterval(nextSlide, 3000); // Change slide every 3 seconds

        document.addEventListener('DOMContentLoaded', () => {
            showSlide(currentSlide);
        });
    </script>

    <script>
        function scrollToQNA() {
            document.querySelector('#qna-section').scrollIntoView({ behavior: 'smooth' });
        }
    </script>

    <div id="qna-section" class="max-w-[99%] mx-auto px-4 py-8">
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            @foreach (range(1, 10) as $index)
                <div class="bg-white p-4 rounded shadow-md">
                    <button class="w-full text-left font-semibold text-lg" onclick="toggleAnswer({{ $index }})">
                        Question {{ $index }}
                    </button>
                    <div id="answer-{{ $index }}" class="mt-2 hidden">
                        <p>This is the answer to question {{ $index }}.</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        function toggleAnswer(index) {
            const answer = document.getElementById(`answer-${index}`);
            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
            } else {
                answer.classList.add('hidden');
            }
        }
    </script>

    {{-- search input feature --}}
    <script>
        document.getElementById('search-input').addEventListener('input', function() {
            const recommendations = document.getElementById('recommendations');
            const query = this.value;

            if (query.length > 0) {
                // Simulate fetching recommendations
                const sampleRecommendations = [
                    'Tempat Sejuk di Baturaden',
                    'Pantai Indah di Bali',
                    'Wisata Kuliner di Bandung',
                    'Tempat Bersejarah di Yogyakarta'
                ];

                const filteredRecommendations = sampleRecommendations.filter(item => item.toLowerCase().includes(query.toLowerCase()));

                recommendations.innerHTML = filteredRecommendations.map(item => `<div class="px-4 py-2 hover:bg-gray-200 cursor-pointer">${item}</div>`).join('');
                recommendations.classList.remove('hidden');
            } else {
                recommendations.classList.add('hidden');
            }
        });

        document.getElementById('recommendations').addEventListener('click', function(e) {
            if (e.target && e.target.nodeName === "DIV") {
                const searchInput = document.getElementById('search-input');
                searchInput.value = e.target.textContent;
                this.classList.add('hidden');
                searchInput.form.submit();
            }
        });
    </script>
</body>
</html>