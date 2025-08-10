<?php

// app/Models/SocialMediaReport.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialMediaReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'group',
        'social_media',
        'total_estimated_reach',
        'engagement',
        'conversion',
    ];
}

