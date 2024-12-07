@extends('layout.main')

@section('section')

<div class="container mx-auto px-6 py-8">

@if (session('success'))
        <div role="alert" class="rounded-lg bg-green-50 border border-green-400 p-3 mb-6 max-w-md mx-auto shadow-md">
            <div class="flex items-center gap-3">
                <span class="text-green-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>

                <div class="flex-1 text-sm">
                    @if (strpos(session('success'), 'dihapus') !== false)
                        <strong class="text-green-700">Produk Dihapus!</strong>
                    @else
                        <strong class="text-green-700">Produk Diperbarui!</strong>
                    @endif
                    <p class="text-green-600">{{ session('success') }}</p>
                </div>

                <button class="text-green-500 hover:text-green-700" onclick="this.parentElement.parentElement.remove()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <div class="flex items-center justify-between mb-6">
        <h1 class="text-3xl font-bold text-gray-800 mb-6">Kelola Produk</h1>
        <a href="{{ route('products.add') }}"
            class="inline-block bg-slate-700 text-white px-6 py-2 rounded-lg shadow-md hover:bg-slate-800 transition duration-200 mb-6">
            Add Product
        </a>
    </div>

    <!-- Tabel Daftar Produk -->
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gray-100">
                <tr class="text-left">
                    <th class="px-6 py-4 border-b text-sm font-medium text-gray-700">Image</th>
                    <th class="px-6 py-4 border-b text-sm font-medium text-gray-700">Name</th>
                    <th class="px-6 py-4 border-b text-sm font-medium text-gray-700">Kategori</th>
                    <th class="px-6 py-4 border-b text-sm font-medium text-gray-700">Harga</th>
                    <th class="px-6 py-4 border-b text-sm font-medium text-gray-700">Actions</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-600">
                @foreach ($products as $product)
                    <tr class="hover:bg-gray-50 transition duration-200">
                        <td class="px-6 py-4 border-b">
                            <img src="{{ asset('img/products/' . $product->img) }}" alt="{{ $product->name }}"
                                class="w-12 h-12 object-cover rounded-md">
                        </td>
                        <td class="px-6 py-4 border-b">{{ $product->name }}</td>
                        <td class="px-6 py-4 border-b">{{ $product->kategori }}</td>
                        <td class="px-6 py-4 border-b">Rp {{ number_format($product->harga, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 border-b flex space-x-2">
                            <a href="{{route('products.edit', $product->id)}}"
                                class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                                Edit
                            </a>

                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Apakah kamu yakin menghapus data post ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="inline-block bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-200">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection