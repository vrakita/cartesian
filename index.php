<?php

function cartesian($data) {

    if( ! $row = array_shift($data)) {
        return [];
    }

    foreach($row as $element) {

        if( ! $data) {
            $set[] = [$element];
            continue;
        }

        foreach(cartesian($data) as $s) {
            $set[] = [$element, ...$s];
        }

        
    }

    return $set;

}

$data = [
    [1, 2, 3],
    ['a', 'b', 'c'],
    ['x', 'w', 'q'],
];

echo '<pre>';
print_r(cartesian($data));