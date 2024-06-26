<?php
    function factorial($number) {
        if ($number == 0) {
            return 1;
        } else {
            return ($number * factorial($number - 1));
        }
    }

    $number = 8;
    $factorial = factorial($number);

    echo "The factorial of ". $number. " is ". $factorial;
?>