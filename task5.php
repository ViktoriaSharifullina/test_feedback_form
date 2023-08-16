<?php

function maxConsecutiveOnes($nums) {
    $maxCount = 0;
    $currentCount = 0;

    foreach ($nums as $num) {
        if ($num == 1) {
            $currentCount++;
            $maxCount = max($maxCount, $currentCount);
        } else {
            $currentCount = 0;
        }
    }

    return $maxCount;
}

$nums = array(1, 1, 0, 1, 1, 1);
$result = maxConsecutiveOnes($nums);

echo "Максимальное количество последовательных '1': $result";
