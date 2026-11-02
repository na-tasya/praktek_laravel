
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'POS Barokah Mart' }}</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f8f5f6;
            color: #39313a;
        }

        .app-header {
            background: #ffffff;
            border-bottom: 1px solid #eadfe4;
            padding: 18px 32px;
        }

        .app-brand {
            font-size: 19px;
            font-weight: bold;
            color: #9d627b;
        }

        .app-main {
            max-width: 1150px;
            margin: 32px auto;
            padding: 0 24px;
        }

        .app-footer {
            text-align: center;
            padding: 24px;
            color: #8c7d86;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .app-main {
                padding: 0 16px;
            }
        }
    </style>
</head>
<body>
    <header class="app-header">
        <div class="app-brand">POS BAROKAH MART</div>
    </header>

    @include('layouts.navigation')

    <main class="app-main">
        {{ $slot }}
    </main>

    <footer class="app-footer">
        &copy; {{ date('Y') }} POS Barokah Mart
        — Sistem Kasir dan Manajemen Toko
    </footer>
</body>
</html>