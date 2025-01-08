<?php

namespace Application;

use Domain\Ports\RemovablePartQuery;

class CleanPartAction2
{
    public function __construct(
        private RemovablePartQuery $query,
    ) {}

    public function removeImages(): void
    {
        /** @var RemovablePartAggregator2 $removablePartAggregator */
        $removablePartAggregator = $this->query->get();

        $removablePartAggregator->removeImages();

        $removablePartAggregator->removeTranslations();

        $removablePartAggregator->removeActivities();
    }
}
