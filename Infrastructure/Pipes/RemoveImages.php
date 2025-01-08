<?php

namespace Infrastructure\Pipes;

use Closure;
use Domain\Aggregators\RemovablePartAggregator;

class RemoveImages
{
    public function handle(RemovablePartAggregator $removablePartAggregator, Closure $next)
    {
        $images = $removablePartAggregator->getImagesToRemove();

        // TODO: Remove images

        return $next($removablePartAggregator);
    }
}
