<!DOCTYPE html>
<html>
<head>
    <title>Sting — {{ __('Biography') }}</title>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .bio-wrap { max-width: 1000px; margin: 60px auto; padding: 0 20px; }
        .bio-header { text-align: center; margin-bottom: 50px; }
        .bio-header h1 { color: yellow; font-size: 2.5rem; margin-bottom: 10px; }
        .bio-header p { color: #aaa; font-size: 1.1rem; }
        .bio-section { background: #111; padding: 40px; margin-bottom: 30px; border: 1px solid #222; }
        .bio-section h2 { color: yellow; margin-bottom: 20px; font-size: 1.5rem; }
        .bio-section p { color: #aaa; line-height: 1.8; margin-bottom: 15px; }
        
        /* Updated image styling */
        .bio-image-container { margin: 20px 0; text-align: center; background: #000; padding: 10px; border: 1px solid #333; }
        .bio-img { max-width: 100%; height: auto; display: block; margin: 0 auto; }
        /* Ensuring the main wide portrait looks good */
        .main-portrait { max-height: 500px; object-fit: cover; width: 100%; }

        .timeline { border-left: 3px solid yellow; padding-left: 30px; margin-left: 20px; }
        .timeline-item { margin-bottom: 30px; position: relative; }
        .timeline-item::before { content: ''; position: absolute; left: -36px; top: 5px; width: 12px; height: 12px; background: yellow; border-radius: 50%; }
        .timeline-year { color: yellow; font-weight: bold; font-size: 1.2rem; margin-bottom: 8px; }
        .timeline-text { color: #aaa; }
    </style>
</head>
<body>
@include('partials.navbar')

<div class="bio-wrap">
    <div class="bio-header">
        <h1>{{ __('Biography') }}</h1>
        <p>{{ __('The Life and Legacy of a Musical Icon') }}</p>
    </div>

    <div class="bio-section">
        <div class="bio-image-container">
            <img src="https://files.datathistle.com/images/2024/09/24/b7cfd52b-2daa-47bc-b074-81463d60dbb4-1812161-tablet-landscape-large-16-9-LST532743.webp" alt="{{ __('Sting Portrait') }}" class="bio-img main-portrait">
        </div>
        
        <h2>{{ __('Early Life') }}</h2>
        <p>{{ __('Born Gordon Matthew Thomas Sumner on October 2, 1951, in Wallsend, Northumberland, England, the musician who would become known as Sting grew up in a working-class family. His father was a milkman and engineer, while his mother was a hairdresser. From an early age, music became his passion and escape.') }}</p>
        
        <p>{{ __('He received his nickname "Sting" during his early days as a jazz musician, thanks to a black and yellow striped sweater he frequently wore that made him resemble a bee. The name stuck and would eventually become one of the most recognizable monikers in music history.') }}</p>
    </div>

    <div class="bio-section">
        <div class="bio-image-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSccE-3IuXl5G4JIGl7HqzjVKjdJYqKrM0pCw&s" alt="{{ __('The Police Band') }}" class="bio-img">
        </div>
        
        <h2>{{ __('The Police Years (1977-1986)') }}</h2>
        <p>{{ __('In 1977, Sting co-founded The Police with drummer Stewart Copeland and guitarist Andy Summers. The band quickly rose to international fame, blending rock, reggae, and punk influences to create a unique sound. Hits like "Roxanne," "Message in a Bottle," and "Every Breath You Take" dominated charts worldwide.') }}</p>
        
        <p>{{ __('The Police won six Grammy Awards and sold over 75 million records, becoming one of the best-selling bands of all time. Despite their success, creative tensions led to the band\'s dissolution in 1986, though they reunited briefly in 2007-2008 for a highly successful world tour.') }}</p>
    </div>

    <div class="bio-section">
        <div class="bio-image-container">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRQ0UCk_l3LiTwzGSnp0tyxBLyLJ4_GDH1rRw&s" alt="{{ __('Sting Solo Career') }}" class="bio-img">
        </div>
        
        <h2>{{ __('Solo Career') }}</h2>
        <p>{{ __('Sting\'s solo career began in 1985 with "The Dream of the Blue Turtles," showcasing his interest in jazz and world music. Throughout his solo work, he has explored various musical genres while maintaining his distinctive voice and songwriting prowess.') }}</p>
        
        <p>{{ __('His solo albums have earned him an additional 11 Grammy Awards, bringing his total to 17. Notable albums include "Ten Summoner\'s Tales" (1993), "Brand New Day" (1999), and "The Last Ship" (2013). He has sold over 100 million records as a solo artist.') }}</p>
    </div>

    <div class="bio-section">
        <h2>{{ __('Career Timeline') }}</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-year">1951</div>
                <div class="timeline-text">{{ __('Born in Wallsend, England') }}</div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-year">1977</div>
                <div class="timeline-text">{{ __('Forms The Police') }}</div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-year">1985</div>
                <div class="timeline-text">{{ __('Releases first solo album') }}</div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-year">1993</div>
                <div class="timeline-text">{{ __('Ten Summoner\'s Tales becomes critically acclaimed') }}</div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-year">2003</div>
                <div class="timeline-text">{{ __('Inducted into Rock and Roll Hall of Fame') }}</div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-year">2007-2008</div>
                <div class="timeline-text">{{ __('The Police Reunion World Tour') }}</div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-year">2024</div>
                <div class="timeline-text">{{ __('Continues touring and recording') }}</div>
            </div>
        </div>
    </div>

    <div class="bio-section">
        <h2>{{ __('Beyond Music') }}</h2>
        <p>{{ __('Sting is also known for his activism and humanitarian work. He has been a vocal advocate for human rights, environmental causes, and the rainforest protection movement. Together with his wife Trudie Styler, he founded the Rainforest Foundation Fund in 1989.') }}</p>
        
        <p>{{ __('He has also ventured into acting, appearing in films such as "Quadrophenia" (1979), "Dune" (1984), and "Lock, Stock and Two Smoking Barrels" (1998). His contributions to music and culture have earned him numerous honors, including a CBE from Queen Elizabeth II.') }}</p>
    </div>
</div>

</body>
</html>