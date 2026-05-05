<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fan Zone</title>

    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #000;
        }

        .wrap {
            min-height: 100vh; /* full screen height */
            display: flex;
            justify-content: center; /* horizontal center */
            align-items: center;     /* vertical center */
            padding: 20px;
        }

        .box {
            background: #111;
            padding: 40px;
            max-width: 600px;
            width: 100%;
            text-align: center; /* center text */
            border-radius: 10px;
        }

        h2 {
            color: yellow;
            margin-bottom: 20px;
        }

        p {
            color: #aaa;
            line-height: 1.7;
            margin-bottom: 0;
        }

        a {
            color: yellow;
            text-decoration: none;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

@include('partials.navbar')

<div class="wrap">
    <div class="box">
        <h2>{{ __('Fan Zone') }}</h2>

        <p>
            Share your love for Sting. Upload your fan art and photos,
            or <a href="/contact">{{ __('send us a message') }}</a>.
        </p>
    </div>
</div>

</body>
</html>