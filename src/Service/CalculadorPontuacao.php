<?php

namespace Alura\Solid\Service;

use Model\IPontuavel;

class CalculadorPontuacao
{
    public function recuperarPontuacao(IPontuavel $conteudo)
    {
        return $conteudo->recuperarPontuacao();
    }
}
