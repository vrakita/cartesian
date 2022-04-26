<?php

$data = [
    [1, 2, 3],
    ['a', 'b', 'c'],
    ['x', 'w', 'q'],
];

function cartesian($data) {

    if( ! $row = array_shift($data)) {
        return [];
    }

    foreach($row as $element) {
        
        $search = cartesian($data);

        if(empty($search)) {
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