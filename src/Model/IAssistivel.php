<?php

namespace Model;

interface IAssistivel
{
    /**
     * Interface Segregation Principle
     * Principio de Segregação de Interfaces
     * Uma classe não pode ser forçada a depender de métodos que não utilizará
     * Não é legal forçar uma classe implementar um método de uma interface que ela não usa
     */
    public function assistir(): void;
}
