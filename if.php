<?php
echo '<pre>';

  $n =1;
  function print_tree($n, $str, $max) {
    for ($i = 0; ($i < (($max - $n) / 2)); $i++) {
      echo "&nbsp;";
    }
    for ($i = 0; ($i < $n); $i++) {
      echo $str;
    }
    echo "<br/>";
  }

  for ($flag = 0; ($flag < 2); $flag++) {
    for ($a = 1, $b = 1, $c = 1, $d = 4; (($d - 3) <= $n); $a += 2, $b++) {
      if ($flag == 1) {
        print_tree($a, "*", $max);
      }
      if ($b == $d) {
        if ($flag == 0) {
          $max = $a;
        }
        if (($d - 3) != $n) {
          $a -= ((2 * $c) + 2);
        }
        $b = 0;
        $d++;
        if (($d % 2) == 0) {
          $c++;
        }
      }
    }
  }
  if ((($foot = $n) % 2) == 0) {
    $foot++;
  }
  for ($i = 0; ($i < $foot); $i++) {
    print_tree($foot, "|", $max);
  }
?>
  