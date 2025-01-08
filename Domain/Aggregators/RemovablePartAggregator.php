<?php

namespace Domain\Aggregators;

use Domain\Entities\RemovablePartEntity;

class RemovablePartAggregator
{
    private array $entities = [];

    public function add(RemovablePartEntity $entity): void
    {
        $this->entities[] = $entity;
    }

    public function getActivitiesToRemove(): array
    {
        return [];
    }

    public function getImagesToRemove(): array
    {
        return [];
    }

    public function getTranslationsToRemove(): array
    {
        return [];
    }
}
