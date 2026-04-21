<!DOCTYPE html>
<html>
<head>
    <title>Sting — Access Denied</title>
    <link rel="stylesheet" href="/style.css">
    <style>
        .denied-wrap { display: flex; flex-direction: column; align-items: center; justify-content: center; min-height: 60vh; text-align: center; }
        .denied-wrap h1 { color: red; font-size: 3rem; margin-bottom: 16px; }
        .denied-wrap p { color: #aaa; margin-bottom: 24px; }
        .denied-wrap a { color: yellow; text-decoration: none; border: 1px solid yellow; padding: 10px 24px; }
    </style>
</head>
<body>
@include('partials.navbar')
<div class="denied-wrap">
    <h1>403</h1>
    <p>You don't have permission to access this page.</p>
    <a href="/dashboard">Back to Dashboard</a>
</div>
</body>
</html>