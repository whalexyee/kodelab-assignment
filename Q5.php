                

<?php

function oddPosition($array)
{
    foreach ($array as $Elements => $value)
    {
        if ($Elements % 2 == 0) {
             $oddValue = $value;
             echo $oddValue .',';
             }
         }
    }

$arrayList = array('How', 'Going', 'Was', 'LOVELY', 'Your', 'Boss', 'Night' );
oddPosition($arrayList);
echo '<br>';

?>