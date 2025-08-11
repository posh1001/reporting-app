<?php

// app/Models/OutdoorPublicityReport.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OutdoorPublicityReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'church_group',
        'church',
        'lga',
        'number_of_ward',
        'number_of_street',
        'number_of_busstop_placed',
        'number_of_homes_placed',
        'number_of_business_placed',
    ];
}
