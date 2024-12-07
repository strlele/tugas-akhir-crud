@extends('layout.main')

@section('section')
<div class="flex items-center justify-center py-20">

@if (session('success'))
        <div role="alert" class="rounded-lg bg-red-50 border border-red-400 p-3 mb-6 max-w-md mx-auto shadow-md">
            <div class="flex items-center gap-3">
                <span class="text-red-500">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </span>

                <div class="flex-1 text-sm">
                    <strong class="text-red-700">Produk Dihapus!</strong>
                    <p class="text-red-600">{{ session('success') }}</p>
                </div>

                <button class="text-red-500 hover:text-red-700" onclick="this.parentElement.parentElement.remove()">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    @endif

    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-white">Edit Product</h2>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nama Produk</label>
                <input type="text" name="name" id="name" value="{{ old('name', $product->name) }}" required
                    class="block w-full mt-1 px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori Produk</label>
                <input type="text" name="kategori" id="kategori" value="{{ old('kategori', $product->kategori) }}" required
                    class="block w-full mt-1 px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga Produk</label>
                <input type="number" name="harga" id="harga" value="{{ old('harga', $product->harga) }}" required
                    class="block w-full mt-1 px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="img" class="block text-sm font-medium text-gray-700">Product Image</label>
                <input type="file" name="img" id="img"
                    class="mt-1 block w-full text-sm text-gray-500 file:border file:border-gray-300 file:rounded-lg file:p-2 file:mr-2 file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
                @if($product->img)
                    <img src="{{ asset('img/products/' . $product->img) }}" alt="Product Image" class="mt-2 h-20 w-auto">
                @endif
            </div>

            <div class="flex items-center justify-between space-x-4">
                <button type="submit"
                    class="w-full text-white bg-orange-600 hover:bg-orange-700 rounded-md py-2 text-sm font-medium">
                    Update Product
                </button>
                <a href="{{ route('products.admin.index') }}"
                    class="w-full text-center text-gray-800 bg-gray-200 hover:bg-gray-300 rounded-md py-2 text-sm font-medium">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
