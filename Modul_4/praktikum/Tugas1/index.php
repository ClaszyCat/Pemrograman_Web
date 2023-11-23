<?php

function generator($number) {
    for ($index = 1; $index <= $number; $index++) {
        if ($index % 3 == 0 && $index % 5 == 0) {
            echo "HelloWorld";
        } else if ($index % 3 == 0) {
            echo "Hello";
        } else if ($index % 5 == 0) {
            echo "World";
        } else {
            echo $index;
        }
        echo "\n";
    }
}

generator(15);