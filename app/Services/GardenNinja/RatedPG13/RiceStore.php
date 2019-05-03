<?php

namespace App\Services\GardenNinja\RatedPG13;

use App\Services\GardenNinja\Store;

/**
 * Class RiceStore
 *
 * @package App\Services\GardenNinja\RatedPG13;
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 5/3/2019 9:21 AM
 */
class RiceStore implements Store
{
    public function price($product)
    {
        return 50;
    }
}
