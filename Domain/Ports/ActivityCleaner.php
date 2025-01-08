<?php

namespace Domain\Ports;

interface ActivityCleaner
{
    public function clean(array $activities): void;
}
