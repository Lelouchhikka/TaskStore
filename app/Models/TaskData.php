<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TaskData extends Model
{
    use HasFactory;
    protected $fillable=[
        'task_description',
        'task_title',
        'site_id',
        'site_task_id',
        'site_task_type',
        'site_user_id',
        'task_locale',
        'cost_execution',
        'time_perform',
        'time_checking',
        'check_type',
        'user_utc',
        'status',
        'max_executions'
        ];
    public function taskTypes(){
        return$this->belongsTo(TaskTypes::class);
    }

    public function scopeFilter(Builder $builder, QueryFilter $filter){
        return $filter->apply($builder);
    }
}
