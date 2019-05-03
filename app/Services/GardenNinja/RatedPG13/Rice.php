<?php

namespace App\Services\GardenNinja\RatedPG13;

use App\Services\GardenNinja\Plant;

/**
 * Class Rice
 *
 * @package App\Services\GardenNinja\RatedPG13
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 5/3/2019 9:03 AM
 */
class Rice implements Plant
{
    public function __toString()
    {
        return 'it\'s rice for you!';
    }
}
