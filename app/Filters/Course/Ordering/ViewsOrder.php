<?php

namespace App\Filters\Course\Ordering;

use App\Filters\FilterAbstract;
use Illuminate\Database\Eloquent\Builder;

class ViewsOrder extends FilterAbstract
{

  public function filter(Builder $builder, $value)
  {
    if (is_null($value)) {
      return $builder;
    }

    return $builder->orderBy('views', $this->resolveOrderDirection($value));
  }
}
