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
        'task_id',


    ];

    public function getSubTasksByTask($task_id)
    {
        return $this->where('task_id,$task_id')->get();
    }

}
