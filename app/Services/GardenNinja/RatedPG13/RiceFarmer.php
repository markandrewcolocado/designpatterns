<?php

namespace App\Services\GardenNinja\RatedPG13;

use App\Services\GardenNinja\Merchant;

/**
 * Class RiceFarmer
 *
 * @package App\Services\GardenNinja\RatedPG13
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 5/3/2019 8:48 AM
 */
class RiceFarmer extends Merchant
{

    protected function createStore()
    {
        return new RiceStore;
    }

    protected function createGarden()
    {
        return new RiceGarden;
    }
}
