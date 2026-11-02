<x-app-layout>
    <div style="margin-bottom: 28px;">
        <p style="
            color: #9d627b;
            font-size: 13px;
            font-weight: bold;
            letter-spacing: 1px;
            margin-bottom: 8px;
        ">
            DASHBOARD
        </p>

        <h1 style="
            font-size: 28px;
            margin: 0 0 10px;
            color: #39313a;
        ">
            Selamat Datang, {{ auth()->user()->name }}!
        </h1>

        <p style="color: #8c7d86; line-height: 1.6;">
            Selamat bekerja. Berikut halaman utama sistem
            kasir dan manajemen toko Barokah Mart.
        </p>
    </div>

    <div style="
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 18px;
        margin-bottom: 24px;
    ">
        <x-card>
            <p style="color: #8c7d86; font-size: 14px; margin-top: 0;">
                Nama Pengguna
            </p>

            <h2 style="
                font-size: 21px;
                color: #9d627b;
                margin-bottom: 8px;
            ">
                {{ auth()->user()->name }}
            </h2>

            <p style="font-size: 13px; color: #8c7d86; margin-bottom: 0;">
                Pengguna yang sedang login
            </p>
        </x-card>

        <x-card>
            <p style="color: #8c7d86; font-size: 14px; margin-top: 0;">
                Email Akun
            </p>

            <h3 style="
                font-size: 16px;
                overflow-wrap: anywhere;
                margin-bottom: 8px;
            ">
                {{ auth()->user()->email }}
            </h3>

            <p style="font-size: 13px; color: #8c7d86; margin-bottom: 0;">
                Email akun aktif
            </p>
        </x-card>

        <x-card>
            <p style="color: #8c7d86; font-size: 14px; margin-top: 0;">
                Status Login
            </p>

            <div style="margin: 12px 0;">
                <x-badge type="success">Berhasil Login</x-badge>
            </div>

            <p style="font-size: 13px; color: #8c7d86; margin-bottom: 0;">
                Sesi pengguna sedang aktif
            </p>
        </x-card>
    </div>

    <x-card>
        <h2 style="
            font-size: 20px;
            margin-top: 0;
            margin-bottom: 10px;
        ">
            Informasi Sistem
        </h2>

        <p style="color: #766873; line-height: 1.7;">
            POS Barokah Mart merupakan sistem kasir dan manajemen toko
            yang digunakan untuk mendukung kegiatan operasional toko.
            Halaman ini menjadi halaman utama setelah pengguna berhasil login.
        </p>

        <div style="
            background: #faf4f7;
            border: 1px solid #f0e1e7;
            padding: 16px;
            border-radius: 10px;
            margin-top: 18px;
        ">
            <h3 style="font-size: 15px; margin-top: 0;">
                Panduan Status Stok
            </h3>

            <p style="margin: 12px 0;">
                <x-badge type="success">Stok Aman</x-badge>
                <span style="color: #766873; font-size: 14px;">
                    — Persediaan masih mencukupi.
                </span>
            </p>

            <p style="margin: 12px 0;">
                <x-badge type="warning">Stok Menipis</x-badge>
                <span style="color: #766873; font-size: 14px;">
                    — Persediaan perlu diperiksa.
                </span>
            </p>

            <p style="margin: 12px 0 0;">
                <x-badge type="danger">Stok Habis</x-badge>
                <span style="color: #766873; font-size: 14px;">
                    — Persediaan perlu diisi kembali.
                </span>
            </p>
        </div>
    </x-card>
</x-app-layout>