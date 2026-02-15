<?php

$dadosJson = '{"nome":"Vinicius","anoNascimento":1997,"profissao":"Dev"}';
$importJson = json_decode($dadosJson);

var_dump($importJson);