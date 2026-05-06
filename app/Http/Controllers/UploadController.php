<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller {

    public function index() {
        // CHANGED: Fetch all uploads instead of just the logged-in user's uploads.
        // Eager loading 'with("user")' ensures we can easily display the uploader's name.
        $uploads = Upload::with('user')->latest()->get();
        
        return view('upload', compact('uploads'));
    }

    public function store(Request $request) {
        $request->validate([
            'file' => 'required|image|mimes:jpeg,png,jpg,webp|max:10240', // changed to image
            'description' => 'nullable|string|max:500', // NEW
        ]);

        $file = $request->file('file');
        $originalName = $file->getClientOriginalName();
        $filename = time() . '_' . $originalName;
        $path = $file->storeAs('uploads', $filename, 'public');

        Upload::create([
            'user_id'       => Auth::id(),
            'filename'      => $filename,
            'original_name' => $originalName,
            'path'          => $path,
            'description'   => $request->description, // NEW
        ]);

        return back()->with('success', 'Post uploaded successfully.');
    }
}