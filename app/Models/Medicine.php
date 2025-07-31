<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'quantity',
        'manufacturer',
        'expiry_date'
    ];
}
