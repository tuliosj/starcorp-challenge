<?php

namespace Challenge\Dividable;

interface Dividable {
    public function __construct(int $number);
    public function divides(): bool;
}