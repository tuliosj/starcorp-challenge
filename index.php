<?php

require 'vendor/autoload.php';

use Challenge\Formattable\StarcorpFormatter;

$formatter = new StarcorpFormatter;

echo '<ol>';
for ($i=1; $i<=100; $i++) {
    echo '<li>' . $formatter->format($i) . '</li>';
}
echo '</ol>';

?>

<style>
    ol {
        display: flex;
        flex-flow: column wrap;
        max-height: calc(100vh - 36px);
    }
    li::marker {
        font-weight: 600;
    }
</style>