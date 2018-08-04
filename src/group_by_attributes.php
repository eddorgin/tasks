<?php

function groupByAttributes($items, $attributes) {
    $result = [];
    foreach ($items as $item) {
        $current =& $result;
        foreach ($attributes as $attribute) {
            $value = $item[$attribute];
            if (!isset($current[$value])) {
                $current[$value] = [];
            }
            $current =& $current[$value];
        }
        $current[] = $item;
    }
    return $result;
}
