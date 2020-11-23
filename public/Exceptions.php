
<?php 
/// instanciando a classe Exception 
// throw new Exception("essa é uma exceção!"); /// encerra o codigo 

// echo "\n ...executando ... \n";

?>


<?php 
/// capturando erro
// function validarUsuario(array $usuario){
//     if ( empty($usuario['codigo']) || 
//          empty($usuario['nome']) || 
//          empty($usuario['idade']) )
//          {
//             throw new Exception ("Campos Obrigatórios não foram preenchidos");
//          }
//     return true; 
// }
    

// $usuario = [ 
//     'codigo' => 1,
//     'nome' => '',
//     'idade' => 57,
// ];

// validarUsuario($usuario);

// echo "\n ... executando ... \n";

?>

 

 
<?php 
/// trantando  erro
function validarUsuario(array $usuario){
    if ( empty($usuario['codigo']) || 
         empty($usuario['nome']) || 
         empty($usuario['idade']) )
         {
            throw new Exception ("Campos Obrigatórios não foram preenchidos");
         }
    return true; 
}
    

$usuario = [ 
    'codigo' => 1,
    //'nome' => 'dasdsa',
    'nome' => '',
    'idade' => 57,
];

try {
    $status = validarUsuario($usuario);
}catch (Exception $e) 
{ ///se houver exceção 
    echo $e->getMessage();
    //die(); /// mata o codigo 
}finally 
{  /// se nao houver exceção 
    echo "Status da Operação: " . (int)$status; /// convertendo bool para int para ter um codigo 
    die();
}

echo "\n ... executando ... \n";

?>







