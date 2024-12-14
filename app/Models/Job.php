<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    public $timestamps = false;
    protected $table = 'job';
    protected $fillable = [
        'logo',
        'company',
        'location',
        'title',
        'city',
        'country',
        'about_job',
        'requirement',
        'salary',
        'contact_name',
        'contact_email',
        'contact_phone',
        'detail_job',
        'detail_company',
    ];
}
