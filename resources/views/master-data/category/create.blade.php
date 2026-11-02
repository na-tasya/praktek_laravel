
<x-app-layout>
    <div style="padding: 30px; max-width: 700px; margin: auto;">
        <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 20px;">
            Tambah Kategori
        </h1>

        <form action="{{ route('categories.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 20px;">
                <label for="name" style="display: block; margin-bottom: 8px;">
                    Nama Kategori
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    value="{{ old('name') }}"
                    placeholder="Contoh: Sembako"
                    required
                    style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 8px;"
                >

                @error('name')
                    <p style="color: red; margin-top: 5px;">{{ $message }}</p>
                @enderror
            </div>

            <div style="margin-bottom: 20px;">
                <label for="description" style="display: block; margin-bottom: 8px;">
                    Deskripsi
                </label>

                <textarea
                    id="description"
                    name="description"
                    placeholder="Masukkan deskripsi kategori"
                    rows="4"
                    style="width: 100%; padding: 10px; border: 1px solid #d1d5db; border-radius: 8px;"
                >{{ old('description') }}</textarea>

                @error('description')
                    <p style="color: red; margin-top: 5px;">{{ $message }}</p>
                @enderror
            </div>

            <button
                type="submit"
                style="background: #2563eb; color: white; padding: 10px 18px; border: none; border-radius: 8px; cursor: pointer;"
            >
                Simpan Kategori
            </button>

            <a
                href="{{ route('categories.index') }}"
                style="margin-left: 10px; color: #374151; text-decoration: none;"
            >
                Batal
            </a>
        </form>
    </div>
</x-app-layout>
