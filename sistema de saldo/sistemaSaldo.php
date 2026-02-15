<?php
    $saldoAtual = 1000;
    echo "********************\n";
    echo "Titular: Giusephe Oliveira\n";
    echo "Saldo atual: R\$ $saldoAtual\n";
    echo "*********************\n";
    do{
        $input = 0;
        echo "1. Consultar saldo atual\n";
        echo "2. Sacar valor\n";
        echo "3. Depositar valor\n";
        echo "4. Sair\n";

        $opcao = (int) fgets(STDIN);

        switch ($opcao) {
            case 1:
                echo "********************\n";
                echo "Titular: Giusephe Oliveira\n";
                echo "Saldo atual: R\$ $saldoAtual\n";
                echo "*********************\n";
                break;
            case 2:
                echo "Qual Valor Deseja Sacar?\n";
                $input = (int) fgets(STDIN);
                if($input<=$saldoAtual){
                    $saldoAtual -= $input;
                }else{
                    echo "Saldo Insuficiente!!!\n";
                }
                break;

            case 3:
                echo "Quanto deseja depositar?\n";
                $input = (int) fgets(STDIN);
                $saldoAtual +=$input;
                break;

            case 4:
                echo "Adeus!";
                break;
                
            default:
                echo "Opção inválida\n";
                break;
            }
    }while($opcao!=4);