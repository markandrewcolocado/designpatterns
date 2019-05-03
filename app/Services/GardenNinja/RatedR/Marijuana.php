<?php

namespace App\Services\GardenNinja\RatedR;

use App\Services\GardenNinja\Plant;

/**
 * Class Marijuana
 *
 * @package App\Services\GardenNinja\RatedR
 *
 * @author Mark Andrew Colocado <mark05@simplexi.com.ph>
 * @date 5/3/2019 9:42 AM
 */
class Marijuana implements Plant
{
    /**
     * @return string
     */
    public function __toString()
    {
        return 'It\'s a marijuana plant, home slice!';
    }
}
