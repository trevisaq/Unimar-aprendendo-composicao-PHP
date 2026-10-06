<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Mochila;
use App\Jogador;

$bag = new Mochila(40, 2);
$player = new Jogador("Andersson silva", 100, $bag);
$bag->adicionarPeso(30);

echo $player->resumo();


?>
