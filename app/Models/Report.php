<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    public $timestamps = false;

    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function contents()
    {
        return $this->belongsTo(Content::class);
    }
    public function discusses()
    {
        return $this->belongsTo(Discuss::class);
    }
    public function comments()
    {
        return $this->belongsTo(Comment::class);
    }
}
