<?php
$n = 30;

for($i = 1 ; $i <= $n ; $i++)
{
$dada[] = rand( 10 , 100 );
}

$dada1 = implode( '/', $dada );
echo $dada1;

echo "<br>";

sort($dada);
$dada2 = implode( '/', $dada );
echo $dada2;

?>