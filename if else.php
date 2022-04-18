<?php

$n = 7; // specify how many rows you want to
$stars = 3;

for ($i = $n; $i > 0; $i--) {
    for ($j = 0; $j < $i + $stars; $j++) {
        if ($j < $i - 1) {
            echo " ";
        } else {
            echo "*";
        }
    }

    $stars += 2;
    echo "<br>";
}

?>


// pattern 2

<?php

$n = 7; // specify how many rows you want to
$number = 3;

for ($i = $n; $i > 0; $i--) {
    for ($j = 0; $j < $i + $number; $j++) {
        if ($j < $i - 1) {
            echo "$num";
        } else {
            echo "";
        }
    }

    $num = $num + 1;
    echo "<br>";
}

?>


//pattern 3


<?php

$n = 7; // specify how many rows you want to
$alphapet = 3;

for ($i = $n; $i > 0; $i--) {
    for ($j = 0; $j < $i + $alphapet; $j++) {
        if ($j < $i - 1) {
            echo "$num";
        } else {
            echo "";
        }
    }

    $num = $num + 1;
    echo "<br>";
}
// Driver code
	$n = 5;
	alphapat($n);
	
?>


