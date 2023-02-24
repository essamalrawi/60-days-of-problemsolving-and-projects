<?php
  $start = 0;
  $mix = [1, 2, 3, "A", "B", "C", 4];
  while ($start < count($mix)) {
    if ((gettype($mix[$start]) == gettype(1)) && $mix[$start] != 1) {
        echo $mix[$start] . "<br>";
      }
   $start++;
  }
?>