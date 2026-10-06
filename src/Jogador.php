<?php 

namespace App;

class Jogador{

    public function __construct(
        private string $nome,
        private int $vida,
        private Mochila $mochila
    ) {}
    public function resumo(): string
    {
        return "O jogador '{$this->nome}' está com {$this->vida} de vida e carrega um peso de {$this->mochila->checarPeso()} Kg na mochila";
    }
}