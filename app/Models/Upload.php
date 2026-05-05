<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Upload extends Model {
    protected $fillable = [
        'user_id',
        'filename',
        'original_name',
        'path',
        'description' // NEW
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}