<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Discuss extends Model
{
    use HasFactory, Sluggable;

    protected $guarded = ['id'];
    protected $with = ['user', 'comments'];

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function($query, $search)
        {
            return $query->where('title', 'like', '%'.$search.'%')
                         ->orWhere('body', 'like', '%'.$search.'%')
                         ->orderBy('likes', 'desc');
        });
        
        $query->when($filters['user'] ?? false, function($query, $user)
        {
            return $query->join('users', 'user_id', '=', 'users.id')
                         ->where('username', 'like', $user);
        });

        $query->when($filters['answer'] ?? false, function($query, $user)
        {
            return $query->join('users', 'user_id', '=', 'users.id')
                         ->join('comments', 'discusses.id', '=', 'comments.discuss_id')
                         ->where('username', 'like', $user);
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reports()
    {
        return $this->hasMany(Report::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
