<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DateFormattedModel extends Model
{
    use \Illuminate\Database\Eloquent\Factories\HasFactory;

    protected $casts = [
        'dateAttribute' => 'date:Y-m-d',
    ];
}
