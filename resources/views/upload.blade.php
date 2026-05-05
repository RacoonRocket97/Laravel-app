<!DOCTYPE html>
<html>
<head>
    <title>Sting — Upload</title>
    <link rel="stylesheet" href="/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .upload-box input,
        .upload-box textarea {
            width: 100%;
            margin-bottom: 15px;
            padding: 10px;
            background: #1a1a1a;
            color: #fff;
            border: 1px solid #333;
        }

        .upload-box button {
            background: yellow;
            color: black;
            font-weight: bold;
            border: none;
            padding: 10px 24px;
            cursor: pointer;
        }

        .msg {
            padding: 12px;
            margin-bottom: 18px;
            font-weight: bold;
            background: #1a3a1a;
            color: #4cff4c;
            border: 1px solid #4cff4c;
        }

        .file-list {
            margin-top: 40px;
        }

        .file-list h3 {
            color: yellow;
            margin-bottom: 16px;
        }

        .post {
            background: #1a1a1a;
            border: 1px solid #333;
            margin-bottom: 20px;
            padding: 15px;
        }

        .post img {
            width: 100%;
            max-height: 350px;
            object-fit: cover;
            margin-bottom: 10px;
        }

        .post p {
            color: #ddd;
            margin-bottom: 8px;
        }

        .post small {
            color: #777;
        }
    </style>
</head>
<body>

@include('partials.navbar')

<div class="upload-wrap">
    <div class="upload-box">

        <h2>{{ __('Create Post') }}</h2>

        @if(session('success'))
            <div class="msg">{{ session('success') }}</div>
        @endif

        <!-- FORM -->
        <form method="POST" action="/upload" enctype="multipart/form-data">
            @csrf

            <input type="file" name="file" required>
            @error('file')
                <p style="color:red;">{{ $message }}</p>
            @enderror

            <!-- DESCRIPTION -->
            <textarea name="description" placeholder="Write a caption..."></textarea>
            @error('description')
                <p style="color:red;">{{ $message }}</p>
            @enderror

            <button type="submit">{{ __('Post') }}</button>
        </form>

        <!-- POSTS -->
        @if($uploads->count())
        <div class="file-list">
            <h3>{{ __('Your Posts') }}</h3>

            @foreach($uploads as $upload)
            <div class="post">

                <!-- IMAGE -->
                <img src="{{ Storage::url($upload->path) }}" alt="post image">

                <!-- DESCRIPTION -->
                @if($upload->description)
                    <p>{{ $upload->description }}</p>
                @endif

                <!-- META -->
                <small>{{ $upload->original_name }}</small>

            </div>
            @endforeach

        </div>
        @endif

    </div>
</div>

</body>
</html>