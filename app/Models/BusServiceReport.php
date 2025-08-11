<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusServiceReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'church',
        'cell_responsible',
        'leader_responsible',
        'number_to_deliver',
        'catchment_name',
    ];
}
