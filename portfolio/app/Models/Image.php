<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'project_id', // Foreign key to link with the PortfolioProject model
        'image_path', // Store the path or filename of the image
        // Add any other image-related fields here
    ];

    // Define an inverse relationship with the PortfolioProject model
    public function project()
    {
        return $this->belongsTo(projects::class, 'project_id');
    }
}
