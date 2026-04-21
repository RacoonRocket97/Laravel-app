<header class="navbar">
    <div class="logo">Sting</div>
    <div class="menu">
        <a href="/">Home</a>
        <a href="#">Gallery</a>
        <a href="#">Projects</a>
        <a href="/stats">Stats</a>
        <a href="#">Contact</a>
        @auth
            <a href="/dashboard">Dashboard</a>
        @else
            <a href="/login">Login</a>
            <a href="/register">Register</a>
        @endauth
    </div>
</header>