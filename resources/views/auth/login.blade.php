<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - POS Barokah Mart</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: #f8f5f6;
            font-family: Arial, sans-serif;
            color: #39313a;
        }

        .login-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            max-width: 900px;
            width: 100%;
            background: #ffffff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 12px 35px rgba(85, 51, 68, 0.10);
        }

        .login-intro {
            background: #f0e1e7;
            padding: 48px 38px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-brand {
            color: #9d627b;
            font-weight: bold;
            letter-spacing: 1px;
            font-size: 14px;
        }

        .login-intro h1 {
            font-size: 32px;
            line-height: 1.3;
            margin: 24px 0 12px;
        }

        .login-intro p {
            color: #766873;
            line-height: 1.7;
        }

        .login-form {
            padding: 48px 38px;
        }

        .login-form h2 {
            margin-top: 0;
            margin-bottom: 8px;
        }

        .login-description {
            color: #8c7d86;
            font-size: 14px;
            margin-bottom: 28px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        .form-group label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #dfd4da;
            border-radius: 8px;
            font-size: 14px;
            outline: none;
        }

        .form-group input:focus {
            border-color: #b77f94;
        }

        .login-button {
            width: 100%;
            border: none;
            background: #b77f94;
            color: white;
            padding: 13px;
            border-radius: 8px;
            font-weight: bold;
            font-size: 15px;
            cursor: pointer;
        }

        .login-button:hover {
            background: #9d657c;
        }

        .login-error {
            background: #fff0f0;
            border: 1px solid #f0cccc;
            color: #a33b3b;
            padding: 12px;
            border-radius: 8px;
            font-size: 13px;
            margin-bottom: 18px;
        }

        .login-footer {
            color: #9a8d95;
            font-size: 12px;
            text-align: center;
            margin-top: 26px;
        }

        @media (max-width: 650px) {
            .login-wrapper {
                grid-template-columns: 1fr;
            }

            .login-intro {
                padding: 30px;
            }

            .login-intro h1 {
                font-size: 26px;
                margin-top: 16px;
            }

            .login-form {
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <section class="login-intro">
            <div class="login-brand">POS BAROKAH MART</div>

            <h1>Selamat Datang</h1>

            <p>
                Sistem pengelolaan toko untuk membantu aktivitas
                kasir dan administrasi menjadi lebih mudah dan teratur.
            </p>

            <p><strong>Sistem Kasir dan Manajemen Toko</strong></p>
        </section>

        <section class="login-form">
            <h2>Masuk ke Akun</h2>

            <p class="login-description">
                Masukkan email dan password akun kamu.
            </p>

            @if ($errors->any())
                <div class="login-error">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('login.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="email">Email</label>
                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="nama@email.com"
                        required
                        autofocus
                    >
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                    >
                </div>

                <button type="submit" class="login-button">
                    Masuk
                </button>
            </form>

            <div class="login-footer">
                POS Barokah Mart
            </div>
        </section>
    </div>
</body>
</html>
