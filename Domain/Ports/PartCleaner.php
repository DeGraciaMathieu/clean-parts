<?php

namespace Domain\Ports;

use Domain\Aggregators\RemovablePartAggregator;

interface PartCleaner
{
    public function clean(RemovablePartAggregator $removablePartAggregator): void;
}
