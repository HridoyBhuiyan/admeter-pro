<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    protected $table = 'clients';
    protected $fillable = [
        'name',
        'brand_name',
        'brand_slug',
        'email',
        'phone',
        'trial',
        'site_url',
        'status'
    ];
}
