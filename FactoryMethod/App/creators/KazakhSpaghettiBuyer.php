<?php

namespace App\creators;

use App\classes\KazakhSpaghettiCooker;
use App\interfaces\ICookSpaghetti;
use App\abstracts\SpaghettiCooker;

class  KazakhSpaghettiBuyer extends SpaghettiCooker
{
    const KAZAKH_SPAGHETTI_SHOP = 'Magnum',
        KAZAKH_SPAGHETTI_TYPE = 'Альденте';

    public function __construct()
    {
        echo 'Готовится Казахский Спагетти'.PHP_EOL;
    }

    public function buySpaghetti() : ICookSpaghetti
    {
        return new KazakhSpaghettiCooker(self::KAZAKH_SPAGHETTI_SHOP, self::KAZAKH_SPAGHETTI_TYPE);
    }
}