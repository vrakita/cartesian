<?php

function cartesian($data) {

    $row    = array_shift($data);

    if( ! count($data))
        return array_map(fn($el) => [$el], $row);

    $out    = [];
    $inner  = cartesian($data);

    foreach($row as $element) {

        foreach($inner as $i) {
            
            $out[] = [$element, ...$i];

        }

    }

    return $out;

}

$data = [
    [1, 2, 3],
    ['a', 'b', 'c'],
    ['x', 'w', 'q'],
];

echo '<pre>';
print_r(cartesian($data));