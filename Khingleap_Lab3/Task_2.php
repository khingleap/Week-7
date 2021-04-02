<?php

$arr = [2,3,4,6,7,9,11,20];
$result = (array_filter($arr,fn($element) => $element % 2 === 0));
print_r($result);
