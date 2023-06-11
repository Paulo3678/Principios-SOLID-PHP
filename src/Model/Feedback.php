<?php

namespace Model;

class Feedback
{
    private int $nota;
    private string $depoimento;
    /**
     * Single Responsibility Principle - Principio da responsabilidade única
     * Just because you can, doesn't mean you should
     * Só por que você pode criar seu programa em um único arquivo, não quer dizer que você deve fazer isso 
     * Uma classe só deveria ter um único motivo para mudar - Robert (Uncle Bob) Martin 
     */
    public function __construct(int $nota, ?string $depoimento)
    {
        if ($nota < 9 && empty($depoimento)) {
            throw new \DomainException('Depoimento obrigatório');
        }

        $this->nota = $nota;
        $this->depoimento = $depoimento;
    }
}
