<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class subTask extends Model
{
    use HasFactory;
    protected $fillable = [
        'sub_title',
        'phone',
        'priority',
        'note',
        'date',

    ];

}
