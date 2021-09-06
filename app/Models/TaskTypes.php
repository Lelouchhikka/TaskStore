<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskTypes extends Model
{
    use HasFactory;
    protected $fillable=[
        'site_id',
        'task_id',
        'task_type',
    ];
}
