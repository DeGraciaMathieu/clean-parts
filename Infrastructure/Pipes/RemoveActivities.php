<?php

namespace Infrastructure\Pipes;

use Closure;
use Domain\Aggregators\RemovablePartAggregator;

class RemoveActivities
{
    public function handle(RemovablePartAggregator $removablePartAggregator, Closure $next)
    {
        $activities = $removablePartAggregator->getActivitiesToRemove();

        // TODO: Remove activities
        
        return $next($removablePartAggregator);
    }
}
