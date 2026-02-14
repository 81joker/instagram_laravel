<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    public function commentable()
    {
        return $this->morphTo();
    }

    /**
     * Ge the parent to this commnet
     */
    // public function parent()
    // {
    //     return $this->belongsTo(Self::class, 'parent_id');
    // }

    /**
     * @return HasMany<Comment, self>
     */
    public function replies(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id');
        // return $this->hasMany(Comment::class, 'parent_id', 'id')->with('replies');
    }

    /**
     * @return BelongsTo<User, self>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
