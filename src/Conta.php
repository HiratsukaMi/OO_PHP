<?php

//Para maior segurança dos dados, sempre definir os tipos dos atributos dentro da classe.
class Conta
{
    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;
}

/*

--------- Exemplo de criação de uma nova conta a partir da classe Conta() definida acima:

$primeiraConta = new Conta(); // na variável $primeiraConta é armazenado o endereço da memória onde o objeto Conta() está armazenado.

--------- Após a conta ser criada, ela aparecerá no seguinte formato:

    object(Conta)#1 (3) {
        ["cpfTitular"]=>
            NULL
        ["nomeTitular"]=>
            NULL
        ["saldo"]=>
            NULL
}

--------- Para atribuir um valor ao atributo 'saldo', por exemplo, é usado o operador ->, que define o atributo que terá seu valor manipulado.

$primeiraConta->saldo = 200;

--------- Após executar a operação acima, o objeto Conta() passará a exibir o nº 200 no atributo 'saldo'.

    object(Conta)#1 (3) {
        ["cpfTitular"]=>
            NULL
        ["nomeTitular"]=>
            NULL
        ["saldo"]=>
            int(200)
}

*/