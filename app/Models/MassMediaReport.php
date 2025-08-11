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
        'location',
        'number_commissioned_in_eti_osa',
        'total_number_commissioned_in_ibeju_lekki',
        'total_number_commissioned_in_epe',
        'number_of_contact_that_have_come_to_church',
    ];
}
