<?php
$saldo = 1_000; //O _ é só pra ficar melhor de ler.
$titular = 'Luiza Meneses';

do{
echo "-------------------------------\n";
echo "Titular: $titular\n";
echo "Saldo Atual: R$ $saldo\n";
echo "-------------------------------\n";

    echo "1. Consultar Saldo\n";
    echo "2. Sacar Valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

$opcao = (int)fgets(STDIN);//O fgets é para ler a opção que o usuário inserir. O int é opcional.

switch($opcao){
    case 1:
        echo "Titular: $titular\n";
        echo "Saldo Atual: R$ $saldo\n";
        break;
    case 2:
        echo "Quanto quer sacar\n?";
        $saque = (float)fgets(STDIN);
        if ($saque < $saldo){
            echo "Saque efetuado com sucesso\n";
            $saldo -= $saque;
        }else{
            echo "Saldo insuficiente\n";
        }
            break;
        case 3:
            echo "Quanto deseja depositar?\n";
            $deposito = (float)fgets(STDIN);
            if($deposito > 0){//pra que não aceite q se coloque valores negativos
            $saldo += $deposito;
            }
            break;
        case 4:
            echo "Saindo...\n";
            break;
        default:
            echo "Opção Inválida\n";
            break;

}

}while($opcao != 4);

//php index.php
