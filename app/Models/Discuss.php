<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discuss extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['user'];

    public function scopeSearch($query, $search)
    {
        $query->when($search ?? false, function($query, $search)
        {
            return $query->where('title', 'like', '%'.$search.'%')
                         ->orWhere('body', 'like', '%'.$search.'%');
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
}
