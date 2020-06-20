<?php

require 'vendor/autoload.php';

use Challenge\Formattable\StarcorpFormatter;

$formatter = new StarcorpFormatter;

for ($i=1; $i<=100; $i++) {
    echo $formatter->format($i);
    if ($i<100) echo ', ';
}