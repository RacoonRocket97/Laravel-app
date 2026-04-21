<!DOCTYPE html>
<html>
<head>
    <title>Sting — Dashboard</title>
    <link rel="stylesheet" href="/style.css">
    <style>
        .dashboard-wrap { max-width: 800px; margin: 60px auto; padding: 0 20px; }
        .dashboard-box { background: #111; padding: 40px; }
        .dashboard-box h2 { color: yellow; margin-bottom: 10px; }
        .dashboard-box p { color: #aaa; margin-bottom: 20px; }
        .role-badge { display: inline-block; background: yellow; color: black; font-weight: bold; padding: 4px 14px; font-size: 0.85rem; margin-bottom: 24px; }
        .nav-links { display: flex; gap: 12px; flex-wrap: wrap; }
        .nav-links a { background: #1a1a1a; color: yellow; border: 1px solid #333; padding: 10px 20px; text-decoration: none; }
        .nav-links a:hover { border-color: yellow; }
        .logout-form { margin-top: 30px; }
        .logout-form button { background: none; border: 1px solid #555; color: #aaa; padding: 8px 18px; cursor: pointer; }
        .logout-form button:hover { border-color: red; color: red; }
    </style>
</head>
<body>
@include('partials.navbar')
<div class="dashboard-wrap">
    <div class="dashboard-box">
        <h2>Welcome, {{ $user->name }}</h2>
        <span class="role-badge">{{ strtoupper(str_replace('_', ' ', $user->role)) }}</span>
        <p>{{ $user->email }}</p>

        <div class="nav-links">
            <a href="/upload">My Uploads</a>
            <a href="/contact">Contact</a>
            <a href="/fanzone">Fan Zone</a>
            @if(in_array($user->role, ['admin', 'vip_member']))
                <a href="/vip">VIP Lounge</a>
            @endif
            @if(in_array($user->role, ['admin', 'journalist']))
                <a href="/press">Press Room</a>
            @endif
            @if($user->role === 'admin')
                <a href="/admin">Admin Panel</a>
            @endif
        </div>

        <form class="logout-form" method="POST" action="/logout">
            @csrf
            <button type="submit">Log Out</button>
        </form>
    </div>
</div>
</body>
</html>