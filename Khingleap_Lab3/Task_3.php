<?php
function sum(...$number)
{
    $result = 0;
    foreach($number as $eachNum)
    {
        $result += $eachNum;
    }
    return $result;
}
echo sum(2,3);
echo sum(2,3,4);
echo sum(2,3,4,5);