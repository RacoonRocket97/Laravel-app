<!DOCTYPE html>
<html>
<head>
    <title>Sting — Contact</title>
    <link rel="stylesheet" href="/style.css">
    <style>
        .form-section { 
            display: flex; 
            justify-content: center; 
            padding: 60px 20px; }
        .form-box { 
            background: #111; 
            padding: 40px; 
            width: 100%; max-width: 520px;
         }
        .form-box h2 { 
            color: yellow; 
            margin-bottom: 24px; }
        .form-box label { 
            display: block; 
            color: #aaa; 
            margin-bottom: 6px; }
        .form-box input, .form-box textarea { 
            width: 100%; 
            padding: 10px; 
            margin-bottom: 18px; 
            background: #1a1a1a; 
            border: 1px solid #333; 
            color: white; }
        .form-box textarea { 
            height: 120px; 
            resize: vertical; }
        .form-box button { 
            width: 100%; 
            padding: 11px; 
            background: yellow; 
            color: black; 
            font-weight: bold; 
            border: none; 
            cursor: pointer; }
        .msg { 
            padding: 12px; 
            margin-bottom: 18px; 
            font-weight: bold; 
            background: #1a3a1a; 
            color: #4cff4c; 
            border: 1px solid #4cff4c; }
    </style>
</head>
<body>
@include('partials.navbar')
<section class="form-section">
    <div class="form-box">
        <h2>Contact Us</h2>

        @if(session('success'))
            <div class="msg">{{ session('success') }}</div>
        @endif

        <form method="POST" action="/contact">
            @csrf
            <label>Name</label>
            <input type="text" name="name" value="{{ old('name') }}" required>
            @error('name')<p style="color:red;margin-bottom:8px;">{{ $message }}</p>@enderror

            <label>Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required>
            @error('email')<p style="color:red;margin-bottom:8px;">{{ $message }}</p>@enderror

            <label>Message</label>
            <textarea name="message" required>{{ old('message') }}</textarea>
            @error('message')<p style="color:red;margin-bottom:8px;">{{ $message }}</p>@enderror

            <button type="submit">Send Message</button>
        </form>
    </div>
</section>
</body>
</html>