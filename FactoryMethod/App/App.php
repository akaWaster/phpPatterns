<?php

namespace App;

use App\abstracts\SpaghettiCooker;
use App\creators\ItalianSpaghettiBuyer;
use App\creators\KazakhSpaghettiBuyer;

class App
{
    public function initialize()
    {

        $this->cookSpaghetti(new KazakhSpaghettiBuyer(), 15);
        echo '~~~~~~~~~~~~~~~~~~~~~~~~~~~~' . PHP_EOL;
        $this->cookSpaghetti(new ItalianSpaghettiBuyer(), 35);
    }

    public function cookSpaghetti(SpaghettiCooker $spaghetti, $time)
    {
        $spaghetti->cookSpaghetti($time);
    }
}