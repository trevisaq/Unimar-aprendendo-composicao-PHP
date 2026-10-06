<?php 

namespace App;

class Mochila{

    public function __construct(
        private int $capacidade,
        private int $pesoOcupado
    ) {}

    public function adicionarPeso(float $peso): bool
    {  
        if($peso <= 0){
            echo "Impossível adicionar o peso na mochila (o peso deve ser maior que zero)" . PHP_EOL;
            return false;
        }
        if($peso + $this->pesoOcupado > $this->capacidade){
            echo "Impossível adicionar o peso na mochila (excede, ou já atingiu o limite informado)" . PHP_EOL;
            return false;
            }
        $this->pesoOcupado += $peso;
        return true;

    }
    public function checarPeso(): string
    {
        return $this->pesoOcupado;
    }
}