<?php 

declare(strict_types=1);

$pdo = require 'connect.php'; 
/// nome da tabela e campos 
/// ? para cada parametro 
$sql = 'delete from produtos where id = ?'; 

/// cria um statement (estado antes da atribuicao feita pelo método bindparam)
$prepare = $pdo->prepare($sql);
/// seguranca contra SQL injection 
$prepare ->bindParam(1,$_GET['id']);

/// executa a query 
$prepare->execute();

echo $prepare->rowCount();


?> 
