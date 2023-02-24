<?php
$a = 30;
$b = 20;
$c = 10;
if ($a + $b === $c) {

  echo "A + B = C";
  echo "<br>";

} elseif ($a + $c === $b) {

  echo "A + C = B";
  echo "<br>";

} elseif ($b + $c === $a) {

  echo "B + C = A";
  echo "<br>";

} else {
  echo "The End";
  echo "<br>";
}
echo  $a + $b === $c ? "A + B = C\n" : ($a + $c === $b ? "A + C = B\n" : ($b + $c === $a ? "B + C + A" : "The End\n"));
?>