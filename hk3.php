<?php

 $a = 1;
 $b = 1;
 $n = 30;
 
 for($i = 0; $i < $n; $i++)
 {
 $c = $b +$a;
 echo $a."<br>";
 $a = $b;
 $b = $c;
 }

?> 