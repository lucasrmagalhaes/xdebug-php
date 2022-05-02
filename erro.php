<?php

use Alura\Leilao\Model\Lance;
use Alura\Leilao\Model\Leilao;
use Alura\Leilao\Model\Usuario;

require_once __DIR__ . '/vendor/autoload.php';

ini_set('xdebug.dump.GET', '*');

$leilao = new Leilao('Um objeto.');

$umUsuario = new Usuario('Lucas');

$leilao->recebeLance(new Lance($umUsuario, 1000));
$leilao->recebeLance(new Lance($umUsuario, 1500));