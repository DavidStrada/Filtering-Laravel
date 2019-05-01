<?php

namespace App\Filters\Course;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class AccessFilter extends FilterAbstract
{
    public function mappings()
    {
        return [
            'free' => true,
            'premium' => false
        ];
    }

    public function filter(Builder $builder, $value)
    {
        $value = $this->resolveFilterValue($value);

        if (is_null($value)) {
            return $builder;
        }

        return $builder->where('free', $value);
    }
}
