<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DignitariesReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'church',
        'dignitaries_invited_today',
        'number_confirmed_to_attend',
        'gift_distributed_today',
    ];
}
