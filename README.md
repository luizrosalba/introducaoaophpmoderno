# Introdução ao PHP Moderno

- PHP é uma linguagem Back-end server side (Processamento da solicitação do lado do servidor.) de scripts 
- a partir da versão 5 começa o PHP a ser OO 
- interpretado e multiparadigma (Porque ele suporta uma grande variedade técnica e de paradigmas de programação.)
- Xampp e lampp 
- lambda function 
- php standarts 
- frameworks , middlewares 
- mantido pela azend 
- zendframework 
- vou usar o docker

- acerte o arquivo .env

- renomeie as pastas do projeto no docker-compose.yml
- abrir outro VScode e executar o docker-compose up para manter o server online e ter acesso a ele em linha de comando 

- acerte o gitignore
```
/docker
.devcontainer
.env
docker-compose.yml
Makefile
```
- inicie o docker 
- apt-get install git
- attach ao php 
- localhost:89 

Qual é, respectivamente, uma das características de Requests e Responses?
Estado do servidor e tamanho do Buffer.

Quais das ferramentas abaixo não é citada pelo professor como sendo de PHP:
Ferramentas para design.

Leia as sentenças e assinale a alternativa correta.
I - PHP é uma linguagem open source, gerenciada pela empresa Zend.
II – É obrigatório realizar a instalação do Apache para a utilização do PHP.
III - O HTML é fundamental para desenvolver a linguagem PHP.
Apenas I está correta.


# Ecossistema PHP (CMS e Frameworks)

- Sistemas para gerenciamento de conteúdo 

- CMS wordpress, drupal , magento , october 

- mais de 50% da web ainda eh php 

-  Frameworks : symfony zend laravel cake phalcon  

- ambiente : apache ou ngnix 

- qquer uma a partir da 7 

- comando phpinfo();

- criamos public/index.php e public/info.php

```JS 
<?php

phpinfo();
```

# sintaxe e fundamentos 

![](1.PNG)

![](2.PNG)

- print  saida formatada 
- var_dump informações internas sobre o valor 
- 

# Criando um projeto Simples 

![](3.PNG)

# Aprenda na prática como utilizar o método de requisição e resposta na web com PHP

![](4.PNG)


``` JS
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Formulario</title>

        <meta name= "author" content=""></head>
        <meta name= "description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
<body>
    <p>Formulario para inscricao</p>
    <!-- get envia por query string na barrade endereco -->
    <!-- http://localhost:89/script.php?nome=21321&idade=12312 -->
    <form action="script.php" method="post">
    <p> Seu nome: <input type="text" name="nome" /> </p>
    <p> Sua idade: <input type="text" name="idade" /> </p>
    <p><input type="submit"></p>
    </form>
</body>
</html>
```
``` Js 
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
```
função com retorno bool 

```Js
function ValidaNome (string $nome) : bool 
{
    return true ;
}
```
faz a tipagem ser mais restritiva 

declare ('strict_type-1'); 

controle de erro : @ 

interromper ao encontrar uma falha require ()

Verifica se existe  e está setada isset()

unset elimina o que estiver setado 

- está separando por servicos :

- um para validar os dados 
- uma para mensagens por sessão 
- um para categoriacompetidor 

- include "arquivo ou diretorio"

- redireciona para uma nova localidade 
header ('location:index.php') 





