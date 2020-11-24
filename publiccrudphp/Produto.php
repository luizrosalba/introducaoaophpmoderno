<?php 

declare(strict_types=1);

class Produto 
{
    /*
    * @var PDO
    */ 
    private $conexao;

    public function __construct()
    {


       try{
            //$pdo = new PDO('mysql:host=localhost;dbname=exemplo','root', 'glw2e3');
            $this->conexao = new PDO('mysql:host=172.19.0.1;port=3306;dbname=exemplo','root', 'glw2e3');
        }
        catch (Exception $e) 
        {
            echo $e->getMessage();
            die();
        }
    }

    public function list ():array
    {
        $sql = 'select * from produtos'; 
        echo '<h3> Produotos </h3>';
        $produtos =[];
        foreach ( $this->conexao->query($sql) as $key => $value) 
        {
            array_push($produtos , $value);
            //  'Id: ' . $value['id'] . '<br> Descrição: ' . $value['descricao'] . '<hr>';
        }
        return $produtos; 
    }

    public function insert (string $descricao):int
    {

        /// prepare( Uma string com a instrução SQL que desejamos executar).
        $sql = 'insert into produtos(descricao) values(?)'; 

        /// cria um statement (estado antes da atribuicao feita pelo método bindparam)
        $prepare = $this->conexao->prepare($sql);
        /// seguranca contra SQL injection 
        $prepare ->bindParam(1,$descricao);
        /// executa a query 
        $prepare->execute();
        
        return $prepare->rowCount();
    }
    public function update (string $descricao, int $id):int
    {

        $sql = 'update produtos set descricao = ? where id = ?'; 

        /// cria um statement (estado antes da atribuicao feita pelo método bindparam)
        $prepare = $this->conexao->prepare($sql);
        /// seguranca contra SQL injection 
        $prepare ->bindParam(1,$descricao);
        $prepare ->bindParam(2,$id);

        /// executa a query 
        $prepare->execute();

        return $prepare->rowCount();
    }
    public function delete ($id):int
    {
        /// cria um statement (estado antes da atribuicao feita pelo método bindparam)
        $sql = 'delete from produtos where id = ?'; 

        /// cria um statement (estado antes da atribuicao feita pelo método bindparam)
        $prepare =  $this->conexao->prepare($sql);
        /// seguranca contra SQL injection 
        $prepare ->bindParam(1,$id);
        
        /// executa a query 
        $prepare->execute();
        
        return $prepare->rowCount();
        
    }
  
}
?>