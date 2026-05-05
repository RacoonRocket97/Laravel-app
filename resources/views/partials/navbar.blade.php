<meta name="viewport" content="width=device-width, initial-scale=1.0">

<header class="navbar">
    <div class="logo">Sting</div>

    <button class="hamburger" id="hamburger" aria-label="Toggle menu">
        <span></span>
        <span></span>
        <span></span>
    </button>

    <div class="menu" id="nav-menu">
        <a href="/">{{ __('Home') }}</a>
        <a href="/stats">{{ __('Stats') }}</a>
        
        <a href="{{ route('social.media') }}">{{ __('Social Media') }}</a>
        <a href="{{ route('terms') }}">{{ __('Terms & Conditions') }}</a>
        
        <a href="/contact">{{ __('Contact') }}</a>
        @auth
            <a href="/dashboard">{{ __('Dashboard') }}</a>
        @else
            <a href="/login">{{ __('Log In') }}</a>
            <a href="/register">{{ __('Register') }}</a>
        @endauth
    </div>

    <div class="lang-switcher">
        <a href="{{ route('lang.switch', 'en') }}" class="{{ session('locale', 'en') == 'en' ? 'active' : '' }}">EN</a>
        <a href="{{ route('lang.switch', 'ru') }}" class="{{ session('locale', 'en') == 'ru' ? 'active' : '' }}">RU</a>
        <a href="{{ route('lang.switch', 'kz') }}" class="{{ session('locale', 'en') == 'kz' ? 'active' : '' }}">KZ</a>
    </div>
</header>

<script>
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.getElementById('nav-menu');
    if (hamburger) {
        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('open');
        });
    }
</script>