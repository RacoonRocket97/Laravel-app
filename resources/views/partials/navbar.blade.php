<header class="navbar">
    <div class="logo">Sting</div>
    <div class="menu">
        <a href="/">{{ __('Home') }}</a>
        <a href="#">{{ __('Gallery') }}</a>
        <a href="#">{{ __('Projects') }}</a>
        <a href="/stats">{{ __('Stats') }}</a>
        <a href="#">{{ __('Contact') }}</a>
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