<?php

namespace Application;

use Domain\Ports\PartCleaner;
use Domain\Ports\RemovablePartQuery;

class CleanPartAction
{
    public function __construct(
        private RemovablePartQuery $query,
        private PartCleaner $partCleaner,
    ) {}

    public function removeImages(): void
    {
        $removablePartAggregator = $this->query->get();

        $this->partCleaner->clean($removablePartAggregator);
    }
}
