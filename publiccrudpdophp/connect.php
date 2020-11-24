<?php 

declare(strict_types=1);

//phpinfo();

$pdo = null; 
try{
    //$pdo = new PDO('mysql:host=localhost;dbname=exemplo','root', 'glw2e3');
    $pdo = new PDO('mysql:host=172.19.0.1;port=3306;dbname=exemplo','root', 'glw2e3');
}catch (Exception $e) {
    echo $e->getMessage();
    die();
}

var_dump($pdo);
return ($pdo); 

?> 
