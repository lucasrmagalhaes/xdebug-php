<?php

use Alura\Leilao\Dao\Leilao as LeilaoDao;
use Alura\Leilao\Model\Leilao;

require_once __DIR__ . '/vendor/autoload.php';

$pdo = new \PDO('sqlite::memory:');
$pdo->exec('create table leiloes (
    id INTEGER primary key,
    descricao TEXT,
    finalizado BOOL,
    dataInicio TEXT
);');

$leilao = new Leilao('Brasília Amarela');
$leilaoDao = new LeilaoDao($pdo);
$leilao = $leilaoDao->salva($leilao);

$leilao->finaliza();
$leilaoDao->atualiza($leilao);