<?php

namespace App\Services\GardenNinja\RatedR;

use App\Services\GardenNinja\Store;

/**
 * Class MarijuanaStore
 *
 * @package App\Services\GardenNinja\RatedR
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 5/3/2019 9:48 AM
 */
class MarijuanaStore implements Store
{
    public function price($product)
    {
        return 100;
    }
}
