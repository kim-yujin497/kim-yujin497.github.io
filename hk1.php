<?php
$n = 30;
$sum = 0;
$prod = 1;

for($n = 1 ; $n<31 ; $n++)
{echo($n);
$sum += $n; 
$prod *= $n;
}

echo($sum);
echo($prod);

?>