<?php

        for($i=3;$i>=1;$i--)
        {
                for($j=1;$j<=$i;$j++)
                {
                        echo "*";
                }
                echo "<br>";
        }
        $a=1;
        while($a<=5)
        {
                $b=1;
                while($b<=$a)
                {
                        echo "*";
                        $b++;   
                }
                echo "<br>";
                $a++;
        }
?>

