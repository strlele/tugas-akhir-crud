@extends('layout.main')

@section('section')
<div class="flex items-center justify-center py-20">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded-lg shadow-lg dark:bg-gray-800">
        <h2 class="text-2xl font-bold text-center text-gray-800 dark:text-white">Add Product</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label for="text" class="block text-sm font-medium text-gray-700 dark:text-gray-200">Nama Produk</label>
                <input type="text" name="name" id="name" required
                    class="block w-full mt-1 px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="kategori" class="block text-sm font-medium text-gray-700">Kategori Produk</label>
                <input type="text" name="kategori" id="kategori" required
                    class="block w-full mt-1 px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="harga" class="block text-sm font-medium text-gray-700">Harga Produk</label>
                <input type="number" name="harga" id="harga" required
                    class="block w-full mt-1 px-4 py-2 text-gray-800 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500 focus:border-transparent">
            </div>

            <div class="mb-4">
                <label for="img" class="block text-sm font-medium text-gray-700">Product Image</label>
                <input type="file" name="img" id="img" required
                    class="mt-1 block w-full text-sm text-gray-500 file:border file:border-gray-300 file:rounded-lg file:p-2 file:mr-2 file:bg-gray-100 file:text-gray-700 hover:file:bg-gray-200">
            </div>

            <div class="flex items-center justify-between space-x-4">
                <button type="submit"
                    class="w-full text-white bg-orange-600 hover:bg-orange-700 rounded-md py-2 text-sm font-medium">
                    Add Product
                </button>
                <a href="{{ route('products.store') }}"
                    class="w-full text-center text-gray-800 bg-gray-200 hover:bg-gray-300 rounded-md py-2 text-sm font-medium">
                    Cancel
                </a>
            </div>
        </form>
    </div>
</div>
@endsection