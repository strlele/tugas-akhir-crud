@extends('layout.main')

@section('section')
<div class="container mx-auto px-4 py-6">
    <h1 class="text-2xl font-bold mb-4">Edit Alamat</h1>
    <form action="{{ route('alamats.update', $alamat->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="alamat_lengkap" class="block text-sm font-medium text-gray-700">Alamat Lengkap</label>
            <input type="text" name="alamat_lengkap" id="alamat_lengkap" value="{{ $alamat->alamat_lengkap }}" class="border p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="kota" class="block text-sm font-medium text-gray-700">Kota</label>
            <input type="text" name="kota" id="kota" value="{{ $alamat->kota }}" class="border p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="provinsi" class="block text-sm font-medium text-gray-700">Provinsi</label>
            <input type="text" name="provinsi" id="provinsi" value="{{ $alamat->provinsi }}" class="border p-2 w-full">
        </div>
        <div class="mb-4">
            <label for="kode_pos" class="block text-sm font-medium text-gray-700">Kode Pos</label>
            <input type="text" name="kode_pos" id="kode_pos" value="{{ $alamat->kode_pos }}" class="border p-2 w-full">
        </div>
        <button type="submit" class="bg-black text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
