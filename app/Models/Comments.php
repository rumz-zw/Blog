<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $fillable = [
        'content',
        'created_by',
        'status',
        'image',
    ];
}
