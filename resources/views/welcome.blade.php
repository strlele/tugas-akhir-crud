<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choco Jooy</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- slider -->
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .slider img {
            opacity: 0;
            transition: opacity 1.5s ease-in-out;
        }

        .slider img.active {
            opacity: 1;
        }
    </style>
</head>

<body class="h-screen w-screen overflow-hidden bg-gray-800">
    <!-- Slider Container -->
    <div class="slider relative h-full w-full">
        <!-- Slider Images -->
        <img src="{{ asset('img/welkam2.jpg') }}" alt="Slide 1" class="absolute inset-0 w-full h-full object-cover active">
        <img src="{{ asset('img/banner.png') }}" alt="Slide 2" class="absolute inset-0 w-full h-full object-cover">
        <img src="{{ asset('img/aespa_jooy.png') }}" alt="Slide 3" class="absolute inset-0 w-full h-full object-cover">

        <!-- Content Overlay -->
        <div class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50">
            <div class="text-center text-white space-y-6 md:px-8">
                <h1 class="text-4xl md:text-5xl font-extrabold leading-tight">
                    Choco Jooy
                </h1>
                <p class="text-lg md:text-xl">
                    Discover the best chocolate treats
                </p>
                
                <div class="">
                <a href="{{ route('home') }}"
                    class="bg-yellow-500 text-white px-6 py-3 rounded-full text-lg hover:bg-yellow-400 transition">
                    Go to Home
                </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

</html>
