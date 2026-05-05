<!DOCTYPE html>
<html>
<head>
    <title>Sting — {{ __('VIP Price List') }}</title>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .vip-wrap { max-width: 900px; margin: 60px auto; padding: 0 20px; }
        h1 { color: yellow; margin-bottom: 10px; text-align: center; }
        .subtitle { text-align: center; color: #aaa; margin-bottom: 40px; }
        .vip-badge { background: yellow; color: black; padding: 5px 15px; display: inline-block; font-weight: bold; margin-bottom: 30px; }
        .price-section { background: #111; padding: 40px; margin-bottom: 20px; border: 2px solid yellow; }
        .price-section h2 { color: yellow; margin-bottom: 20px; border-bottom: 2px solid yellow; padding-bottom: 10px; }
        .price-table { width: 100%; margin-top: 20px; }
        .price-row { display: flex; justify-content: space-between; align-items: flex-start; padding: 15px 0; border-bottom: 1px solid #222; }
        .price-row:last-child { border-bottom: none; }
        .price-item { color: #aaa; flex: 1; }
        .price-item-title { color: yellow; font-weight: bold; margin-bottom: 5px; }
        .price-item-desc { color: #666; font-size: 0.9rem; }
        .price-cost { color: yellow; font-weight: bold; text-align: right; min-width: 120px; font-size: 1.2rem; }
        .booking-notice { background: #1a1a00; border: 2px solid yellow; padding: 25px; text-align: center; margin-top: 30px; }
        .booking-notice h3 { color: yellow; margin-bottom: 10px; }
        .booking-notice p { color: #aaa; margin-bottom: 15px; line-height: 1.6; }
        .contact-link { color: yellow; text-decoration: none; border: 1px solid yellow; padding: 12px 30px; display: inline-block; font-weight: bold; }
        .contact-link:hover { background: yellow; color: black; }
    </style>
</head>
<body>
@include('partials.navbar')

<div class="vip-wrap">
    <div style="text-align: center;">
        <span class="vip-badge">VIP EXCLUSIVE</span>
    </div>
    <h1>{{ __('VIP Price List') }}</h1>
    <p class="subtitle">{{ __('Exclusive Experiences & Premium Bookings') }}</p>

    <div class="price-section">
        <h2>{{ __('Private Performances') }}</h2>
        <div class="price-table">
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Intimate Acoustic Set (30 minutes)') }}</div>
                    <div class="price-item-desc">{{ __('Solo performance with 3-5 classic songs') }}</div>
                </div>
                <div class="price-cost">$25,000</div>
            </div>
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Private Concert (90 minutes)') }}</div>
                    <div class="price-item-desc">{{ __('Full band performance for up to 100 guests') }}</div>
                </div>
                <div class="price-cost">$150,000</div>
            </div>
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Corporate Event Performance (2 hours)') }}</div>
                    <div class="price-item-desc">{{ __('Full production with band, up to 500 guests') }}</div>
                </div>
                <div class="price-cost">$300,000</div>
            </div>
        </div>
    </div>

    <div class="price-section">
        <h2>{{ __('Studio & Recording Sessions') }}</h2>
        <div class="price-table">
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Guest Vocals on Your Track') }}</div>
                    <div class="price-item-desc">{{ __('Studio recording session, 1 song, includes mixing') }}</div>
                </div>
                <div class="price-cost">$50,000</div>
            </div>
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Co-Writing Session (Full Day)') }}</div>
                    <div class="price-item-desc">{{ __('Collaborative songwriting in professional studio') }}</div>
                </div>
                <div class="price-cost">$75,000</div>
            </div>
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Full Album Production') }}</div>
                    <div class="price-item-desc">{{ __('Complete album production and collaboration') }}</div>
                </div>
                <div class="price-cost">{{ __('Contact') }}</div>
            </div>
        </div>
    </div>

    <div class="price-section">
        <h2>{{ __('Exclusive Experiences') }}</h2>
        <div class="price-table">
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Meet & Greet with Photo Session') }}</div>
                    <div class="price-item-desc">{{ __('30-minute private meeting, professional photos') }}</div>
                </div>
                <div class="price-cost">$10,000</div>
            </div>
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Dinner with Sting (2 guests max)') }}</div>
                    <div class="price-item-desc">{{ __('Private dining experience at exclusive venue') }}</div>
                </div>
                <div class="price-cost">$100,000</div>
            </div>
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Personal Music Lesson (2 hours)') }}</div>
                    <div class="price-item-desc">{{ __('One-on-one instruction: bass, guitar, or vocals') }}</div>
                </div>
                <div class="price-cost">$20,000</div>
            </div>
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Backstage Tour Package') }}</div>
                    <div class="price-item-desc">{{ __('Complete backstage access, soundcheck attendance, meet band') }}</div>
                </div>
                <div class="price-cost">$15,000</div>
            </div>
        </div>
    </div>

    <div class="price-section">
        <h2>{{ __('Collector\'s Items') }}</h2>
        <div class="price-table">
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Custom Signed Memorabilia') }}</div>
                    <div class="price-item-desc">{{ __('Personalized autograph on item of your choice') }}</div>
                </div>
                <div class="price-cost">$5,000</div>
            </div>
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Stage-Played Instrument') }}</div>
                    <div class="price-item-desc">{{ __('Bass guitar or instrument used in recent concert') }}</div>
                </div>
                <div class="price-cost">$50,000+</div>
            </div>
            <div class="price-row">
                <div class="price-item">
                    <div class="price-item-title">{{ __('Handwritten Lyrics') }}</div>
                    <div class="price-item-desc">{{ __('Original handwritten lyrics from selected song') }}</div>
                </div>
                <div class="price-cost">$25,000</div>
            </div>
        </div>
    </div>

    <div class="booking-notice">
        <h3>{{ __('How to Book') }}</h3>
        <p>{{ __('All VIP experiences require advance booking and are subject to availability. Prices listed are base rates and may vary based on location, date, and specific requirements.') }}</p>
        <p>{{ __('To inquire about booking or to discuss custom packages, please contact our VIP booking team.') }}</p>
        <a href="/contact" class="contact-link">{{ __('Contact VIP Booking Team') }}</a>
    </div>
</div>

</body>
</html>