<?php

namespace App\Services\GardenNinja\RatedR;

use App\Services\GardenNinja\Merchant;

/**
 * Class DrugDealer
 *
 * @package App\Services\GardenNinja\RatedR
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 5/3/2019 8:48 AM
 */
class DrugDealer extends Merchant
{

    public function createStore()
    {
        return new MarijuanaStore;
    }

    public function createGarden()
    {
        return new MarijuanaGarden;
    }
}
