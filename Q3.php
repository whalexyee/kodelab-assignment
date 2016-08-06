<?php
$date =  date('o');
for ($i = 1; $i <= 4; $i++) {
    if (($date % 400==0) || (($date%100==0) ^ ($date%4==0))) {
        $currentLeapYear = $date;
        break;
    }
    else {
        $date= $date + $i;
    }
}

for ($i = 0; $i <= 19; $i++) {
    $LeapCount = 4 * $i;
    $leapYears = $currentLeapYear + $LeapCount;
    printf('%d is a leap year <br> ', $leapYears);
}
?>