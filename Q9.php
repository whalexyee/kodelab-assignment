<?php
function pigLatin($string)
{
    $array = explode(' ', $string);
    foreach ($array as $value) {
        $firstLetter = substr($value, 0, 1);
        $remLetters = substr($value,1);
        $newString =  $remLetters . $firstLetter .'ay';
        echo $newString . ' ';

    }

}
$myString = 'feeling s ad, no class today';
pigLatin($myString);
echo '<br>';
?>