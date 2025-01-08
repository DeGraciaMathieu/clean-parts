<?php

namespace Domain\Ports;

interface ImageCleaner
{
    public function clean(array $images): void;
}
