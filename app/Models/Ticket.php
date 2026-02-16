<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';
    protected $fillable = [
        'no_ticket',
        'no_meja',
        'status',
        'date_time',
    ];
}
