<!DOCTYPE html>
<html>
<head>
    <title>Sting — Dashboard</title>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .dashboard-wrap { max-width: 800px; margin: 60px auto; padding: 0 20px; }
        .dashboard-box { background: #111; padding: 40px; }
        .dashboard-box h2 { color: yellow; margin-bottom: 10px; }
        .dashboard-box p { color: #aaa; margin-bottom: 20px; }
        .role-badge { display: inline-block; background: yellow; color: black; font-weight: bold; padding: 4px 14px; font-size: 0.85rem; margin-bottom: 24px; }
        .nav-links { display: flex; gap: 12px; flex-wrap: wrap; }
        .nav-links a { background: #1a1a1a; color: yellow; border: 1px solid #333; padding: 10px 20px; text-decoration: none; transition: 0.2s; }
        .nav-links a:hover { border-color: yellow; }
        .logout-form { margin-top: 30px; }
        .logout-form button { background: none; border: 1px solid #555; color: #aaa; padding: 8px 18px; cursor: pointer; transition: 0.2s; }
        .logout-form button:hover { border-color: red; color: red; }
    </style>
</head>
<body>
@include('partials.navbar')

<div class="dashboard-wrap">
    <div class="dashboard-box">
        <h2>{{ __('Welcome') }}, {{ $user->name }}</h2>
        <span class="role-badge">{{ strtoupper(str_replace('_', ' ', $user->role)) }}</span>
        <p>{{ $user->email }}</p>

        <div class="nav-links">
            <a href="{{ route('upload.index') }}">{{ __('My Uploads') }}</a>
            <a href="{{ route('contact.index') }}">{{ __('Contact') }}</a>
            <a href="{{ route('price.list') }}">{{ __('Price List') }}</a>
            
            {{-- VIP and Admin Only Section --}}
            @if(in_array($user->role, ['vip', 'admin']))
                <a href="{{ route('faq') }}">{{ __('FAQ') }}</a>
                <a href="{{ route('biography') }}">{{ __('Biography') }}</a>
            @endif
            
            {{-- Admin Only Section --}}
            @if($user->role === 'admin')
                <a href="{{ route('admin.panel') }}">{{ __('Admin Panel') }}</a>
            @endif
        </div>

        <form class="logout-form" method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit">{{ __('Log Out') }}</button>
        </form>
    </div>
</div>
</body>
</html>