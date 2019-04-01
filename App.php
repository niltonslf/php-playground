<?php

require 'Bicicleta.php';
require './Automovel.php';
require './Oficina.php';

$bicicleta = new Bicicleta();

$automovel = new Automovel();

$oficina = new Oficina([$bicicleta, $automovel]);

$oficina->proximo([$bicicleta, $automovel]);