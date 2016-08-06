<?php
function arrayConcatenate($array1, $array2)
{
    $concatenate =array_merge($array1, $array2);
    return $concatenate;
}

$countries = array('America','Germany','Canada','NewYork','Nigeria');
$church = array('MFM','DeeperLife','Redeem','Celestial','CAC','Winners');
$concatenated = arrayConcatenate($countries, $church);
echo (implode(',', $concatenated)) ;
echo '<br>';
?>