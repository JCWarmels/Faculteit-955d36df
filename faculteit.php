<?php
echo("Welk getal?".PHP_EOL);
$getal = readline();
$ant =1 ;
for($i=1;$i<=$getal;$i++){
    $ant = $ant * $i;
}
echo("De faculteit van dat getal is: ".$ant);