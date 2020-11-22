<?php

session_start();

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
    $_SESSION['mensagem de erro'] = "O nome nao pode ser vazio preencha novamente ";
    header('location:index.php');
}

if (strlen($nome)<3)
{
    $_SESSION['mensagem de erro'] = "O nome deve conter mais de 3 caracteres";
    header('location:index.php');
    
}

if (strlen($nome)>40)
{
    $_SESSION['mensagem de erro'] = " nome deve ser menor de 40 caracteres";
    header('location:index.php');
    
}

if (!is_numeric($idade))
{ 
    $_SESSION['mensagem de erro'] = " A idade deve ser um numero";
    header('location:index.php');
    
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
