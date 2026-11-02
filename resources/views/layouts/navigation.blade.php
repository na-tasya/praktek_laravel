
<nav style="background: #ffffff; border-bottom: 1px solid #e5e7eb; padding: 12px 32px; display: flex; align-items: center; gap: 24px; flex-wrap: wrap;">
    @auth
        <a href="{{ route('dashboard') }}"
           style="color: #374151; text-decoration: none; font-weight: bold;">
            Dashboard
        </a>

        <a href="{{ route('categories.index') }}"
           style="color: #374151; text-decoration: none;">
            Kategori
        </a>

        <a href="{{ route('products.index') }}"
           style="color: #374151; text-decoration: none;">
            Produk
        </a>

        <div style="margin-left: auto;">
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    style="border: 1px solid #d1d5db; background: #ffffff; color: #374151; padding: 9px 14px; border-radius: 6px; cursor: pointer;">
                    Keluar
                </button>
            </form>
        </div>
    @endauth
</nav>