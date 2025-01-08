<?php

namespace Domain\Ports;

interface TranslationCleaner
{
    public function clean(array $translations): void;
}
