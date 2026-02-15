<?php

$arquivo = fopen(__DIR__."/teste.txt","a");//Abre somente para escrita e coloca o ponteiro do arquivo no final do arquivo. Depois guarda na variável $arquivo
fwrite($arquivo,"\nPHP é incrível!");
fclose($arquivo);//Fecha o arquivo