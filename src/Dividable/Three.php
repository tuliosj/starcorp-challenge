<?php

namespace Challenge\Dividable;

use Challenge\Dividable\Dividable;

class Three implements Dividable {
    private int $number;

    public function __construct(int $number) {
        $this->number = $number;
    }

    public function divides(): bool {
        return ($this->number % 3 == 0);
    }
}