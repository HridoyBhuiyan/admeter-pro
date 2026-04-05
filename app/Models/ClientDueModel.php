<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ClientDueModel extends Model
{
    protected $table = 'client_due';
    protected $fillable = ['client_id','total_spend','unit_charge','total_paid','total_due'];
}
