<?php


namespace FactoryMethod\classes;

use FactoryMethod\interfaces\ICookSpaghetti;
require_once('interfaces/ICookSpaghetti.php');

class KazakhSpaghettiCooker implements ICookSpaghetti
{

    private $shop;
    private $type;

    /**
     * KazakhSpaghettiCooker constructor.
     * @param $shop
     * @param $type
     */
    public function __construct($shop, $type)
    {
        $this->shop = $shop;
        $this->type = $type;
        echo 'Спагетти (' . $this->type . ') был куплен в ' . $this->shop . PHP_EOL;

    }

    public function __destruct()
    {
        $this->type = null;
        $this->shop = null;
    }

    public function brewWater(int $time)
    {
        echo "Вода кипятится $time минут" . PHP_EOL;
    }

    public function putSpaghetti(int $amount)
    {
        echo 'Спагетти положили в воду в количестве ' . $amount . ' ' . PHP_EOL;
    }

    public function takeSpaghetti()
    {
        echo 'Достали спагетти с воды' . PHP_EOL;
    }

    public function cookSpaghetti()
    {
        echo 'Приготовили спагетти' . PHP_EOL;
    }

    public function placeSpaghetti()
    {
        echo 'Спагетти подан' . PHP_EOL;
    }
}