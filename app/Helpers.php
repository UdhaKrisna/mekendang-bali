<?php

use PhpParser\Node\Expr\Cast\String_;

if (!function_exists('joinArrayToString')) {
    function joinArrayToString(array $array, string $key): string
    {
        $result = '';

        foreach ($array as $index => $item) {
            $result .= ($index > 0) ? ', ' . $item[$key] : $item[$key];
        }

        return $result;
    }
}