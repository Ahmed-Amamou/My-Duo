<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'genre',
        'platform',
        'description',
    ];
    protected $dates = [
        'created_at',
        'updated_at',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }

    public function isFollowedBy(User $user)
    {
        return $this->userGamePivots()->where('user_id', $user->id)->exists();
    }
}


