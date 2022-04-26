<?php

$data = [
    [1, 2, 3],
    ['a', 'b', 'c'],
    ['x', 'w', 'q'],
];

function cartesian($data) {

    $row = array_shift($data);

    if( ! $row) {
        return [];
    }
    
    $set = [];

    foreach($row as $element) {
        
        $search = cartesian($data);

        if( ! $search) {
            $set[] = [$element];
            continue;
        }

        foreach($search as $s) {
            $set[] = [$element, ...$s];
        }
        
    }

    return $set;

}

echo '<pre>';
print_r(cartesian($data));