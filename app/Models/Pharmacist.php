<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['name', 'email', 'phone','license_number', 'pharmacy_name'];
}
