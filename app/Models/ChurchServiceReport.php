<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChurchServiceReport extends Model
{
      protected $fillable = [
        'church',
        'product',
        'total_produced',
        'total_deployed',
        'total_languages_for_language_church',
    ];
}
