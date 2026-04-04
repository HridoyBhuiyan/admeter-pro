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
        'region',
        'city',
        'site_url',
        'user_agent',
        'status'
    ];

    protected $casts = [
        'last_activity' => 'datetime',
        'trial' => 'boolean',
    ];
}
