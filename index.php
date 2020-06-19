<?php

for ($i=1; $i<=100; $i++) {
    echo str_repeat((string)$i, ($i%3!=0&&$i%5!=0));
    echo str_repeat('Starcorp', ($i%3==0&&$i%5!=0));
    echo str_repeat('TI', ($i%5==0&&$i%3!=0));
    echo str_repeat('Starcorpianos', ($i%15==0));
    echo '<br>';
}