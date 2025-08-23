<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramOrganization extends Model
{
    use HasFactory;

       protected $fillable = [
    'sub_committee',
    'chairman',
    'status_plan',
    'status_budget',
    'workforce_capacity',
    'prayer_schedule',
    'meeting_schedule',
    'meeting_participants',
    'key_decision_action_points',
    'next_action',
    'remarks'
];

}
