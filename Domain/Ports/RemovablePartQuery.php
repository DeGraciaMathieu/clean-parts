<?php

namespace Domain\Ports;

use Domain\Aggregators\RemovablePartAggregator;

interface RemovablePartQuery
{
    public function get(): RemovablePartAggregator;
}
