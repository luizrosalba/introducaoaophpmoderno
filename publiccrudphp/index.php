<?php

require 'Produto.php';


    $produto = new Produto();


switch ($_GET['operacao']) {
    case 'list':
        echo '<h3> Produotos </h3>';
        foreach ( $produto->list() as $value) 
        {
            echo 'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
        break;
    case 'insert':
        echo $produto->insert("batatinha");
        break;
    case 'update':
        echo $produto->insert("batatinha a a a aa ",1);
        break;
    case 'delete':
        echo $produto->delete(2);
        break;
    
    default:
        # code...
        break;
}
    
?>