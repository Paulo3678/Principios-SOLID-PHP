<?php

namespace Alura\Solid\Service;

use Model\IPontuavel;

class Assistidor
{
    /**
     * Dependency Inversion Principle
     * Principio da Inversão de Dependencia
     * Would you solder a lamp directly to the electrical wiring in a wall?
     * Módulos de alto nível não devem depender de módulos de baixo nível e que ambos devem depender de abstrações
     * Abstrações não devem depender de implementações. Implementações devem depender de abstrações
     * Classes concretas, devem depender de interfaces e classes abstratas, mas classes abstratas e interfaces 
       não devem depender de classes concretas
     *  
     */
    public function assistir(IPontuavel $conteudo)
    {
        $conteudo->assistir();
    }
}
