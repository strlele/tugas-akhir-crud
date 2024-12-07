@extends('layout.main')

@section('section')
<div class="container mx-auto px-4 py-6">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-1/4 bg-white rounded-lg shadow-md p-4">
            <ul class="space-y-4">
                <li>
                    <a href="#"
                        class="flex items-center text-black border-l-4 border-transparent hover:border-l-black pl-2">
                        <!-- Icon Akun -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M12 12a5 5 0 1 1 5-5 5 5 0 0 1-5 5zm0 2c-4.418 0-8 2.015-8 4.5V20h16v-1.5c0-2.485-3.582-4.5-8-4.5z" />
                        </svg>
                        Akun
                    </a>
                </li>
                <li>
                <a href="#"
                        class="flex items-center text-black border-l-4 border-transparent hover:border-l-black pl-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-gray-500" fill="noner"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="0">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M1.6 18.3333V1.66667H14.4V11.2858C14.4 14.7083 9.6 13.3333 9.6 13.3333C9.6 13.3333 10.8144 18.3333 7.4896 18.3333H1.6ZM16 11.9883V0H0V20H8.1512C10.6816 20 16 13.9808 16 11.9883ZM12 10.8333H4V10H12V10.8333ZM12 7.5H4V8.33333H12V7.5ZM12 5H4V5.83333H12V5Z" />
                        </svg>
                        Riwayat Pemesanan
                    </a>
                </li>
                <li>
                    <a href="#"
                        class="flex items-center text-black border-l-4 border-transparent hover:border-l-black pl-2">
                        <!-- Icon Wishlist -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5A5.5 5.5 0 0 1 7.5 3A5.39 5.39 0 0 1 12 5.09A5.39 5.39 0 0 1 16.5 3 5.5 5.5 0 0 1 22 8.5c0 3.78-3.4 6.86-8.55 11.54z" />
                        </svg>
                        Wishlist
                    </a>
                </li>
                <li>
                    <a href="{{route('alamats.index')}}"
                        class="flex items-center text-black border-l-4 border-transparent hover:border-l-black pl-2">
                        <!-- Icon Buku Alamat -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="currentColor"
                            viewBox="0 0 24 24">
                            <path d="M21 4H7a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 14H7V6h14zM3 8H1v10a2 2 0 0 0 2 2h14v-2H3z" />
                        </svg>
                        Buku Alamat
                    </a>
                </li>
            </ul>
        </aside>

        <!-- Main Content -->
        <div class="w-3/4 bg-white rounded-lg shadow-md p-6 ml-6">
            <h1 class="text-2xl font-bold text-gray-800 mb-4">Halo, {{ $user->name }}</h1>
            <p class="text-gray-600 mb-2"><strong>Email:</strong> {{ $user->email }}</p>
            <p class="text-gray-600 mb-2"><strong>Bergabung pada:</strong> {{ $user->created_at->format('d M Y') }}</p>

            <div class="mt-6">
                <h2 class="text-lg font-bold text-gray-800">Pemesanan Terakhir</h2>
                <p class="text-gray-600">Anda belum melakukan pemesanan</p>
            </div>
        </div>
    </div>
</div>
@endsection
