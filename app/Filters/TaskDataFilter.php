<?php


namespace App\Filters;


class TaskDataFilter extends QueryFilter
{
    public function category_id($id = null){
        return $this->builder->when($id, function($query) use($id){
            $query->where('site_task_type', $id);
        });
    }

    public function search_field($search_string = ''){
        return $this->builder
            ->where('task_title', 'LIKE', '%'.$search_string.'%')
            ->orWhere('task_description', 'LIKE', '%'.$search_string.'%');
    }
}
