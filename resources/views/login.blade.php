<!DOCTYPE html>
<html>
<head>
    <title>Sting — {{ __('Login') }}</title>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .form-section {
            display: flex;
            justify-content: center;
            padding: 60px 20px;
        }
        .form-box {
            background: #111;
            padding: 40px;
            width: 100%;
            max-width: 420px;
        }
        .form-box h2 {
            color: yellow;
            margin-bottom: 24px;
            font-size: 1.4rem;
        }
        .form-box label {
            display: block;
            color: #aaa;
            margin-bottom: 6px;
        }
        .form-box input {
            width: 100%;
            padding: 10px;
            margin-bottom: 18px;
            background: #1a1a1a;
            border: 1px solid #333;
            color: white;
        }
        .form-box input:focus {
            outline: none;
            border-color: yellow;
        }
        .form-box button {
            width: 100%;
            padding: 11px;
            background: yellow;
            color: black;
            font-weight: bold;
            border: none;
            cursor: pointer;
        }
        .form-box button:hover { background: gold; }
        .form-box .link {
            text-align: center;
            margin-top: 16px;
            color: #aaa;
        }
        .form-box .link a { color: yellow; text-decoration: none; }
        .msg {
            padding: 12px;
            margin-bottom: 18px;
            font-weight: bold;
            text-align: center;
        }
        .msg.success {
            background: #1a3a1a;
            color: #4cff4c;
            border: 1px solid #4cff4c;
        }
        .msg.error {
            background: #3a1a1a;
            color: #ff4c4c;
            border: 1px solid #ff4c4c;
        }
    </style>
</head>
<body>

@include('partials.navbar')

<section class="form-section">
    <div class="form-box">
        <h2>{{ __('Log In') }}</h2>

        @if($message)
            <div class="msg {{ $message_type }}">{{ $message }}</div>
        @endif

        @if(session('success'))
            <div class="msg success">{{ session('success') }}</div>
        @endif

        <form method="POST" action="/login">
            @csrf
            <label>{{ __('Login') }}</label>
            <input type="text" name="login" placeholder="{{ __('Enter email or username') }}" value="{{ old('login') }}" required>

            <label>{{ __('Password') }}</label>
            <input type="password" name="password" placeholder="{{ __('Enter password') }}" required>

            <button type="submit">{{ __('Log In') }}</button>
        </form>

        <div class="link">
            {{ __("Don't have an account?") }} <a href="/register">{{ __('Register') }}</a>
        </div>
    </div>
</section>

</body>
</html>