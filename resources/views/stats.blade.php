<!DOCTYPE html>
<html>
<head>
    <title>Sting — By The Numbers</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.umd.min.js"></script>
    <link rel="stylesheet" href="/style.css">
</head>
<body>

@include('partials.navbar')

<section class="page-hero">
    <h1>{{ __('Sting — By The Numbers') }}</h1>
    <p>{{ __('Five decades of music, tours, and cultural impact — visualized.') }}</p>
</section>

<div class="chart-section">

    <div class="chart-block">
        <div class="chart-info">
            <h3>{{ __('Tour Revenue by Year') }}</h3>
            <p>{{ __('From his early Police reunions to the Broken Music tour, Sting has consistently sold out arenas worldwide. His 2011 Symphonicities tour redefined how rock and orchestral worlds collide, breaking revenue records across Europe and North America.') }}</p>
        </div>
        <div class="chart-canvas-wrap">
            <canvas id="barChart"></canvas>
        </div>
    </div>

    <div class="chart-block reverse">
        <div class="chart-info">
            <h3>{{ __('Album Sales Share') }}</h3>
            <p>{{ __('Brand New Day remains his commercial peak, propelled by Grammy wins and global radio dominance. Ten Summoner\'s Tales is widely regarded his artistic masterpiece — critics and fans aligning on a rare crossover of depth and accessibility.') }}</p>
        </div>
        <div class="chart-canvas-wrap">
            <canvas id="pieChart"></canvas>
        </div>
    </div>

    <div class="chart-block">
        <div class="chart-info">
            <h3>{{ __('Artistry Across Disciplines') }}</h3>
            <p>{{ __('Few artists command such breadth. Sting studied literature at university, mastered the lute, acted in films, and still holds one of the most recognizable voices in recorded history. His stage presence alone has become the subject of academic study.') }}</p>
        </div>
        <div class="chart-canvas-wrap">
            <canvas id="polarChart"></canvas>
        </div>
    </div>

    <div class="chart-block reverse">
        <div class="chart-info">
            <h3>{{ __('Monthly Streams in 2024') }}</h3>
            <p>{{ __('The streaming era has brought Sting to entirely new generations. Monthly listeners surged following a viral moment in March and peaked in December with the release of his anniversary edition — a legacy that refuses to plateau.') }}</p>
        </div>
        <div class="chart-canvas-wrap">
            <canvas id="lineChart"></canvas>
        </div>
    </div>

</div>

<script>
    Chart.defaults.color = '#aaa';
    Chart.defaults.font.family = 'Arial, sans-serif';

    new Chart(document.getElementById("barChart"), {
        type: "bar",
        data: {
            labels: ["1995", "2000", "2005", "2011", "2016", "2022"],
            datasets: [{
                label: "Revenue ($M)",
                data: [40, 62, 55, 80, 48, 70],
                backgroundColor: "rgba(255, 215, 0, 0.7)",
                borderColor: "yellow",
                borderWidth: 1
            }]
        },
        options: {
            plugins: { legend: { labels: { color: "#aaa" } } },
            scales: {
                x: { ticks: { color: "#aaa" }, grid: { color: "#222" } },
                y: { ticks: { color: "#aaa" }, grid: { color: "#222" } }
            }
        }
    });

    new Chart(document.getElementById("pieChart"), {
        type: "pie",
        data: {
            labels: ["Soul Cages", "Ten Summoner's Tales", "Mercury Falling", "Brand New Day", "Sacred Love"],
            datasets: [{
                data: [18, 30, 15, 25, 12],
                backgroundColor: ["yellow", "gold", "greenyellow", "khaki", "lightyellow"],
                borderColor: "white",
                borderWidth: 2
            }]
        },
        options: {
            plugins: { legend: { labels: { color: "#aaa" } } }
        }
    });

    new Chart(document.getElementById("polarChart"), {
        type: "polarArea",
        data: {
            labels: ["Vocals", "Guitar", "Songwriting", "Lute", "Acting", "Stage Presence"],
            datasets: [{
                data: [95, 80, 92, 75, 70, 98],
                backgroundColor: [
                    "rgba(255,15,0,0.6)",
                    "rgba(255,99,132,0.6)",
                    "rgba(54,162,235,0.6)",
                    "rgba(75,192,192,0.6)",
                    "rgba(153,102,255,0.6)",
                    "rgba(255,159,64,0.6)"
                ]
            }]
        },
        options: {
            plugins: { legend: { labels: { color: "#aaa" } } },
            scales: {
                r: { ticks: { color: "#aaa", backdropColor: "transparent" }, grid: { color: "yellow" } }
            }
        }
    });

    new Chart(document.getElementById("lineChart"), {
        type: "line",
        data: {
            labels: ["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"],
            datasets: [{
                label: "Streams (M)",
                data: [22, 19, 28, 30, 27, 35, 38, 36, 33, 42, 45, 50],
                borderColor: "yellow",
                backgroundColor: "rgba(255,215,0,0.1)",
                fill: true,
                tension: 0.4,
                pointBackgroundColor: "yellow"
            }]
        },
        options: {
            plugins: { legend: { labels: { color: "white" } } },
            scales: {
                x: { ticks: { color: "grey" }, grid: { color: "#222" } },
                y: { ticks: { color: "grey" }, grid: { color: "#222" } }
            }
        }
    });
</script>
</body>
</html>