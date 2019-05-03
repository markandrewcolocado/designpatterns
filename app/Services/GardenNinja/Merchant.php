<?php

namespace App\Services\GardenNinja;

use App\Services\GardenNinja\RatedR\DrugDealer;
use App\Services\GardenNinja\RatedPG13\RiceFarmer;

/**
 * Class Merchant
 *
 * @package App\Services\GardenNinja
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 5/3/2019 8:43 AM
 */
abstract class Merchant
{
    abstract protected function createStore();

    abstract protected function createGarden();

    public function makeMoney()
    {
        $makeMoneyMoneymakeMoneyMoney = 0;

        $store = $this->createStore();

        $items = $this->createGarden()->items();

        foreach ($items as $item) {
            $makeMoneyMoneymakeMoneyMoney += $store->price($item);
        }

        return $makeMoneyMoneymakeMoneyMoney;
    }

    static public function fromRating($ratingLevel)
    {
        return $ratingLevel == 'R' ? new DrugDealer : new RiceFarmer;
    }
}
