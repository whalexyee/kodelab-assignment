<?php
function listSum($array)
{
    $sum = 0;
    for($i = 0; $i < count($array); $i = $i + 1) {
    $sum = $sum + $array[$i];
    }
    return $sum;

}

$array = array(34,45,56,54,54,54,54);
echo "The sum of all the elements in the list is:  ", listSum($array) ;

echo '<br>';
//using while loop

function sumList($array)
{
    $sum = 0;
    $i = 0;
    while ($i < count($array)) {
        $sum = $sum + $array[$i];
        $i = $i+1;
    }
    return $sum;
}
echo "The sum of all the elements in the list is:  ", sumList($array);
?>