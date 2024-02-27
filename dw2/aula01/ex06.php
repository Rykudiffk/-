<?php
$x = 10;
$r = "Reprovado";
if ($x >= 6)
{
    $r = "Aprovado";
}
else if ($x <= 4){
    $r = "Recuperação";
}
echo "resultado: $r";

