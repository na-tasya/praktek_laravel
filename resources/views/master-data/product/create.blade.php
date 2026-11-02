<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Tambah Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <x-card>

                <form action="{{ route('products.store') }}" method="POST">
                    @csrf

                    {{-- Kategori --}}
                    <div class="mb-4">
                        <label for="category_id" class="block text-sm font-medium text-gray-700">
                            Kategori
                        </label>

                        <select id="category_id" name="category_id" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                            <option value="">-- Pilih Kategori --</option>

                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}"
                                    @selected(old('category_id') == $category->id)>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>

                        @error('category_id')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Kode Produk --}}
                    <div class="mb-4">
                        <label for="code" class="block text-sm font-medium text-gray-700">
                            Kode Produk
                        </label>

                        <input type="text" id="code" name="code"
                            value="{{ old('code') }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

                        @error('code')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Nama Produk --}}
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">
                            Nama Produk
                        </label>

                        <input type="text" id="name" name="name"
                            value="{{ old('name') }}" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

                        @error('name')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Satuan --}}
                    <div class="mb-4">
                        <label for="unit" class="block text-sm font-medium text-gray-700">
                            Satuan
                        </label>

                        <input type="text" id="unit" name="unit"
                            value="{{ old('unit') }}" required
                            placeholder="Contoh: pcs, kg, liter"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

                        @error('unit')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Harga --}}
                    <div class="mb-4">
                        <label for="price" class="block text-sm font-medium text-gray-700">
                            Harga (Rp)
                        </label>

                        <input type="number" id="price" name="price"
                            value="{{ old('price') }}" min="0" step="1" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

                        @error('price')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Stok --}}
                    <div class="mb-6">
                        <label for="stock" class="block text-sm font-medium text-gray-700">
                            Stok
                        </label>

                        <input type="number" id="stock" name="stock"
                            value="{{ old('stock', 0) }}" min="0" required
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

                        @error('stock')
                            <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    {{-- Tombol --}}
                    <div class="flex items-center gap-3">
                        <button type="submit"
                            class="bg-indigo-600 hover:bg-indigo-700 text-white px-4 py-2 rounded-md">
                            Simpan Produk
                        </button>

                        <a href="{{ route('products.index') }}"
                            class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-4 py-2 rounded-md">
                            Batal
                        </a>
                    </div>
                </form>

            </x-card>
        </div>
    </div>
</x-app-layout>