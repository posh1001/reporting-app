<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChurchSummaryAttendance extends Model
{
    use HasFactory;

   protected $fillable = [
        'church',
        'membership_strength',
        'confirmed_via_link',
        'yet_to_confirm',
        'coming_with_own_cars',
        'coming_with_bus',
        'expecting_healing',
    ];
}
