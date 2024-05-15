<?php

namespace ChocolateFactory;

use Sweets\Sweets;

class ChocolateFactory
{
    public function orderSnack(string $name, string $chocolate, array $toppings): void
    {
        $snack = $this->createSnack($name, $chocolate, $toppings);
        $snack->prepare();
        $snack->cut();
    }
    public function createSnack(string $name, string $chocolate, array $toppings): Sweets
    {
        return new Sweets($name, $chocolate, $toppings);
    }
}
