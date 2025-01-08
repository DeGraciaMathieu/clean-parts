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
        $activities = [];

        foreach ($this->entities as $entity) {
            $activities[] = $entity->getActivities();
        }

        return $activities;
    }

    public function getImagesToRemove(): array
    {
        $images = [];

        foreach ($this->entities as $entity) {
            $images[] = $entity->getImages();
        }

        return $images;
    }

    public function getTranslationsToRemove(): array
    {
        $translations = [];

        foreach ($this->entities as $entity) {
            $translations[] = $entity->getTranslations();
        }

        return $translations;
    }
}
