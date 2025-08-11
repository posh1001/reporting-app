<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class SmsReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'church_group',
        'church',
        'Type_of_Sms',
        'Number_As_At_Today',
    ];
}

