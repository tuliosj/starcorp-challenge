<?php

namespace Challenge\Formattable;

use Challenge\Dividable\Three;
use Challenge\Dividable\Five;
use Challenge\Formattable\Formattable;

class StarcorpFormatter implements Formattable {
    public function format(int $number): string {
        $three = new Three($number);
        $five = new Five($number);
        $dividesByThree = $three->divides();
        $dividesByFive = $five->divides();

        return  str_repeat((string)$number, !($dividesByThree || $dividesByFive)) .
                str_repeat('Starcorp',      $dividesByThree && !$dividesByFive  ) .
                str_repeat('IT',            !$dividesByThree && $dividesByFive  ) .
                str_repeat('Starcorpianos', $dividesByThree && $dividesByFive   );
    }
}