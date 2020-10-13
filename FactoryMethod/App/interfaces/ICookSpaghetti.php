<?php

namespace App\interfaces;

interface ICookSpaghetti
{
    public function brewWater(int $time);

    public function putSpaghetti(int $amount);

    public function takeSpaghetti();

    public function cookSpaghetti();

    public function placeSpaghetti();
}