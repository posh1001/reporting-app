<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MassMediaReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'church',
        'platform',
        'total_number_in_lagos_island',
        'location',
        'total_number_in_eti_osa',
        'number_commissioned_in_eti_osa',
        'total_number_in_ibeju_lekki',
        'total_number_commissioned_in_ibeju_lekki',
        'total_number_in_epe',
        'total_number_commissioned_in_epe',
    ];
}
