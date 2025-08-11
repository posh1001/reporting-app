<?php

// app/Models/EvangelismSquadReport.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EvangelismSquadReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'location',
        'number_led_to_christ',
        'number_confirmed_for_attendance',
        'data_collated',
        'testimonies',
    ];
}

