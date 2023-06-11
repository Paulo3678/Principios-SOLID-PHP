<?php

namespace Alura\Solid\Model;

use Model\IAssistivel;
use Model\IPontuavel;

class AluraMais extends Video implements IPontuavel, IAssistivel
{

    /**
     * Liskov Substitution Principle 
     * Principio de Substituição de Liskov
     * If it looks like a duck, quacks like a duck, but needs batteries - You probably have the wrong abstraction
     * Se q(x) uma propriedade que se pode provar do objeto x do tipo T. Então, q(y) também é possível provar para o objeto y
       do tipo S, sendo S um subtipo de T
     * Classes filhas nunca deveriam infringir as definições do tipo da classe pai
     * 
     */
    
    private $categoria;

    public function __construct(string $nome, string $categoria)
    {
        parent::__construct($nome);
        $this->categoria = $categoria;
    }

    public function recuperarUrl(): string
    {
        return 'http://videos.alura.com.br/' . str_replace(' ', '-', strtolower($this->categoria)) . $this->nome;
    }

    public function recuperarPontuacao(): int
    {
        return $this->minutosDeDuracao() * 2;
    }
}
