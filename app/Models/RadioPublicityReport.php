<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RadioPublicityReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'stations',
        'total_slot_required',
        'total_completed',
        'total_calls_received',
        'seats_reserved',
        'number_registered',
        'slots_yet_to_be_commissioned',
        'number_of_contact_that_have_come_to_church',
    ];
}
