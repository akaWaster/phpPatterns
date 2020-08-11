<?php

use FactoryMethod\interfaces\ICookSpaghetti;


abstract class SpaghettiCooker
{

    public function cookSpaghetti($time): void
    {
        $spaghetti = $this->buySpaghetti();

        $spaghetti->brewWater($time);
        $spaghetti->takeSpaghetti();
        $spaghetti->cookSpaghetti();
        $spaghetti->placeSpaghetti();

    }

    abstract public function buySpaghetti();
}