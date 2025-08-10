<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TelevisionReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'group',
        'tv_station',
        'total_slot_required',
        'total_podcast_required',
        'total_slots_done',
        'total_slots_yet_to_be_commissioned',
        'resources_required',
    ];
}
