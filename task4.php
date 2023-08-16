<?php

$associativeArray = array(
    "a" => 1,
    "b" => 2,
    "c" => 3,
    "d" => 4
);

$keys = array_keys($associativeArray);

for ($i = count($keys) - 1; $i >= 0; $i--) {
    $key = $keys[$i];
    $value = $associativeArray[$key];
    echo "$key => $value\n";
}
