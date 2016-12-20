<?php

namespace Mcms\Notifications\Models\Filters;


use IdeaSeven\Core\QueryFilters\FilterableDate;
use IdeaSeven\Core\QueryFilters\FilterableExtraFields;
use IdeaSeven\Core\QueryFilters\FilterableLimit;
use IdeaSeven\Core\QueryFilters\FilterableOrderBy;
use IdeaSeven\Core\QueryFilters\QueryFilters;

class NotificationFilters extends QueryFilters
{
    use FilterableDate, FilterableOrderBy, FilterableLimit, FilterableExtraFields;
    protected $filterable = [
        'id',
        'title',
        'body',
        'userId',
        'priority',
        'dateStart',
        'dateEnd',
    ];


    public function priority($priority = null)
    {
        if ( ! isset($priority)){
            return $this->builder;
        }

        //In case ?priority=priority,inpriority
        if (! is_array($priority)) {
            $priority = $priority = explode(',',$priority);
        }

        return $this->builder->whereIn('priority', $priority);
    }

    public function title($title = null)
    {
        if ( ! $title){
            return $this->builder;
        }

        return $this->builder->where("title", 'LIKE', "%{$title}%");
    }

    public function body($body = null)
    {
        if ( ! $body){
            return $this->builder;
        }

        return $this->builder->where("body", 'LIKE', "%{$body}%");
    }
}