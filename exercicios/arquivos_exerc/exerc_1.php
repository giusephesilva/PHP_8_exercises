<?php

$arquivo = fopen(__DIR__."/teste.txt","r");//Abre o arquivo somente para leitura e coloca na variável $arquivo
$primeiraLinha = fgets($arquivo);//Lê a primeira Linha
fclose($arquivo);//Fecha o arquivo

echo $primeiraLinha;