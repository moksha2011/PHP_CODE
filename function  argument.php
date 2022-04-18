<?php

function run($op, $a, $b) 
{
  return $op($a, $b);
}

$add = function($a, $b) 
{
  return $a + $b;
};

$sub = function($a, $b) 
{
  return $a - $b;
};

echo run($add, 3, 5), "\n";
echo run($sub, 5, 3);

?>