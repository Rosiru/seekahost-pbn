<?php

namespace Seekahost\Pbn\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $fillable = [
        'domain', 
        'server', 
        'ip', 
        'customer'
    ];

}
