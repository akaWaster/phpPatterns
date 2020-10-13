<?php
namespace App\creators;

use App\classes\ItalianSpaghettiCooker;
use App\interfaces\ICookSpaghetti;

use App\abstracts\SpaghettiCooker;

class ItalianSpaghettiBuyer extends SpaghettiCooker
{
    const ITALIAN_SPAGHETTI_SHOP = 'Ramstore',
        ITALIAN_SPAGHETTI_TYPE = 'Фигазе';

    public function __construct()
    {
        echo 'Готовится Итальянский Спагетти'.PHP_EOL;
    }
    public function buySpaghetti() : ICookSpaghetti
    {
        return new ItalianSpaghettiCooker(self::ITALIAN_SPAGHETTI_SHOP, self::ITALIAN_SPAGHETTI_TYPE);
    }
}