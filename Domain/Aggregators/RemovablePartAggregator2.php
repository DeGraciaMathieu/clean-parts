<?php

namespace Domain\Aggregators;

use Domain\Ports\ImageCleaner;
use Domain\Ports\ActivityCleaner;
use Domain\Ports\TranslationCleaner;
use Domain\Entities\RemovablePartEntity;

class RemovablePartAggregator2 
{
    private array $entities = [];

    public function __construct(
        private ImageCleaner $imageCleaner,
        private TranslationCleaner $translationCleaner,
        private ActivityCleaner $activityCleaner,
    ) {}

    public function add(RemovablePartEntity $entity): void
    {
        $this->entities[] = $entity;
    }

    public function removeImages(): void
    {
        $images = [];

        foreach ($this->entities as $entity) {
            $images[] = $entity->getImages();
        }

        $this->imageCleaner->clean($images);
    }

    public function removeTranslations(): void
    {
        $translations = [];

        foreach ($this->entities as $entity) {
            $translations[] = $entity->getTranslations();
        }

        $this->translationCleaner->clean($translations);
    }

    public function removeActivities(): void
    {
        $activities = [];

        foreach ($this->entities as $entity) {
            $activities[] = $entity->getActivities();
        }

        $this->activityCleaner->clean($activities);
    }
}
