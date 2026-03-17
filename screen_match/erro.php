<?php

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\serie;

require 'autoload.php';

$serie = new Serie('Nome da Série', 2024, Genero::Acao,7,20,30);
$episodio = New Episodio($serie,'Piloto', 1);
$episodio->avalia(10);

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($episodio);