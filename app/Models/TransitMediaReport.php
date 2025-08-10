<?php

// app/Models/TransitMediaReport.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransitMediaReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'group',
        'church',
        'total_number_in_lagos_island',
        'location',
        'total_number_in_eti_osa',
        'number_conmissioned_in_eti_osa',
        'total_number_in_ibeju_lekki',
        'total_number_commissioned_in_ibeju_lekki',
        'total_number_in_epe',
        'total_number_commissioned_in_epe',
    ];
}

