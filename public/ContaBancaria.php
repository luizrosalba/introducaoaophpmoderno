<?php

//// checagem de tipos , caso haja inconsistencia dá erro 
declare(strict_types=1);

class ContaBancaria { 
    /*
    * @var string  /// php 7.3
    */
    private string $banco; /// php 7.4
    /*
    * @var string
    */
    private string $nomeTitular; 
    /*
    * @var string
    */
    private string $numeroAgencia;
    /*
    * @var string
    */
    private string $numeroConta;
    /*
    * @var float
    */
    private float $saldo; 

//// métodos 
    public function __construct(
        string $banco,
        string $nomeTitular,
        string $numeroAgencia,
        string $numeroConta,
        float  $saldo)
    {
        $this->banco = $banco;
        $this->nomeTitular = $nomeTitular;
        $this->numeroAgencia = $numeroAgencia;
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
        
    }
    public function obterSaldo(): string
    {
        return 'Seu saldo atual é: ' .  $this->saldo;
    }

    public function depositar(float $valor): string
    {
        $this->saldo+=$valor;
        return 'Depósito de R$ '. $valor . ' realizado ! ';
    }

    public function sacar(float $valor): string
    {
        $this->saldo-=$valor;
        return 'Saque de R$ '. $valor . ' realizado ! ';
    }

}

/// Instância salva na var conta 
$conta = new ContaBancaria(
    'Banco do Brasil',
    'Luiz Rosalba',
    '8244',
    '57354-10',
    0.00
);

// /// acesso da propriedade
// var_dump ($conta -> nomeTitular);

// /// invocando métodos 
// var_dump ($conta -> obterSaldo());

/// acessado as informaçoes atraves do construtor 
//var_dump ($conta->$banco ); /// null,  nao tenho acesso 
//var_dump ($conta); /// ok , consigo acessar o construtor 

// obter saldo 
//var_dump ($conta->obterSaldo()); /// ok , consigo acessar o construtor 

// deposito
echo $conta->obterSaldo();

echo $conta->depositar(300.00); /// ok , consigo acessar o construtor 
echo PHP_EOL;
echo $conta->obterSaldo();
echo PHP_EOL;
echo $conta->sacar(150.00);
echo PHP_EOL;
echo $conta->obterSaldo();

// saque 

