<!DOCTYPE html>
<html>
<head>
    <title>Sting — Celebrity Portfolio</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

@include('partials.navbar')

<section class="hero">
    <div class="hero-text">
        <h1>{{ __('Get to know the rock Jesus more') }}</h1>
        <p>{{ __('The legend , The man , Rock Jesus') }}</p>
    </div>
</section>

<section class="projects">
    <div class="card">{{ __('Concerts') }}</div>
    <div class="card">{{ __('Live shows') }}</div>
    <div class="card">{{ __('Brand Collaboration') }}</div>
</section>

<div id="ad-banner">
    <div class="ad-header">
        <span class="ad-title">{{ __('New Album Premiere') }}</span>
        <div class="ad-controls">
            <button id="minimize">O</button>
            <button id="closeAd">X</button>
        </div>
    </div>
    <div class="ad-content">
        <p>{{ __('Streaming worldwide this Friday.') }}</p>
    </div>
</div>

<button id="showAdBtn">{{ __('Show Promo') }}</button>

<script src="/script.js"></script>
</body>
</html>