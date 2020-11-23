<?php

//echo date ('d/m/Y') . PHP_EOL;

/// manipulacoes 
/// usar a classe  datetime

// $data = new DateTime();
// echo $data ->format ('d/m/y') . PHP_EOL;
// echo $data ->format ('d/m/Y H:i:s') . PHP_EOL;

//var_dump($data);


$data = new DateTime();
$intervalo = new DateInterval('PT5M');  /// intervalo de 5 Minutos 
$data->add($intervalo); /// adiciona o intervalo 

/// subtraindo 
$intervalo = new DateInterval('P5Y10M5DT10H50M10S');  /// intervalo de 5 Minutos 
$data->sub($intervalo); /// subtrai o intervalo 


var_dump($data);

?>