<?php

use FactoryMethod\classes\KazakhSpaghettiCooker;

require_once('abstracts/SpaghettiCooker.php');
require_once('interfaces/ICookSpaghetti.php');

class  KazakhSpaghettiBuyer extends SpaghettiCooker
{
    const KAZAKH_SPAGHETTI_SHOP = 'Magnum',
        KAZAKH_SPAGHETTI_TYPE = 'Альденте';
    public function __construct()
    {
        echo 'Готовится Казахский Спагетти'.PHP_EOL;
    }

    public function buySpaghetti()
    {
        return new KazakhSpaghettiCooker(self::KAZAKH_SPAGHETTI_SHOP, self::KAZAKH_SPAGHETTI_TYPE);
    }
}