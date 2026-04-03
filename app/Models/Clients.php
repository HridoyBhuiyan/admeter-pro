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
        'whatsapp',
        'ip_address',
        'last_activity',
        'trial',
        'country',
        'city',
        'site_url',
        'status'
    ];
}
