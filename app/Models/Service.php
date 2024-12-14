<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public $timestamps = false;  // Disable timestamp columns

    protected $table = 'service';

    protected $fillable = [
        'logo',          // Add the 'logo' field here
        'service_name',
        'location',
        'price',
        'country',
        'detail',
    ];
}
