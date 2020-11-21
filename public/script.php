<?php

// tipagem dinamica igual js 
$categorias =[];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

// recupera a informaçõa que vem por post 
$nome = $_POST['nome'];
$idade = $_POST['idade']; 

// $nome = $_GET['nome'];
// $idade = $_GET['idade']; 


//  var_dump($nome);
//  var_dump($idade);

if (empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if (strlen($nome)<3)
{
    echo 'O nome deve conter mais de 3 caracteres';
    return;
}

if (strlen($nome)>40)
{
    echo 'O nome deve ser menor de 40 caracteres';
    return;
}

if($idade>=6 && $idade <=12 )
{
    echo 'infantil'; 
}
else if ( $idade>=13 && $idade <=18 ) 
{
    echo 'adolescente'; 
}
else {
    echo 'adulto'; 
}


// for ($i=0; $i < count($categorias) ; $i++) 
// { 
//     if($categorias[$i] =='infantil')
//         echo "O nadador ", $nome , " compete na categoria " ,$categorias[$i]; 
// }


?>
