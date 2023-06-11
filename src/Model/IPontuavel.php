<?php

namespace Model;

interface IPontuavel
{
    /**
     * Open Closed Principle
     * Open chest surgery is not needed when putting on a coat
     * Você não precisa expor toda funcionalidade do seu projeto para um única ação
     * Não é preciso expor como a pontuação é implementada/recuperada simplesmente para pegar a pontuação
     * Entidade de software(classes, módulos, funções, etc) devem ser abertas para expansão, porém, fechadas para modificação - Bertrand Mayer
     * Aberto: Quando é possível extender, quando é possível criar uma classe a partir da extensão de outra 
     * Fechado: Se ele já pode ser utilizado em outras classes, ou seja, sua interface, a forma de acessá-lo foi definida a ponto 
     * de ser acessível para outros módulos e classes
     */

    public function recuperarPontuacao(): int;
    public function assistir(): void;
}
