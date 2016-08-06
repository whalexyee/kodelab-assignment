<?php

    echo " HELLO WORLD ";



    echo "<h1> MULTIPLICATION TABLE  (1-20 Times) </h1>";

	echo "<table border=1 width=100%>";

	echo "<tr>";

	echo "<td> X </td>";

	for ($i = 1; $i <= 20; $i++) {

	     echo "<td>" . $i . "</td>";
    }

	echo "</tr>";



    for ($i = 1; $i <= 12; $i++ ) {

        echo "<tr>";

	    echo "<td>".$i."</td>";

	    for ( $j = 1; $j <= 20; $j++ ) {

	            echo "<td>".$i * $j."</td>";
         }

	    echo "</tr>";

	}

	echo "</table>";

	?>