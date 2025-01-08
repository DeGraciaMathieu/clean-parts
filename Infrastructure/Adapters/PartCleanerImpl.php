<?php

namespace Infrastructure\Adapters;

use Domain\Ports\PartCleaner;
use Infrastructure\Pipes\RemoveImages;
use Infrastructure\Pipes\RemoveActivities;
use Infrastructure\Pipes\RemoveTranslations;
use Domain\Aggregators\RemovablePartAggregator;
use Illuminate\Pipeline\Pipeline;

class PartCleanerImpl implements PartCleaner
{
    public function clean(RemovablePartAggregator $removablePartAggregator): void
    {
        app(Pipeline::class)
            ->send($removablePartAggregator)
            ->through([
                RemoveImages::class,
                RemoveTranslations::class,
                RemoveActivities::class,
            ]);
    }
}
