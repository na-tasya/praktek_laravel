<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">
            Data Produk
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div style="margin-bottom: 20px; text-align: right;">
                <a href="{{ route('products.create') }}"
                    style="display: inline-block; background-color: #2563eb; color: white; padding: 10px 16px; border-radius: 6px; text-decoration: none;">
                    + Tambah Produk
                </a>
            </div>

            <x-card>
                @if (session('success'))
                    <div class="mb-4 p-3 bg-green-100 text-green-700 rounded-md text-sm">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">
                                    Kode
                                </th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">
                                    Nama Produk
                                </th>
                                <th class="px-4 py-2 text-left text-xs font-medium text-gray-500">
                                    Kategori
                                </th>
                                <th class="px-4 py-2 text-right text-xs font-medium text-gray-500">
                                    Harga
                                </th>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500">
                                    Stok
                                </th>
                                <th class="px-4 py-2 text-center text-xs font-medium text-gray-500">
                                    Aksi
                                </th>
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-100">
                            @forelse ($products as $product)
                                <tr>
                                    <td class="px-4 py-2 text-sm">
                                        {{ $product->code }}
                                    </td>

                                    <td class="px-4 py-2 text-sm">
                                        {{ $product->name }}
                                    </td>

                                    <td class="px-4 py-2 text-sm">
                                        {{ $product->category->name ?? '-' }}
                                    </td>

                                    <td class="px-4 py-2 text-sm text-right">
                                        Rp{{ number_format($product->price, 0, ',', '.') }}
                                    </td>

                                    <td class="px-4 py-2 text-sm text-center font-semibold">
                                        {{ $product->stock }}

                                        @if ($product->stock == 0)
                                            <span class="text-red-600 text-xs block">
                                                Habis
                                            </span>
                                        @elseif ($product->stock < 10)
                                            <span class="text-yellow-600 text-xs block">
                                                Menipis
                                            </span>
                                        @endif
                                    </td>

                                    <td class="px-4 py-2 text-sm text-center whitespace-nowrap">
                                        <a href="{{ route('products.edit', $product) }}"
                                            class="text-indigo-600 hover:text-indigo-800">
                                            Ubah
                                        </a>

                                        <form action="{{ route('products.destroy', $product) }}"
                                            method="POST"
                                            onsubmit="return confirm('Yakin ingin menghapus produk {{ $product->name }}?')"
                                            class="inline">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit"
                                                class="text-red-600 hover:text-red-800 ml-2">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="6"
                                        class="px-4 py-6 text-center text-gray-500">
                                        Belum ada data produk.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $products->links() }}
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>