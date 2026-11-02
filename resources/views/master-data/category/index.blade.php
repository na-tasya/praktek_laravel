
<x-app-layout>
    <div style="padding: 30px;">
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">
            Data Kategori
        </h1>

        <a href="{{ route('categories.create') }}"
           style="display: inline-block; background: #2563eb; color: white; padding: 10px 16px; border-radius: 8px; text-decoration: none; margin-bottom: 20px;">
            + Tambah Kategori
        </a>

        @if (session('success'))
            <p style="color: green; margin-bottom: 15px;">
                {{ session('success') }}
            </p>
        @endif

        <table style="width: 100%; border-collapse: collapse;">
            <thead>
                <tr style="background: #f3f4f6; text-align: left;">
                    <th style="padding: 12px; border: 1px solid #ddd;">No.</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Nama Kategori</th>
                    <th style="padding: 12px; border: 1px solid #ddd;">Dibuat</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($categories as $category)
                    <tr>
                        <td style="padding: 12px; border: 1px solid #ddd;">
                            {{ $categories->firstItem() + $loop->index }}
                        </td>
                        <td style="padding: 12px; border: 1px solid #ddd;">
                            {{ $category->name }}
                        </td>
                        <td style="padding: 12px; border: 1px solid #ddd;">
                            {{ $category->created_at?->format('d-m-Y') }}
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" style="padding: 12px; border: 1px solid #ddd;">
                            Belum ada data kategori.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <div style="margin-top: 20px;">
            {{ $categories->links() }}
        </div>
    </div>
</x-app-layout>
