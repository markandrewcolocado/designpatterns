<?php

namespace App\Services\GardenNinja\RatedPG13;

use App\Services\GardenNinja\Garden;

/**
 * Class RiceGarden
 *
 * @package App\Services\GardenNinja\RatedPG13
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 5/3/2019 9:10 AM
 */
class RiceGarden implements Garden
{
    public function items()
    {
        return [new Rice, new Rice];
    }
}