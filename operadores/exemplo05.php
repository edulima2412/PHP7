<?php

$a = 50;
$b = 35;

var_dump($a <=> $b);

echo "<br>";

?>

<?php

$a = NULL;
$b = NULL;
$c = 10;

echo $a ?? $b ?? $c;

?>