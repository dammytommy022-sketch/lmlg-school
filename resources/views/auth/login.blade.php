<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Log in &mdash; {{ config('app.name', 'LMLG Primary School') }}</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #4c1864;
            --secondary: #3f189a;
            --accent: #f7b205;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: 'Rubik', sans-serif;
            color: #1c1c1c;
        }

        .auth-wrapper {
            display: flex;
            min-height: 100vh;
        }

        .auth-brand {
            position: relative;
            flex: 1 1 45%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 60px 40px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%), url('{{ asset('assets/images/background/bg1.jpg') }}');
            background-blend-mode: multiply;
            background-size: cover;
            background-position: center;
        }

        .auth-brand-inner {
            position: relative;
            z-index: 1;
            text-align: center;
            color: #fff;
            max-width: 380px;
        }

        .auth-brand-inner img {
            max-height: 64px;
            margin-bottom: 28px;
        }

        .auth-brand-inner h1 {
            font-size: 26px;
            font-weight: 700;
            margin: 0 0 12px;
            line-height: 1.3;
        }

        .auth-brand-inner p {
            font-size: 15px;
            color: rgba(255, 255, 255, .85);
            line-height: 1.7;
            margin: 0;
        }

        .auth-brand-accent {
            display: inline-block;
            width: 48px;
            height: 3px;
            background: var(--accent);
            margin: 18px 0;
        }

        .auth-form-panel {
            flex: 1 1 55%;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 24px;
            background: #f7f6fa;
        }

        .auth-form-card {
            width: 100%;
            max-width: 400px;
        }

        .auth-form-card h2 {
            font-size: 24px;
            font-weight: 700;
            margin: 0 0 6px;
            color: #1c1c1c;
        }

        .auth-form-card .auth-subtitle {
            font-size: 14px;
            color: #666;
            margin: 0 0 28px;
        }

        .auth-alert {
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            margin-bottom: 20px;
        }

        .auth-alert-success {
            background: #e6f7ee;
            color: #1a7a4c;
            border: 1px solid #b8e8cd;
        }

        .form-group-auth {
            margin-bottom: 20px;
        }

        .form-group-auth label {
            display: block;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 6px;
            color: #333;
        }

        .auth-input {
            width: 100%;
            padding: 13px 16px;
            font-size: 15px;
            font-family: inherit;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #fff;
            transition: border-color .2s ease, box-shadow .2s ease;
        }

        .auth-input:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(76, 24, 100, .12);
        }

        .auth-error {
            display: block;
            margin-top: 6px;
            font-size: 13px;
            color: #d9364f;
        }

        .auth-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 24px;
            font-size: 14px;
        }

        .auth-checkbox {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #444;
            cursor: pointer;
        }

        .auth-checkbox input {
            accent-color: var(--primary);
            width: 16px;
            height: 16px;
        }

        .auth-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
        }

        .auth-link:hover {
            color: var(--accent);
        }

        .auth-btn {
            width: 100%;
            padding: 14px;
            font-size: 15px;
            font-weight: 700;
            letter-spacing: .3px;
            color: #fff;
            background: var(--primary);
            border: 0;
            border-radius: 30px;
            cursor: pointer;
            transition: background-color .2s ease, transform .1s ease;
        }

        .auth-btn:hover {
            background: var(--secondary);
        }

        .auth-btn:active {
            transform: scale(.99);
        }

        .auth-back-link {
            display: block;
            text-align: center;
            margin-top: 28px;
            font-size: 13px;
            color: #888;
            text-decoration: none;
        }

        .auth-back-link:hover {
            color: var(--primary);
        }

        @media (max-width: 860px) {
            .auth-wrapper {
                flex-direction: column;
            }

            .auth-brand {
                flex: 0 0 auto;
                padding: 36px 24px;
            }

            .auth-brand-inner img {
                max-height: 44px;
                margin-bottom: 14px;
            }

            .auth-brand-inner h1 {
                font-size: 20px;
            }

            .auth-brand-inner p {
                font-size: 13px;
            }

            .auth-brand-accent {
                margin: 10px 0;
            }

            .auth-form-panel {
                flex: 1 1 auto;
                padding: 36px 24px;
            }
        }
    </style>
</head>
<body>
    <div class="auth-wrapper">
        <div class="auth-brand">
            <div class="auth-brand-inner">
                <img src="{{ asset('assets/images/logo-white.png') }}" alt="LMLG Primary School">
                <h1>LMLG Primary School One</h1>
                <span class="auth-brand-accent"></span>
                <p>Building Foundations. Preserving Memories. Inspiring Generations.</p>
            </div>
        </div>

        <div class="auth-form-panel">
            <div class="auth-form-card">
                <h2>Welcome Back</h2>
                <p class="auth-subtitle">Sign in to manage the school portal.</p>

                @if (session('status'))
                    <div class="auth-alert auth-alert-success">{{ session('status') }}</div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group-auth">
                        <label for="email">Email Address</label>
                        <input id="email" class="auth-input" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
                        @error('email')
                            <span class="auth-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="form-group-auth">
                        <label for="password">Password</label>
                        <input id="password" class="auth-input" type="password" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="auth-error">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="auth-row">
                        <label class="auth-checkbox" for="remember_me">
                            <input id="remember_me" type="checkbox" name="remember">
                            Remember me
                        </label>

                        @if (Route::has('password.request'))
                            <a class="auth-link" href="{{ route('password.request') }}">Forgot password?</a>
                        @endif
                    </div>

                    <button type="submit" class="auth-btn">Log In</button>
                </form>

                <a href="{{ route('home') }}" class="auth-back-link">&larr; Back to website</a>
            </div>
        </div>
    </div>
</body>
</html>
