<?php

namespace Infrastructure\Pipes;

use Closure;
use Domain\Aggregators\RemovablePartAggregator;

class RemoveTranslations
{
    public function handle(RemovablePartAggregator $removablePartAggregator, Closure $next)
    {
        $translations = $removablePartAggregator->getTranslationsToRemove();

        // TODO: Remove translations

        return $next($removablePartAggregator);
    }
}
