<?php

namespace App\Http\Controllers;

use App\Models\Upload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller {

    public function index() {
        $uploads = Auth::user()->uploads()->latest()->get();
        return view('upload', compact('uploads'));
    }

    public function store(Request $request) {
        $request->validate([
            'file' => 'required|file|max:10240',
        ]);

        $file          = $request->file('file');
        $originalName  = $file->getClientOriginalName();
        $filename      = time() . '_' . $originalName;
        $path          = $file->storeAs('uploads', $filename, 'public');

        Upload::create([
            'user_id'       => Auth::id(),
            'filename'      => $filename,
            'original_name' => $originalName,
            'path'          => $path,
        ]);

        return back()->with('success', 'File uploaded successfully.');
    }
}