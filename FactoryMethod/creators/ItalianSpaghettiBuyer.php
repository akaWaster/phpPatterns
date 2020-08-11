<?php

use FactoryMethod\classes\ItalianSpaghettiCooker;

require_once('abstracts/SpaghettiCooker.php');
require_once('interfaces/ICookSpaghetti.php');

class ItalianSpaghettiBuyer extends SpaghettiCooker
{
    const ITALIAN_SPAGHETTI_SHOP = 'Ramstore',
        ITALIAN_SPAGHETTI_TYPE = 'Фигазе';
    public function __construct()
    {
        echo 'Готовится Итальянский Спагетти'.PHP_EOL;
    }
    public function buySpaghetti()
    {
        return new ItalianSpaghettiCooker(self::ITALIAN_SPAGHETTI_SHOP, self::ITALIAN_SPAGHETTI_TYPE);
    }
}