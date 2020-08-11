<?php


use FactoryMethod\classes\KazakhSpaghettiCooker;

require_once('classes/KazakhSpaghettiCooker.php');
require_once('classes/ItalianSpaghettiCooker.php');

require_once('interfaces/ICookSpaghetti.php');

require_once('creators/KazakhSpaghettiBuyer.php');
require_once('creators/ItalianSpaghettiBuyer.php');


class Creator
{
    public function cookSpaghetti(SpaghettiCooker $spaghetti,$time)
    {
        $spaghetti->cookSpaghetti($time);
    }
}


$spaghetti = new Creator();
$spaghetti->cookSpaghetti(new KazakhSpaghettiBuyer(),15);

echo  '~~~~~~~~~~~~~~~~~~~~~~~~~~~~'.PHP_EOL;

$spaghetti->cookSpaghetti(new ItalianSpaghettiBuyer(),35);