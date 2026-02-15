<?php

$filmeImportado = file_get_contents(__DIR__ . "/filme.json"); //Importa arquivo

$filmeArray = json_decode($filmeImportado, true); //Importa o arquivo json e transforma em array associativo

var_dump($filmeArray);
