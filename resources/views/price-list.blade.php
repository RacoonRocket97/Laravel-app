<!DOCTYPE html>
<html>
<head>
    <title>Sting — {{ __('Price List') }}</title>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .price-wrap { max-width: 900px; margin: 60px auto; padding: 0 20px; }
        h1 { color: yellow; margin-bottom: 10px; text-align: center; }
        .subtitle { text-align: center; color: #aaa; margin-bottom: 40px; }
        .price-section { background: #111; padding: 40px; margin-bottom: 20px; }
        .price-section h2 { color: yellow; margin-bottom: 20px; border-bottom: 2px solid yellow; padding-bottom: 10px; }
        .price-table { width: 100%; margin-top: 20px; }
        .price-row { display: flex; justify-content: space-between; padding: 15px 0; border-bottom: 1px solid #222; }
        .price-row:last-child { border-bottom: none; }
        .price-item { color: #aaa; flex: 1; }
        .price-cost { color: yellow; font-weight: bold; text-align: right; min-width: 100px; }
        .vip-notice { background: #1a1a00; border: 2px solid yellow; padding: 20px; text-align: center; margin-top: 30px; }
        .vip-notice h3 { color: yellow; margin-bottom: 10px; }
        .vip-notice p { color: #aaa; margin-bottom: 15px; }
        .vip-notice a { color: yellow; text-decoration: none; border: 1px solid yellow; padding: 10px 20px; display: inline-block; }
        .vip-notice a:hover { background: yellow; color: black; }
    </style>
</head>
<body>
@include('partials.navbar')

<div class="price-wrap">
    <h1>{{ __('Price List') }}</h1>
    <p class="subtitle">{{ __('Merchandise, Tickets & Services') }}</p>

    <div class="price-section">
        <h2>{{ __('Concert Tickets') }}</h2>
        <div class="price-table">
            <div class="price-row">
                <div class="price-item">{{ __('General Admission') }}</div>
                <div class="price-cost">$75</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('Premium Seating') }}</div>
                <div class="price-cost">$150</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('Front Row') }}</div>
                <div class="price-cost">$300</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('VIP Package (includes meet & greet)') }}</div>
                <div class="price-cost">$750</div>
            </div>
        </div>
    </div>

    <div class="price-section">
        <h2>{{ __('Official Merchandise') }}</h2>
        <div class="price-table">
            <div class="price-row">
                <div class="price-item">{{ __('T-Shirt (Standard)') }}</div>
                <div class="price-cost">$35</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('T-Shirt (Premium)') }}</div>
                <div class="price-cost">$45</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('Hoodie') }}</div>
                <div class="price-cost">$65</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('Poster (Signed)') }}</div>
                <div class="price-cost">$50</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('Vinyl Album') }}</div>
                <div class="price-cost">$40</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('CD Album') }}</div>
                <div class="price-cost">$20</div>
            </div>
        </div>
    </div>

    <div class="price-section">
        <h2>{{ __('Digital Content') }}</h2>
        <div class="price-table">
            <div class="price-row">
                <div class="price-item">{{ __('Live Stream Access (Single Concert)') }}</div>
                <div class="price-cost">$25</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('Live Stream Access (Full Tour)') }}</div>
                <div class="price-cost">$99</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('Digital Album Download') }}</div>
                <div class="price-cost">$12</div>
            </div>
            <div class="price-row">
                <div class="price-item">{{ __('Behind-the-Scenes Documentary') }}</div>
                <div class="price-cost">$15</div>
            </div>
        </div>
    </div>

    <div class="vip-notice">
        <h3>{{ __('Looking for Something Exclusive?') }}</h3>
        <p>{{ __('VIP members and administrators have access to exclusive booking options including private performances, studio sessions, and premium experiences.') }}</p>
        @if(auth()->check() && in_array(auth()->user()->role, ['admin', 'vip_member']))
            <a href="/vip-price-list">{{ __('View VIP Price List') }}</a>
        @else
            <p style="color: #666;">{{ __('VIP access required') }}</p>
        @endif
    </div>
</div>

</body>
</html>