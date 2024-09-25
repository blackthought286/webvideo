<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UserPlaylist extends Model
{
    use HasFactory;

    protected $hidden = [
        'user_id',
        'created_at',
        'updated_at'];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function ownedBy(User $user) : bool
    {
        return $this->user_id === $user->id;
    }

    public function videos(): HasMany
    {
        return $this->hasMany(Video::class);
    }

    public function friends(): BelongsToMany
    {
        return $this->belongsToMany(Friend::class);
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }


}
