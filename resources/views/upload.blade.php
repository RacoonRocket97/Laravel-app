<!DOCTYPE html>
<html>
<head>
    <title>Sting — Upload</title>
    <link rel="stylesheet" href="/style.css">
    <style>
        .upload-wrap {
             max-width: 700px;
             margin: 60px auto;
             padding: 0 20px;
        }
        .upload-box {
             background: #111;
              padding: 40px;
             }
        .upload-box h2 {
             color: yellow;
              margin-bottom: 24px; 
            }
        .upload-box input[type="file"] {
            display: block;
            margin-bottom: 18px;
            color: #aaa; 
        }
        .upload-box button {
            background: yellow;
            color: black;
            font-weight: bold;
            border: none;
            padding: 10px 24px;
            cursor: pointer;
        }
        .file-list {
            margin-top: 32px; 
        }
        .file-list h3 {
            color: yellow;
            margin-bottom: 12px;
        }
        .file-item {
            background: #1a1a1a; 
            border: 1px solid #333;
            padding: 10px 16px;
            margin-bottom: 8px; 
            color: #aaa;
            display: flex; 
            justify-content: space-between;
        }
        .file-item a {
            color: yellow; 
            text-decoration: none; }
        .msg {
            padding: 12px; 
            margin-bottom: 18px;
            font-weight: bold;
            background: #1a3a1a; 
            color: #4cff4c;
            border: 1px solid #4cff4c;
        }
    </style>
</head>
<body>
@include('partials.navbar')
<div class="upload-wrap">
    <div class="upload-box">
        <h2>{{ __('Upload Files') }}</h2>

        @if(session('success'))
            <div class="msg">{{ session('success') }}</div>
        @endif

        <form method="POST" action="/upload" enctype="multipart/form-data">
            @csrf
            <input type="file" name="file" required>
            @error('file')<p style="color:red;margin-bottom:10px;">{{ $message }}</p>@enderror
            <button type="submit">{{ __('Upload') }}</button>
        </form>

        @if($uploads->count())
        <div class="file-list">
            <h3>{{ __('Your Uploads') }}</h3>
            @foreach($uploads as $upload)
            <div class="file-item">
                <span>{{ $upload->original_name }}</span>
                <a href="{{ Storage::url($upload->path) }}" target="_blank">{{ __('View') }}</a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
</body>
</html>