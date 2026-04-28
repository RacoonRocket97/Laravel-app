<!DOCTYPE html>
<html>
<head>
    <title>Sting — Register</title>
    <link rel="stylesheet" href="/style.css">
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
        .form-box button:hover {
            background: gold;
        }
        .form-box .link {
            text-align: center;
            margin-top: 16px;
            color: #aaa;
        }
        .form-box .link a {
            color: yellow;
            text-decoration: none;
        }
    </style>
</head>
<body>

@include('partials.navbar')

<section class="form-section">
    <div class="form-box">
        <h2>{{ __('Create Account') }}</h2>

        <form method="POST" action="/register">
            @csrf

            <label>{{ __('Username') }}</label>
            <input type="text" name="name" placeholder="{{ __('Enter username') }}" value="{{ old('name') }}">
            @error('name')
                <p style="color:red;font-size:0.85rem;margin-top:-12px;margin-bottom:10px;">{{ $message }}</p>
            @enderror

            <label>{{ __('Email') }}</label>
            <input type="email" name="email" placeholder="{{ __('Enter email') }}" value="{{ old('email') }}">
            @error('email')
                <p style="color:red;font-size:0.85rem;margin-top:-12px;margin-bottom:10px;">{{ $message }}</p>
            @enderror

            <label>{{ __('Password') }}</label>
            <input type="password" name="password" placeholder="{{ __('Enter password') }}">
            @error('password')
                <p style="color:red;font-size:0.85rem;margin-top:-12px;margin-bottom:10px;">{{ $message }}</p>
            @enderror

            <label>{{ __('Confirm Password') }}</label>
            <input type="password" name="password_confirmation" placeholder="{{ __('Repeat password') }}">

            <button type="submit">{{ __('Register') }}</button>
        </form>

        <div class="link">Already have an account? <a href="/login">{{ __('Log in') }}</a></div>
    </div>
</section>

</body>
</html>