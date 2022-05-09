<?php

function cartesian($data) {

    $row = array_shift($data) ?? [];
    $set = [];

    if( ! $data) {
        return array_map(fn($e) => [$e], $row);
    }

    foreach($row as $element) {

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