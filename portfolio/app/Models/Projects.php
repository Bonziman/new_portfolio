<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    // defining the model fields
    protected $fillable = [
        'title',
        'date',
        'client',
        'description',
        'link',
        'link_puesdo',
        'second_description',
        'slogan',
        'role',
    ];
    protected $primaryKey = 'id';

    // defining a one-to-many relationship with the Image model
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    protected $casts = [
        'date' => 'datetime',
    ];
}
