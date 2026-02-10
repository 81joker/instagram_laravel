<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'hide_like_view' => 'boolean',
        'allow_commenting' => 'boolean',
    ];

    // Media can be image or a video
    // function media(): MorphMany
    // {
    //     return $this->morphMany(Media::class, 'mediable');
    // }

    // public function user(): BelongsTo
    // {
    //     return $this->belongsTo(User::class);
    // }
    // function comments(): MorphMany
    // {

    //     return  $this->morphMany(Comment::class, 'commentable')->with('replies');
    // }
}
