<?php

namespace App\Filters\Course;

use Illuminate\Database\Eloquent\Builder;
use App\Filters\FiltersAbstract;
use App\Filters\Course \ {
    AccessFilter,
    DifficultyFilter,
    SubjectFilter,
    StartedFilter,
};

use App\Filters\Course\Ordering  \ {
    ViewsOrder,
};

class CourseFilters extends FiltersAbstract
{
    protected $filters = [
        'access' => AccessFilter::class,
        'difficulty' => DifficultyFilter::class,
        'type' => TypeFilter::class,
        'subject' => SubjectFilter::class,
        'started' => StartedFilter::class,
        'views' => ViewsOrder::class,
    ];
}
