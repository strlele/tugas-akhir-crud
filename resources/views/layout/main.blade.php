<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <!-- slider -->
    <link href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.6/keen-slider.min.css" rel="stylesheet" />
    <!-- icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- icons --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
    {{-- NAVBAR --}}
    <div class="navbar sticky top-0 z-50">
        <nav class="bg-white dark:bg-gray-800 shadow antialiased">
            <div class="max-w-screen-xl px-4 mx-24 2xl:px-0 py-4">
                <div class="flex items-center justify-between mx-24">
                    <!-- Logo -->
                    <div class="flex items-center space-x-8">
                        <div class="shrink-0">
                            <a href="#" title="Home">
                                <img class="block w-auto h-12 dark:hidden" src="{{ asset('img/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                    </div>

                    <!-- Menu -->
                    <ul class="hidden lg:flex items-center justify-start gap-6 md:gap-8 py-3">
                        <li>
                            <a href="{{ url('/home') }}"
                                class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Home</a>
                        </li>
                        <li>
                            <a href="{{ url('/shop') }}"
                                class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Shop</a>
                        </li>
                        <li>
                            <a href="{{ url('/contact') }}"
                                class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Contact</a>
                        </li>
                    </ul>

                    <!-- Auth Buttons -->
                    <div class="flex items-center lg:space-x-2">
                        <!-- Jika User Belum Login -->
                        @guest
                            <a href="{{ route('login') }}"
                                class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Login</a>
                            <a href="{{ route('register') }}"
                                class="text-sm font-medium text-gray-900 hover:text-primary-700 dark:text-white dark:hover:text-primary-500">Sign
                                Up</a>
                        @endguest

                        <!-- Jika User Sudah Login -->
                        @auth
                            <!-- My Cart -->
                            <button type="button"
                                class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium text-gray-900 dark:text-white">
                                <a href="{{ url('/cart') }}">
                                    <i class="fa-solid fa-cart-shopping"></i>
                                </a>
                            </button>

                            <!-- User Dropdown -->
                            <button id="userDropdownButton" data-dropdown-toggle="userDropdown" type="button"
                                class="inline-flex items-center rounded-lg justify-center p-2 hover:bg-gray-100 dark:hover:bg-gray-700 text-sm font-medium text-gray-900 dark:text-white">
                                <i class="fa-solid fa-user"></i>
                                <span class="ml-2">{{ Auth::user()->name }}</span> <!-- Nama User -->
                            </button>
                            <div id="userDropdown" class="hidden z-10 w-56 bg-white rounded-lg shadow dark:bg-gray-700">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                                    <li>
                                        <a href="{{ route('profile') }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Profile</a>
                                    </li>
                                    <li>
                                        <a href="{{route('products.admin.index')}}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600">Dashboard</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Logout Form -->
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        @endauth
                    </div>
                </div>
            </div>
        </nav>
    </div>


    {{-- SECTIION --}}
    @yield('section')


    {{-- FOOTER --}}

    <footer class="bg-white border-t">
        <div class="mx-auto max-w-screen-xl px-4 sm:px-6 lg:px-8">
            <div class="lg:grid lg:grid-cols-2">
                <div class="border-b border-gray-100 py-8 lg:order-last lg:border-b-0 lg:border-s lg:py-16 lg:ps-16">
                    <div class="mt-8 space-y-4 lg:mt-0">
                        <div>
                            <img src="{{asset('img/d.png')}}" alt="" style="width: 500px;">
                        </div>
                        <p class="mt-8 text-xs text-gray-500 text-center">&copy; 2024 PT.Choco Jooy.</p>
                    </div>
                </div>

                <div class="py-8 lg:py-16 lg:pe-16">
                    <!-- Memperbesar Choco Jooy -->
                    <h4 class="font-semibold text-3xl text-gray-900">Choco Jooy</h4>

                    <div class="mt-8 grid grid-cols-1 gap-8 sm:grid-cols-3">
                        <div>
                            <p class="font-medium text-gray-900">Services</p>
                            <ul class="mt-6 space-y-4 text-sm">
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">1on1 Coaching</a></li>
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">Company Review</a></li>
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">Accounts Review</a></li>
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">HR Consulting</a></li>
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">SEO Optimisation</a></li>
                            </ul>
                        </div>

                        <div>
                            <p class="font-medium text-gray-900">Company</p>
                            <ul class="mt-6 space-y-4 text-sm">
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">About</a></li>
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">Meet the Team</a></li>
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">Accounts Review</a></li>
                            </ul>
                        </div>

                        <div>
                            <p class="font-medium text-gray-900">Helpful Links</p>
                            <ul class="mt-6 space-y-4 text-sm">
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">Contact</a></li>
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">FAQs</a></li>
                                <li><a href="#" class="text-gray-700 transition hover:opacity-75">Live Chat</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="flex mt-8 border-t border-gray-100 pt-8">
                        <ul class="flex flex-wrap gap-4 text-xs">
                            <li><a href="#" class="text-gray-500 transition hover:opacity-75">Terms & Conditions</a></li>
                            <li><a href="#" class="text-gray-500 transition hover:opacity-75">Privacy Policy</a></li>
                            <li><a href="#" class="text-gray-500 transition hover:opacity-75">Cookies</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>



    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

</body>

</html>