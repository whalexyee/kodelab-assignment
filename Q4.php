                    //QUESTION 4

<?php

function largestElement($array)
{
    $max = max($array);
    printf('The Largest Element in the list is: %d', $max);

}
    $listItems = array(100, 56, 65, 97,48,20,35,78,150);
    largestElement($listItems);
    echo '<br>';

?>