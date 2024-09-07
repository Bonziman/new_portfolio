<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use App\Models\PostImage;

class Post extends Model
{
    protected $fillable = [
        'title',
        'author',
        'read_time',
        'sub_title',
        'text1',
        'date',
    ];

    // Automatically set the 'date' field with the current date on creation
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->date = Carbon::now()->format('F j Y');
        });
    }

    public function images()
    {
        return $this->hasMany('App\Models\PostImage');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }
}
