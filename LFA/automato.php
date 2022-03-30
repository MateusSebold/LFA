<?php

$q =  array('q0','q1','q2');
$q0 = 'q0';
$finais = array('q2');
$delta = array('q0'=>array('a'=>'q1','b'=>'q2'),
                'q1'=>array('a'=>'q0','b'=>'q2'),
                'q2'=>array('a'=>'q0','b'=>'q1'));



$entrada = "ababa";
$estado = 'q0';
for ($i=0;$i<strlen($entrada);$i++)
    $estado = $delta[$estado][$entrada[$i]];

if(in_array($estado,$finais))
    echo "Palavra Aceita";
else
    echo "Token inválido";


?>