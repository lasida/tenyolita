<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['name', 'email', 'whatsapp', 'city', 'message', 'is_sent'];
}
