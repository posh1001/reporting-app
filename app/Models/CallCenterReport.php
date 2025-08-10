<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CallCenterReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'church',
        'database_type',
        'number_confirmed_today',
        'number_yet_to_confirm',
        'number_expecting_healing',
        'location_coming_from',
    ];
}
