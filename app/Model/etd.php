<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class etd extends Model
{
    protected $fillable = [
        'fedex',
        'air',
        'ship'
    ];
}
