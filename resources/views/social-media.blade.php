<!DOCTYPE html>
<html>
<head>
    <title>Sting — {{ __('Social Media') }}</title>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .social-wrap { max-width: 800px; margin: 60px auto; padding: 0 20px; }
        h1 { color: yellow; margin-bottom: 10px; text-align: center; }
        .subtitle { text-align: center; color: #aaa; margin-bottom: 50px; }
        .social-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 20px; margin-top: 40px; }
        .social-card { background: #111; padding: 30px; text-align: center; border: 1px solid #222; transition: all 0.3s; }
        .social-card:hover { border-color: yellow; transform: translateY(-5px); }
        .social-icon { font-size: 3rem; margin-bottom: 15px; }
        .social-name { color: yellow; font-size: 1.3rem; font-weight: bold; margin-bottom: 10px; }
        .social-handle { color: #aaa; margin-bottom: 20px; font-size: 0.9rem; }
        .social-link { display: inline-block; background: yellow; color: black; padding: 10px 25px; text-decoration: none; font-weight: bold; }
        .social-link:hover { background: gold; }
        .newsletter-section { background: #111; padding: 40px; margin-top: 50px; text-align: center; }
        .newsletter-section h2 { color: yellow; margin-bottom: 15px; }
        .newsletter-section p { color: #aaa; margin-bottom: 25px; }
        .newsletter-form { display: flex; gap: 10px; max-width: 500px; margin: 0 auto; flex-wrap: wrap; justify-content: center; }
        .newsletter-input { flex: 1; min-width: 250px; padding: 12px; background: #1a1a1a; border: 1px solid #333; color: white; }
        .newsletter-button { padding: 12px 30px; background: yellow; color: black; border: none; font-weight: bold; cursor: pointer; }
        .newsletter-button:hover { background: gold; }
    </style>
</head>
<body>
@include('partials.navbar')

<div class="social-wrap">
    <h1>{{ __('Connect With Sting') }}</h1>
    <p class="subtitle">{{ __('Follow for the latest news, tour dates, and exclusive content') }}</p>

    <div class="social-grid">
        <div class="social-card">
            <div class="social-icon">📘</div>
            <div class="social-name">Facebook</div>
            <div class="social-handle">@officialsting</div>
            <a href="https://facebook.com/sting" target="_blank" class="social-link">{{ __('Follow') }}</a>
        </div>

        <div class="social-card">
            <div class="social-icon">📷</div>
            <div class="social-name">Instagram</div>
            <div class="social-handle">@theofficialsting</div>
            <a href="https://instagram.com/theofficialsting" target="_blank" class="social-link">{{ __('Follow') }}</a>
        </div>

        <div class="social-card">
            <div class="social-icon">🐦</div>
            <div class="social-name">Twitter</div>
            <div class="social-handle">@OfficialSting</div>
            <a href="https://twitter.com/officialsting" target="_blank" class="social-link">{{ __('Follow') }}</a>
        </div>

        <div class="social-card">
            <div class="social-icon">▶️</div>
            <div class="social-name">YouTube</div>
            <div class="social-handle">Sting</div>
            <a href="https://youtube.com/sting" target="_blank" class="social-link">{{ __('Subscribe') }}</a>
        </div>

        <div class="social-card">
            <div class="social-icon">🎵</div>
            <div class="social-name">Spotify</div>
            <div class="social-handle">Sting</div>
            <a href="https://open.spotify.com/artist/0Ty63ceoRnnJKVEYP0VQpk" target="_blank" class="social-link">{{ __('Listen') }}</a>
        </div>

        <div class="social-card">
            <div class="social-icon">🎧</div>
            <div class="social-name">Apple Music</div>
            <div class="social-handle">Sting</div>
            <a href="https://music.apple.com/artist/sting" target="_blank" class="social-link">{{ __('Listen') }}</a>
        </div>

        <div class="social-card">
            <div class="social-icon">🎬</div>
            <div class="social-name">TikTok</div>
            <div class="social-handle">@sting</div>
            <a href="https://tiktok.com/@sting" target="_blank" class="social-link">{{ __('Follow') }}</a>
        </div>

        <div class="social-card">
            <div class="social-icon">💼</div>
            <div class="social-name">LinkedIn</div>
            <div class="social-handle">Sting</div>
            <a href="https://linkedin.com/in/sting" target="_blank" class="social-link">{{ __('Connect') }}</a>
        </div>
    </div>

    <div class="newsletter-section">
        <h2>{{ __('Join Our Newsletter') }}</h2>
        <p>{{ __('Get exclusive updates, early ticket access, and special announcements delivered to your inbox.') }}</p>
        <form class="newsletter-form" action="/contact" method="GET">
            <input type="email" name="email" placeholder="{{ __('Enter your email') }}" class="newsletter-input" required>
            <button type="submit" class="newsletter-button">{{ __('Subscribe') }}</button>
        </form>
    </div>
</div>

</body>
</html>