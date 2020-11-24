<?php

// tipagem dinamica igual js
$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = 'Luiz';
$idade = 18 ;

 var_dump($nome);
// var_dump($idade);

// if($idade>=6 && $idade <=12 )
// {
//     echo 'infantil';
// }
// else if ( $idade>=13 && $idade <=18 )
// {
//     echo 'adolescente';
// }
// else {
//     echo 'adulto';
// }


for ($i = 0; $i < count($categorias); $i++) {
    if ($categorias[$i] == 'infantil') {
        echo "O nadador ", $nome , " compete na categoria " ,$categorias[$i];
    }
}
