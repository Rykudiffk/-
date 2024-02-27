<?php
$x = 10;
$r = "Aprovado";
if ($x <= 5)
{
    $r = "Reprovado";
}
else if ($x <= 4){
    $r = "Recuperação";
}
echo "resultado: $r";

