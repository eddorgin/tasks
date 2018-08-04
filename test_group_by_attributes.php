<?php

include_once "src/group_by_attributes.php";

$items = [
    ['a' => '1', 'b' => '2', 'c' => '3', 'd' => 'one'],
    ['a' => '1', 'b' => '2m', 'c' => '3', 'd' => 'two'],
    ['a' => '1', 'b' => '2m', 'c' => '3m', 'd' => 'three'],
    ['a' => '1', 'b' => '2m', 'c' => '3m', 'd' => 'four'],
    ['a' => '1m', 'b' => '2', 'c' => '3', 'd' => 'five'],
];

$attributes = ['a', 'b', 'c'];

print_r(groupByAttributes($items, $attributes));
