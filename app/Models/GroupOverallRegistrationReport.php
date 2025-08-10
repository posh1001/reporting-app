<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupOverallRegistrationReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'group',
        'attendance_target',
        'confirmed_via_link',
        'yet_to_confirm',
        'yet_to_be_invited',
        'expecting_healing',
        'expected_attendance',
    ];
}
