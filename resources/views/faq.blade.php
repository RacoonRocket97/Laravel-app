<!DOCTYPE html>
<html>
<head>
    <title>Sting — {{ __('FAQ') }}</title>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .faq-wrap { max-width: 900px; margin: 60px auto; padding: 0 20px; }
        .faq-box { background: #111; padding: 40px; margin-bottom: 20px; }
        h1 { color: yellow; margin-bottom: 30px; text-align: center; }
        .faq-item { margin-bottom: 30px; padding-bottom: 30px; border-bottom: 1px solid #222; }
        .faq-item:last-child { border-bottom: none; }
        .faq-question { color: yellow; font-size: 1.1rem; font-weight: bold; margin-bottom: 12px; }
        .faq-answer { color: #aaa; line-height: 1.7; }
    </style>
</head>
<body>
@include('partials.navbar')

<div class="faq-wrap">
    <h1>{{ __('Frequently Asked Questions') }}</h1>
    
    <div class="faq-box">
        <div class="faq-item">
            <div class="faq-question">{{ __('When did Sting start his solo career?') }}</div>
            <div class="faq-answer">{{ __('Sting began his solo career in 1985 after leaving The Police. His debut solo album "The Dream of the Blue Turtles" was released that same year.') }}</div>
        </div>

        <div class="faq-item">
            <div class="faq-question">{{ __('What instruments does Sting play?') }}</div>
            <div class="faq-answer">{{ __('Sting is primarily known for playing bass guitar and singing, but he also plays guitar, piano, and has studied the lute.') }}</div>
        </div>

        <div class="faq-item">
            <div class="faq-question">{{ __('How many Grammy Awards has Sting won?') }}</div>
            <div class="faq-answer">{{ __('Sting has won 17 Grammy Awards throughout his career, both as a solo artist and as a member of The Police.') }}</div>
        </div>

        <div class="faq-item">
            <div class="faq-question">{{ __('Is Sting currently on tour?') }}</div>
            <div class="faq-answer">{{ __('For current tour information, please check the official Sting website or social media channels for the latest updates.') }}</div>
        </div>

        <div class="faq-item">
            <div class="faq-question">{{ __('What is Sting\'s real name?') }}</div>
            <div class="faq-answer">{{ __('Sting was born Gordon Matthew Thomas Sumner on October 2, 1951, in Wallsend, England.') }}</div>
        </div>

        <div class="faq-item">
            <div class="faq-question">{{ __('How did Sting get his nickname?') }}</div>
            <div class="faq-answer">{{ __('He earned the nickname "Sting" because of a black and yellow striped sweater he often wore, which made him look like a bee.') }}</div>
        </div>
    </div>
</div>

</body>
</html>