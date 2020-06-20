<?php

namespace Challenge\Formattable;

interface Formattable {
    public function format(int $number): string;
}