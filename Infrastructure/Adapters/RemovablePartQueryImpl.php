<?php

namespace Infrastructure\Adapters;

use Domain\Ports\RemovablePartQuery;
use Domain\Aggregators\RemovablePartAggregator;

class RemovablePartQueryImpl implements RemovablePartQuery
{
    public function get(): RemovablePartAggregator
    {
        return new RemovablePartAggregator();
    }
}
