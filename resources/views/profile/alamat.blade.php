@extends('layout.main')

@section('section')
<div class="container mx-auto px-6 py-8">
    <div class="flex items-center justify-between mb-6">
    <h1 class="text-3xl font-bold text-gray-800 mb-6">Daftar Alamat</h1>
    <a href="{{ route('alamats.create') }}" class="inline-block bg-slate-700 text-white px-6 py-2 rounded-lg shadow-md hover:bg-slate-800 transition duration-200 mb-6">
        Tambah Alamat
    </a>
    </div>
    
    <!-- Tabel Daftar Alamat -->
    <div class="overflow-x-auto bg-white shadow-lg rounded-lg">
        <table class="min-w-full table-auto border-collapse">
            <thead class="bg-gray-100">
                <tr class="text-left">
                    <!-- Header Tabel -->
                    <th class="px-6 py-4 border-b text-sm font-medium text-gray-700">Alamat Lengkap</th>
                    <th class="px-6 py-4 border-b text-sm font-medium text-gray-700">Kota</th>
                    <th class="px-6 py-4 border-b text-sm font-medium text-gray-700">Provinsi</th>
                    <th class="px-6 py-4 border-b text-sm font-medium text-gray-700">Kode Pos</th>
                    <th class="px-6 py-4 border-b text-sm font-medium text-gray-700">Aksi</th>
                </tr>
            </thead>
            <tbody class="text-sm text-gray-600">
                <!-- Menampilkan Daftar Alamat -->
                @foreach ($alamats as $alamat)
                <tr class="hover:bg-gray-50 transition duration-200">
                    <td class="px-6 py-4 border-b">{{ $alamat->alamat_lengkap }}</td>
                    <td class="px-6 py-4 border-b">{{ $alamat->kota }}</td>
                    <td class="px-6 py-4 border-b">{{ $alamat->provinsi }}</td>
                    <td class="px-6 py-4 border-b">{{ $alamat->kode_pos }}</td>
                    <td class="px-6 py-4 border-b flex space-x-2">
                        <!-- Tombol Edit -->
                        <a href="{{ route('alamats.edit', $alamat->id) }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                            Edit
                        </a>
                        <!-- Form Hapus -->
                        <form action="{{ route('alamats.destroy', $alamat->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="inline-block bg-red-500 text-white px-4 py-2 rounded-lg hover:bg-red-600 transition duration-200 ml-2">
                                Hapus
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
