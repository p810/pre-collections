<?php

namespace Pre\Collections;

use Pre\Plugin\Testing\Runner;

class SpecTest extends Runner
{
    protected function path(): string
    {
        return __DIR__ . "/specs";
    }
}
