<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChurchRegistrationReport extends Model
{
    protected $fillable = [
        'church_group',
        'attendance_target',
        'confirmed_via_link',
        'yet_to_confirm',
        'confirmed_via_call_center',
        'invitees',
        'expected_attendance'
    ];
}
